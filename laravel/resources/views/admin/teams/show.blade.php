@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.team.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.id') }}
                        </th>
                        <td>
                            {{ $team->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.name') }}
                        </th>
                        <td>
                            {{ $team->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.shortcode') }}
                        </th>
                        <td>
                            {{ $team->shortcode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.logo') }}
                        </th>
                        <td>
                            @if($team->logo)
                                <a href="{{ $team->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $team->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.timezone') }}
                        </th>
                        <td>
                            {{ $team->timezone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.organisation') }}
                        </th>
                        <td>
                            {{ $team->organisation->organisation_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.country') }}
                        </th>
                        <td>
                            {{ $team->country->country_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.team.fields.region') }}
                        </th>
                        <td>
                            {{ $team->region }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
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
            <a class="nav-link" href="#team_site_data_sets" role="tab" data-toggle="tab">
                {{ trans('cruds.siteDataSet.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#site_specialists" role="tab" data-toggle="tab">
                {{ trans('cruds.specialist.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="team_site_data_sets">
            @includeIf('admin.teams.relationships.teamSiteDataSets', ['siteDataSets' => $team->teamSiteDataSets])
        </div>
        <div class="tab-pane" role="tabpanel" id="site_specialists">
            @includeIf('admin.teams.relationships.siteSpecialists', ['specialists' => $team->siteSpecialists])
        </div>
    </div>
</div>

@endsection