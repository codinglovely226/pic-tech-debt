@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.isotoCountry.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.isoto-countries.update", [$isotoCountry->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="country_name">{{ trans('cruds.isotoCountry.fields.country_name') }}</label>
                <input class="form-control {{ $errors->has('country_name') ? 'is-invalid' : '' }}" type="text" name="country_name" id="country_name" value="{{ old('country_name', $isotoCountry->country_name) }}">
                @if($errors->has('country_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.isotoCountry.fields.country_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="iso_alpha_2">{{ trans('cruds.isotoCountry.fields.iso_alpha_2') }}</label>
                <input class="form-control {{ $errors->has('iso_alpha_2') ? 'is-invalid' : '' }}" type="text" name="iso_alpha_2" id="iso_alpha_2" value="{{ old('iso_alpha_2', $isotoCountry->iso_alpha_2) }}" required>
                @if($errors->has('iso_alpha_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('iso_alpha_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.isotoCountry.fields.iso_alpha_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="iso_alpha_3">{{ trans('cruds.isotoCountry.fields.iso_alpha_3') }}</label>
                <input class="form-control {{ $errors->has('iso_alpha_3') ? 'is-invalid' : '' }}" type="text" name="iso_alpha_3" id="iso_alpha_3" value="{{ old('iso_alpha_3', $isotoCountry->iso_alpha_3) }}">
                @if($errors->has('iso_alpha_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('iso_alpha_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.isotoCountry.fields.iso_alpha_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="iso_un_m_49">{{ trans('cruds.isotoCountry.fields.iso_un_m_49') }}</label>
                <input class="form-control {{ $errors->has('iso_un_m_49') ? 'is-invalid' : '' }}" type="number" name="iso_un_m_49" id="iso_un_m_49" value="{{ old('iso_un_m_49', $isotoCountry->iso_un_m_49) }}" step="1">
                @if($errors->has('iso_un_m_49'))
                    <div class="invalid-feedback">
                        {{ $errors->first('iso_un_m_49') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.isotoCountry.fields.iso_un_m_49_helper') }}</span>
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