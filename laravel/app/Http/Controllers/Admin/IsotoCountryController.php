<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyIsotoCountryRequest;
use App\Http\Requests\StoreIsotoCountryRequest;
use App\Http\Requests\UpdateIsotoCountryRequest;
use App\IsotoCountry;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class IsotoCountryController extends Controller
{
    use CsvImportTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('isoto_country_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = IsotoCountry::query()->select(sprintf('%s.*', (new IsotoCountry)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'isoto_country_show';
                $editGate      = 'isoto_country_edit';
                $deleteGate    = 'isoto_country_delete';
                $crudRoutePart = 'isoto-countries';

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
            $table->editColumn('country_name', function ($row) {
                return $row->country_name ? $row->country_name : "";
            });
            $table->editColumn('iso_alpha_2', function ($row) {
                return $row->iso_alpha_2 ? $row->iso_alpha_2 : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.isotoCountries.index');
    }

    public function create()
    {
        abort_if(Gate::denies('isoto_country_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.isotoCountries.create');
    }

    public function store(StoreIsotoCountryRequest $request)
    {
        $isotoCountry = IsotoCountry::create($request->all());

        return redirect()->route('admin.isoto-countries.index');
    }

    public function edit(IsotoCountry $isotoCountry)
    {
        abort_if(Gate::denies('isoto_country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.isotoCountries.edit', compact('isotoCountry'));
    }

    public function update(UpdateIsotoCountryRequest $request, IsotoCountry $isotoCountry)
    {
        $isotoCountry->update($request->all());

        return redirect()->route('admin.isoto-countries.index');
    }

    public function show(IsotoCountry $isotoCountry)
    {
        abort_if(Gate::denies('isoto_country_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $isotoCountry->load('isoAlpha2Organisations', 'countryTeams');

        return view('admin.isotoCountries.show', compact('isotoCountry'));
    }

    public function destroy(IsotoCountry $isotoCountry)
    {
        abort_if(Gate::denies('isoto_country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $isotoCountry->delete();

        return back();
    }

    public function massDestroy(MassDestroyIsotoCountryRequest $request)
    {
        IsotoCountry::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
