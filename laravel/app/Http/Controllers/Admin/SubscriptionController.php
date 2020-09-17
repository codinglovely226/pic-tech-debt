<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroySubscriptionRequest;
use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;
use App\Organisation;
use App\Subscription;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SubscriptionController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('subscription_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Subscription::with(['organisation'])->select(sprintf('%s.*', (new Subscription)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'subscription_show';
                $editGate      = 'subscription_edit';
                $deleteGate    = 'subscription_delete';
                $crudRoutePart = 'subscriptions';

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
            $table->addColumn('organisation_organisation_name', function ($row) {
                return $row->organisation ? $row->organisation->organisation_name : '';
            });

            $table->editColumn('subscription_type', function ($row) {
                return $row->subscription_type ? Subscription::SUBSCRIPTION_TYPE_SELECT[$row->subscription_type] : '';
            });

            $table->editColumn('duration', function ($row) {
                return $row->duration ? $row->duration : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'organisation']);

            return $table->make(true);
        }

        $organisations = Organisation::get();

        return view('admin.subscriptions.index', compact('organisations'));
    }

    public function create()
    {
        abort_if(Gate::denies('subscription_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisations = Organisation::all()->pluck('organisation_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.subscriptions.create', compact('organisations'));
    }

    public function store(StoreSubscriptionRequest $request)
    {
        $subscription = Subscription::create($request->all());

        return redirect()->route('admin.subscriptions.index');
    }

    public function edit(Subscription $subscription)
    {
        abort_if(Gate::denies('subscription_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $organisations = Organisation::all()->pluck('organisation_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subscription->load('organisation');

        return view('admin.subscriptions.edit', compact('organisations', 'subscription'));
    }

    public function update(UpdateSubscriptionRequest $request, Subscription $subscription)
    {
        $subscription->update($request->all());

        return redirect()->route('admin.subscriptions.index');
    }

    public function show(Subscription $subscription)
    {
        abort_if(Gate::denies('subscription_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscription->load('organisation');

        return view('admin.subscriptions.show', compact('subscription'));
    }

    public function destroy(Subscription $subscription)
    {
        abort_if(Gate::denies('subscription_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscription->delete();

        return back();
    }

    public function massDestroy(MassDestroySubscriptionRequest $request)
    {
        Subscription::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
