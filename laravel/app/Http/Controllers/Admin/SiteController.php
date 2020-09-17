<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySiteRequest;
use App\Http\Requests\StoreSiteRequest;
use App\Http\Requests\UpdateSiteRequest;
use App\IsotoCountry;
use App\Organisation;
use App\Site;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SiteController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('site_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Site::with(['organisation', 'country'])->select(sprintf('%s.*', (new Site)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'site_show';
                $editGate      = 'site_edit';
                $deleteGate    = 'site_delete';
                $crudRoutePart = 'sites';

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
            $table->editColumn('site_name', function ($row) {
                return $row->site_name ? $row->site_name : "";
            });
            $table->editColumn('shortcode', function ($row) {
                return $row->shortcode ? $row->shortcode : "";
            });
            $table->editColumn('site_default_time_zone', function ($row) {
                return $row->site_default_time_zone ? $row->site_default_time_zone : "";
            });
            $table->addColumn('country_country_name', function ($row) {
                return $row->country ? $row->country->country_name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'country']);

            return $table->make(true);
        }

        $organisations   = Organisation::get();
        $isoto_countries = IsotoCountry::get();

        return view('admin.sites.index', compact('organisations', 'isoto_countries'));
    }

    public function create()
    {
        abort_if(Gate::denies('site_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisations = Organisation::all()->pluck('organisation_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = IsotoCountry::all()->pluck('country_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.sites.create', compact('organisations', 'countries'));
    }

    public function store(StoreSiteRequest $request)
    {
        $site = Site::create($request->all());

        return redirect()->route('admin.sites.index');
    }

    public function edit(Site $site)
    {
        abort_if(Gate::denies('site_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisations = Organisation::all()->pluck('organisation_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $countries = IsotoCountry::all()->pluck('country_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $site->load('organisation', 'country');

        return view('admin.sites.edit', compact('organisations', 'countries', 'site'));
    }

    public function update(UpdateSiteRequest $request, Site $site)
    {
        $site->update($request->all());

        return redirect()->route('admin.sites.index');
    }

    public function show(Site $site)
    {
        abort_if(Gate::denies('site_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $site->load('organisation', 'country', 'siteUsers', 'siteSpecialists');

        return view('admin.sites.show', compact('site'));
    }

    public function destroy(Site $site)
    {
        abort_if(Gate::denies('site_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $site->delete();

        return back();
    }

    public function massDestroy(MassDestroySiteRequest $request)
    {
        Site::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
