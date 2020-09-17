<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySpecialistRequest;
use App\Http\Requests\StoreSpecialistRequest;
use App\Http\Requests\UpdateSpecialistRequest;
use App\Specialist;
use App\Team;
use App\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SpecialistsController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('specialist_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Specialist::with(['user', 'sites'])->select(sprintf('%s.*', (new Specialist)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'specialist_show';
                $editGate      = 'specialist_edit';
                $deleteGate    = 'specialist_delete';
                $crudRoutePart = 'specialists';

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
            $table->editColumn('specialist_name', function ($row) {
                return $row->specialist_name ? $row->specialist_name : "";
            });
            $table->editColumn('specialty', function ($row) {
                return $row->specialty ? $row->specialty : "";
            });
            $table->editColumn('site', function ($row) {
                $labels = [];

                foreach ($row->sites as $site) {
                    $labels[] = sprintf('<span class="label label-info label-many">%s</span>', $site->name);
                }

                return implode(' ', $labels);
            });

            $table->rawColumns(['actions', 'placeholder', 'site']);

            return $table->make(true);
        }

        $users = User::get();
        $teams = Team::get();

        return view('admin.specialists.index', compact('users', 'teams'));
    }

    public function create()
    {
        abort_if(Gate::denies('specialist_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sites = Team::all()->pluck('name', 'id');

        return view('admin.specialists.create', compact('users', 'sites'));
    }

    public function store(StoreSpecialistRequest $request)
    {
        $specialist = Specialist::create($request->all());
        $specialist->sites()->sync($request->input('sites', []));

        return redirect()->route('admin.specialists.index');
    }

    public function edit(Specialist $specialist)
    {
        abort_if(Gate::denies('specialist_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sites = Team::all()->pluck('name', 'id');

        $specialist->load('user', 'sites');

        return view('admin.specialists.edit', compact('users', 'sites', 'specialist'));
    }

    public function update(UpdateSpecialistRequest $request, Specialist $specialist)
    {
        $specialist->update($request->all());
        $specialist->sites()->sync($request->input('sites', []));

        return redirect()->route('admin.specialists.index');
    }

    public function show(Specialist $specialist)
    {
        abort_if(Gate::denies('specialist_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $specialist->load('user', 'sites');

        return view('admin.specialists.show', compact('specialist'));
    }

    public function destroy(Specialist $specialist)
    {
        abort_if(Gate::denies('specialist_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $specialist->delete();

        return back();
    }

    public function massDestroy(MassDestroySpecialistRequest $request)
    {
        Specialist::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
