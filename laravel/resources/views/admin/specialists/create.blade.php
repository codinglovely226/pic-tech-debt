@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.specialist.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.specialists.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="specialist_name">{{ trans('cruds.specialist.fields.specialist_name') }}</label>
                <input class="form-control {{ $errors->has('specialist_name') ? 'is-invalid' : '' }}" type="text" name="specialist_name" id="specialist_name" value="{{ old('specialist_name', '') }}">
                @if($errors->has('specialist_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('specialist_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.specialist.fields.specialist_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specialty">{{ trans('cruds.specialist.fields.specialty') }}</label>
                <input class="form-control {{ $errors->has('specialty') ? 'is-invalid' : '' }}" type="text" name="specialty" id="specialty" value="{{ old('specialty', 'Toxicologist') }}">
                @if($errors->has('specialty'))
                    <div class="invalid-feedback">
                        {{ $errors->first('specialty') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.specialist.fields.specialty_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('user_in_system') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="user_in_system" value="0">
                    <input class="form-check-input" type="checkbox" name="user_in_system" id="user_in_system" value="1" {{ old('user_in_system', 0) == 1 || old('user_in_system') === null ? 'checked' : '' }}>
                    <label class="form-check-label" for="user_in_system">{{ trans('cruds.specialist.fields.user_in_system') }}</label>
                </div>
                @if($errors->has('user_in_system'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_in_system') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.specialist.fields.user_in_system_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.specialist.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.specialist.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sites">{{ trans('cruds.specialist.fields.site') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('sites') ? 'is-invalid' : '' }}" name="sites[]" id="sites" multiple>
                    @foreach($sites as $id => $site)
                        <option value="{{ $id }}" {{ in_array($id, old('sites', [])) ? 'selected' : '' }}>{{ $site }}</option>
                    @endforeach
                </select>
                @if($errors->has('sites'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sites') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.specialist.fields.site_helper') }}</span>
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