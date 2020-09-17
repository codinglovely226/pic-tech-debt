@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.subscription.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.subscriptions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="organisation_id">{{ trans('cruds.subscription.fields.organisation') }}</label>
                <select class="form-control select2 {{ $errors->has('organisation') ? 'is-invalid' : '' }}" name="organisation_id" id="organisation_id" required>
                    @foreach($organisations as $id => $organisation)
                        <option value="{{ $id }}" {{ old('organisation_id') == $id ? 'selected' : '' }}>{{ $organisation }}</option>
                    @endforeach
                </select>
                @if($errors->has('organisation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subscription.fields.organisation_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.subscription.fields.subscription_type') }}</label>
                <select class="form-control {{ $errors->has('subscription_type') ? 'is-invalid' : '' }}" name="subscription_type" id="subscription_type" required>
                    <option value disabled {{ old('subscription_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Subscription::SUBSCRIPTION_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('subscription_type', 'normal') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('subscription_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subscription_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subscription.fields.subscription_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="subscription_start">{{ trans('cruds.subscription.fields.subscription_start') }}</label>
                <input class="form-control date {{ $errors->has('subscription_start') ? 'is-invalid' : '' }}" type="text" name="subscription_start" id="subscription_start" value="{{ old('subscription_start') }}" required>
                @if($errors->has('subscription_start'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subscription_start') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subscription.fields.subscription_start_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="duration">{{ trans('cruds.subscription.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="number" name="duration" id="duration" value="{{ old('duration', '1') }}" step="1" required>
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subscription.fields.duration_helper') }}</span>
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