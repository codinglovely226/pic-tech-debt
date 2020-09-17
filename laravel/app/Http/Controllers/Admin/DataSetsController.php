<?php

namespace App\Http\Controllers\Admin;

use App\DataSet;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyDataSetRequest;
use App\Http\Requests\StoreDataSetRequest;
use App\Http\Requests\UpdateDataSetRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class DataSetsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('data_set_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = DataSet::query()->select(sprintf('%s.*', (new DataSet)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'data_set_show';
                $editGate      = 'data_set_edit';
                $deleteGate    = 'data_set_delete';
                $crudRoutePart = 'data-sets';

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
            $table->editColumn('source', function ($row) {
                return $row->source ? $row->source : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.dataSets.index');
    }

    public function create()
    {
        abort_if(Gate::denies('data_set_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dataSets.create');
    }

    public function store(StoreDataSetRequest $request)
    {
        $dataSet = DataSet::create($request->all());

        return redirect()->route('admin.data-sets.index');
    }

    public function edit(DataSet $dataSet)
    {
        abort_if(Gate::denies('data_set_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dataSets.edit', compact('dataSet'));
    }

    public function update(UpdateDataSetRequest $request, DataSet $dataSet)
    {
        $dataSet->update($request->all());

        return redirect()->route('admin.data-sets.index');
    }

    public function show(DataSet $dataSet)
    {
        abort_if(Gate::denies('data_set_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.dataSets.show', compact('dataSet'));
    }

    public function destroy(DataSet $dataSet)
    {
        abort_if(Gate::denies('data_set_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $dataSet->delete();

        return back();
    }

    public function massDestroy(MassDestroyDataSetRequest $request)
    {
        DataSet::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
