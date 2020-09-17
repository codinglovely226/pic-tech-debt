<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTeamRequest;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\IsotoCountry;
use App\Organisation;
use App\Team;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    use MediaUploadingTrait, CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('team_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Team::with(['organisation', 'country'])->select(sprintf('%s.*', (new Team)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'team_show';
                $editGate      = 'team_edit';
                $deleteGate    = 'team_delete';
                $crudRoutePart = 'teams';

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
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('shortcode', function ($row) {
                return $row->shortcode ? $row->shortcode : "";
            });
            $table->editColumn('timezone', function ($row) {
                return $row->timezone ? $row->timezone : "";
            });
            $table->addColumn('organisation_organisation_name', function ($row) {
                return $row->organisation ? $row->organisation->organisation_name : '';
            });

            $table->addColumn('country_country_name', function ($row) {
                return $row->country ? $row->country->country_name : '';
            });

            $table->editColumn('region', function ($row) {
                return $row->region ? $row->region : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'organisation', 'country']);

            return $table->make(true);
        }

        $organisations   = Organisation::get();
        $isoto_countries = IsotoCountry::get();

        return view('admin.teams.index', compact('organisations', 'isoto_countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('team_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisations = Organisation::all()->pluck('organisation_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = IsotoCountry::all()->pluck('country_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.teams.create', compact('organisations', 'countries'));
    }

    public function store(StoreTeamRequest $request)
    {
        $team = Team::create($request->all());

        if ($request->input('logo', false)) {
            $team->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $team->id]);
        }

        return redirect()->route('admin.teams.index');
    }

    public function edit(Team $team)
    {
        abort_if(Gate::denies('team_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisations = Organisation::all()->pluck('organisation_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = IsotoCountry::all()->pluck('country_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team->load('organisation', 'country');

        return view('admin.teams.edit', compact('organisations', 'countries', 'team'));
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        $team->update($request->all());

        if ($request->input('logo', false)) {
            if (!$team->logo || $request->input('logo') !== $team->logo->file_name) {
                if ($team->logo) {
                    $team->logo->delete();
                }

                $team->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($team->logo) {
            $team->logo->delete();
        }

        return redirect()->route('admin.teams.index');
    }

    public function show(Team $team)
    {
        abort_if(Gate::denies('team_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team->load('organisation', 'country', 'teamSiteDataSets', 'siteSpecialists');

        return view('admin.teams.show', compact('team'));
    }

    public function destroy(Team $team)
    {
        abort_if(Gate::denies('team_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $team->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeamRequest $request)
    {
        Team::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('team_create') && Gate::denies('team_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Team();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
