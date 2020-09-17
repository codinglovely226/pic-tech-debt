@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.site.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sites.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="site_name">{{ trans('cruds.site.fields.site_name') }}</label>
                <input class="form-control {{ $errors->has('site_name') ? 'is-invalid' : '' }}" type="text" name="site_name" id="site_name" value="{{ old('site_name', '') }}" required>
                @if($errors->has('site_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.site_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="shortcode">{{ trans('cruds.site.fields.shortcode') }}</label>
                <input class="form-control {{ $errors->has('shortcode') ? 'is-invalid' : '' }}" type="text" name="shortcode" id="shortcode" value="{{ old('shortcode', '') }}" required>
                @if($errors->has('shortcode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('shortcode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.shortcode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="site_default_time_zone">{{ trans('cruds.site.fields.site_default_time_zone') }}</label>
                <input class="form-control {{ $errors->has('site_default_time_zone') ? 'is-invalid' : '' }}" type="number" name="site_default_time_zone" id="site_default_time_zone" value="{{ old('site_default_time_zone', '8') }}" step="1">
                @if($errors->has('site_default_time_zone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site_default_time_zone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.site_default_time_zone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organisation_id">{{ trans('cruds.site.fields.organisation') }}</label>
                <select class="form-control select2 {{ $errors->has('organisation') ? 'is-invalid' : '' }}" name="organisation_id" id="organisation_id">
                    @foreach($organisations as $id => $organisation)
                        <option value="{{ $id }}" {{ old('organisation_id') == $id ? 'selected' : '' }}>{{ $organisation }}</option>
                    @endforeach
                </select>
                @if($errors->has('organisation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.organisation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="country_id">{{ trans('cruds.site.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id" required>
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection