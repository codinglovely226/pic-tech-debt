<?php

namespace App\Http\Controllers\Admin;

use App\DataSet;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySiteDataSetRequest;
use App\Http\Requests\StoreSiteDataSetRequest;
use App\Http\Requests\UpdateSiteDataSetRequest;
use App\SiteDataSet;
use App\Team;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SiteDataSetsController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('site_data_set_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteDataSets = SiteDataSet::all();

        $data_sets = DataSet::get();

        $teams = Team::get();

        return view('admin.siteDataSets.index', compact('siteDataSets', 'data_sets', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('site_data_set_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datasets = DataSet::all()->pluck('name', 'id');

        $teams = Team::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.siteDataSets.create', compact('datasets', 'teams'));
    }

    public function store(StoreSiteDataSetRequest $request)
    {
        $siteDataSet = SiteDataSet::create($request->all());
        $siteDataSet->datasets()->sync($request->input('datasets', []));

        return redirect()->route('admin.site-data-sets.index');
    }

    public function edit(SiteDataSet $siteDataSet)
    {
        abort_if(Gate::denies('site_data_set_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datasets = DataSet::all()->pluck('name', 'id');

        $teams = Team::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $siteDataSet->load('datasets', 'team');

        return view('admin.siteDataSets.edit', compact('datasets', 'teams', 'siteDataSet'));
    }

    public function update(UpdateSiteDataSetRequest $request, SiteDataSet $siteDataSet)
    {
        $siteDataSet->update($request->all());
        $siteDataSet->datasets()->sync($request->input('datasets', []));

        return redirect()->route('admin.site-data-sets.index');
    }

    public function show(SiteDataSet $siteDataSet)
    {
        abort_if(Gate::denies('site_data_set_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteDataSet->load('datasets', 'team');

        return view('admin.siteDataSets.show', compact('siteDataSet'));
    }

    public function destroy(SiteDataSet $siteDataSet)
    {
        abort_if(Gate::denies('site_data_set_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $siteDataSet->delete();

        return back();
    }

    public function massDestroy(MassDestroySiteDataSetRequest $request)
    {
        SiteDataSet::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
