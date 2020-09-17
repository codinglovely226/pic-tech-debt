@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.isotoCountry.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.isoto-countries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.isotoCountry.fields.id') }}
                        </th>
                        <td>
                            {{ $isotoCountry->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.isotoCountry.fields.country_name') }}
                        </th>
                        <td>
                            {{ $isotoCountry->country_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.isotoCountry.fields.iso_alpha_2') }}
                        </th>
                        <td>
                            {{ $isotoCountry->iso_alpha_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.isotoCountry.fields.iso_alpha_3') }}
                        </th>
                        <td>
                            {{ $isotoCountry->iso_alpha_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.isotoCountry.fields.iso_un_m_49') }}
                        </th>
                        <td>
                            {{ $isotoCountry->iso_un_m_49 }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.isoto-countries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#iso_alpha2_organisations" role="tab" data-toggle="tab">
                {{ trans('cruds.organisation.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#country_teams" role="tab" data-toggle="tab">
                {{ trans('cruds.team.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="iso_alpha2_organisations">
            @includeIf('admin.isotoCountries.relationships.isoAlpha2Organisations', ['organisations' => $isotoCountry->isoAlpha2Organisations])
        </div>
        <div class="tab-pane" role="tabpanel" id="country_teams">
            @includeIf('admin.isotoCountries.relationships.countryTeams', ['teams' => $isotoCountry->countryTeams])
        </div>
    </div>
</div>

@endsection