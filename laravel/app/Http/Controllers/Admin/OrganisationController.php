<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOrganisationRequest;
use App\Http\Requests\StoreOrganisationRequest;
use App\Http\Requests\UpdateOrganisationRequest;
use App\IsotoCountry;
use App\Organisation;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class OrganisationController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('organisation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Organisation::with(['iso_alpha_2'])->select(sprintf('%s.*', (new Organisation)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'organisation_show';
                $editGate      = 'organisation_edit';
                $deleteGate    = 'organisation_delete';
                $crudRoutePart = 'organisations';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('organisation_name', function ($row) {
                return $row->organisation_name ? $row->organisation_name : "";
            });
            $table->addColumn('iso_alpha_2_country_name', function ($row) {
                return $row->iso_alpha_2 ? $row->iso_alpha_2->country_name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'iso_alpha_2']);

            return $table->make(true);
        }

        $isoto_countries = IsotoCountry::get();

        return view('admin.organisations.index', compact('isoto_countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('organisation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $iso_alpha_2s = IsotoCountry::all()->pluck('country_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.organisations.create', compact('iso_alpha_2s'));
    }

    public function store(StoreOrganisationRequest $request)
    {
        $organisation = Organisation::create($request->all());

        if ($request->input('logo', false)) {
            $organisation->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $organisation->id]);
        }

        return redirect()->route('admin.organisations.index');
    }

    public function edit(Organisation $organisation)
    {
        abort_if(Gate::denies('organisation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $iso_alpha_2s = IsotoCountry::all()->pluck('country_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $organisation->load('iso_alpha_2');

        return view('admin.organisations.edit', compact('iso_alpha_2s', 'organisation'));
    }

    public function update(UpdateOrganisationRequest $request, Organisation $organisation)
    {
        $organisation->update($request->all());

        if ($request->input('logo', false)) {
            if (!$organisation->logo || $request->input('logo') !== $organisation->logo->file_name) {
                if ($organisation->logo) {
                    $organisation->logo->delete();
                }

                $organisation->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($organisation->logo) {
            $organisation->logo->delete();
        }

        return redirect()->route('admin.organisations.index');
    }

    public function show(Organisation $organisation)
    {
        abort_if(Gate::denies('organisation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisation->load('iso_alpha_2', 'organisationSubscriptions', 'organisationTeams');

        return view('admin.organisations.show', compact('organisation'));
    }

    public function destroy(Organisation $organisation)
    {
        abort_if(Gate::denies('organisation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisation->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrganisationRequest $request)
    {
        Organisation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('organisation_create') && Gate::denies('organisation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Organisation();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
