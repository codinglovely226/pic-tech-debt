@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.agent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.agents.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="agent_reference_name">{{ trans('cruds.agent.fields.agent_reference_name') }}</label>
                <input class="form-control {{ $errors->has('agent_reference_name') ? 'is-invalid' : '' }}" type="text" name="agent_reference_name" id="agent_reference_name" value="{{ old('agent_reference_name', '') }}" required>
                @if($errors->has('agent_reference_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agent_reference_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.agent_reference_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="agent_reference_url">{{ trans('cruds.agent.fields.agent_reference_url') }}</label>
                <input class="form-control {{ $errors->has('agent_reference_url') ? 'is-invalid' : '' }}" type="text" name="agent_reference_url" id="agent_reference_url" value="{{ old('agent_reference_url', '') }}">
                @if($errors->has('agent_reference_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agent_reference_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.agent_reference_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="agent_reference_source">{{ trans('cruds.agent.fields.agent_reference_source') }}</label>
                <input class="form-control {{ $errors->has('agent_reference_source') ? 'is-invalid' : '' }}" type="text" name="agent_reference_source" id="agent_reference_source" value="{{ old('agent_reference_source', '') }}">
                @if($errors->has('agent_reference_source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('agent_reference_source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.agent_reference_source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="dataset_id">{{ trans('cruds.agent.fields.dataset') }}</label>
                <select class="form-control select2 {{ $errors->has('dataset') ? 'is-invalid' : '' }}" name="dataset_id" id="dataset_id">
                    @foreach($datasets as $id => $dataset)
                        <option value="{{ $id }}" {{ old('dataset_id') == $id ? 'selected' : '' }}>{{ $dataset }}</option>
                    @endforeach
                </select>
                @if($errors->has('dataset'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dataset') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.agent.fields.dataset_helper') }}</span>
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