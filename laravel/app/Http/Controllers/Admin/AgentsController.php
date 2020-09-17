<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\DataSet;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyAgentRequest;
use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AgentsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('agent_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Agent::with(['dataset'])->select(sprintf('%s.*', (new Agent)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'agent_show';
                $editGate      = 'agent_edit';
                $deleteGate    = 'agent_delete';
                $crudRoutePart = 'agents';

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
            $table->editColumn('agent_reference_name', function ($row) {
                return $row->agent_reference_name ? $row->agent_reference_name : "";
            });
            $table->editColumn('agent_reference_url', function ($row) {
                return $row->agent_reference_url ? $row->agent_reference_url : "";
            });
            $table->editColumn('agent_reference_source', function ($row) {
                return $row->agent_reference_source ? $row->agent_reference_source : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $data_sets = DataSet::get();

        return view('admin.agents.index', compact('data_sets'));
    }

    public function create()
    {
        abort_if(Gate::denies('agent_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datasets = DataSet::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.agents.create', compact('datasets'));
    }

    public function store(StoreAgentRequest $request)
    {
        $agent = Agent::create($request->all());

        return redirect()->route('admin.agents.index');
    }

    public function edit(Agent $agent)
    {
        abort_if(Gate::denies('agent_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datasets = DataSet::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $agent->load('dataset');

        return view('admin.agents.edit', compact('datasets', 'agent'));
    }

    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        $agent->update($request->all());

        return redirect()->route('admin.agents.index');
    }

    public function show(Agent $agent)
    {
        abort_if(Gate::denies('agent_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agent->load('dataset');

        return view('admin.agents.show', compact('agent'));
    }

    public function destroy(Agent $agent)
    {
        abort_if(Gate::denies('agent_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $agent->delete();

        return back();
    }

    public function massDestroy(MassDestroyAgentRequest $request)
    {
        Agent::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
