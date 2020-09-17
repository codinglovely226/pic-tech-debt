@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.organisation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.organisations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.id') }}
                        </th>
                        <td>
                            {{ $organisation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.organisation_name') }}
                        </th>
                        <td>
                            {{ $organisation->organisation_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.logo') }}
                        </th>
                        <td>
                            @if($organisation->logo)
                                <a href="{{ $organisation->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $organisation->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.organisation_street') }}
                        </th>
                        <td>
                            {{ $organisation->organisation_street }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.organisation_street_2') }}
                        </th>
                        <td>
                            {{ $organisation->organisation_street_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.organisation_city') }}
                        </th>
                        <td>
                            {{ $organisation->organisation_city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.organisation_postcode') }}
                        </th>
                        <td>
                            {{ $organisation->organisation_postcode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.organisation_state') }}
                        </th>
                        <td>
                            {{ $organisation->organisation_state }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.organisation.fields.iso_alpha_2') }}
                        </th>
                        <td>
                            {{ $organisation->iso_alpha_2->country_name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.organisations.index') }}">
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
            <a class="nav-link" href="#organisation_subscriptions" role="tab" data-toggle="tab">
                {{ trans('cruds.subscription.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#organisation_teams" role="tab" data-toggle="tab">
                {{ trans('cruds.team.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="organisation_subscriptions">
            @includeIf('admin.organisations.relationships.organisationSubscriptions', ['subscriptions' => $organisation->organisationSubscriptions])
        </div>
        <div class="tab-pane" role="tabpanel" id="organisation_teams">
            @includeIf('admin.organisations.relationships.organisationTeams', ['teams' => $organisation->organisationTeams])
        </div>
    </div>
</div>

@endsection