@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.siteDataSet.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.site-data-sets.update", [$siteDataSet->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="datasets">{{ trans('cruds.siteDataSet.fields.dataset') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('datasets') ? 'is-invalid' : '' }}" name="datasets[]" id="datasets" multiple required>
                    @foreach($datasets as $id => $dataset)
                        <option value="{{ $id }}" {{ (in_array($id, old('datasets', [])) || $siteDataSet->datasets->contains($id)) ? 'selected' : '' }}>{{ $dataset }}</option>
                    @endforeach
                </select>
                @if($errors->has('datasets'))
                    <div class="invalid-feedback">
                        {{ $errors->first('datasets') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteDataSet.fields.dataset_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="team_id">{{ trans('cruds.siteDataSet.fields.team') }}</label>
                <select class="form-control select2 {{ $errors->has('team') ? 'is-invalid' : '' }}" name="team_id" id="team_id" required>
                    @foreach($teams as $id => $team)
                        <option value="{{ $id }}" {{ ($siteDataSet->team ? $siteDataSet->team->id : old('team_id')) == $id ? 'selected' : '' }}>{{ $team }}</option>
                    @endforeach
                </select>
                @if($errors->has('team'))
                    <div class="invalid-feedback">
                        {{ $errors->first('team') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.siteDataSet.fields.team_helper') }}</span>
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