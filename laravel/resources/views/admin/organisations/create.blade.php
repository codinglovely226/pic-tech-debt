@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.organisation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.organisations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="organisation_name">{{ trans('cruds.organisation.fields.organisation_name') }}</label>
                <input class="form-control {{ $errors->has('organisation_name') ? 'is-invalid' : '' }}" type="text" name="organisation_name" id="organisation_name" value="{{ old('organisation_name', '') }}" required>
                @if($errors->has('organisation_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.organisation_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.organisation.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organisation_street">{{ trans('cruds.organisation.fields.organisation_street') }}</label>
                <input class="form-control {{ $errors->has('organisation_street') ? 'is-invalid' : '' }}" type="text" name="organisation_street" id="organisation_street" value="{{ old('organisation_street', '') }}">
                @if($errors->has('organisation_street'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation_street') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.organisation_street_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organisation_street_2">{{ trans('cruds.organisation.fields.organisation_street_2') }}</label>
                <input class="form-control {{ $errors->has('organisation_street_2') ? 'is-invalid' : '' }}" type="text" name="organisation_street_2" id="organisation_street_2" value="{{ old('organisation_street_2', '') }}">
                @if($errors->has('organisation_street_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation_street_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.organisation_street_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organisation_city">{{ trans('cruds.organisation.fields.organisation_city') }}</label>
                <input class="form-control {{ $errors->has('organisation_city') ? 'is-invalid' : '' }}" type="text" name="organisation_city" id="organisation_city" value="{{ old('organisation_city', '') }}">
                @if($errors->has('organisation_city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation_city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.organisation_city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organisation_postcode">{{ trans('cruds.organisation.fields.organisation_postcode') }}</label>
                <input class="form-control {{ $errors->has('organisation_postcode') ? 'is-invalid' : '' }}" type="text" name="organisation_postcode" id="organisation_postcode" value="{{ old('organisation_postcode', '') }}">
                @if($errors->has('organisation_postcode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation_postcode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.organisation_postcode_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="organisation_state">{{ trans('cruds.organisation.fields.organisation_state') }}</label>
                <input class="form-control {{ $errors->has('organisation_state') ? 'is-invalid' : '' }}" type="text" name="organisation_state" id="organisation_state" value="{{ old('organisation_state', '') }}">
                @if($errors->has('organisation_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('organisation_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.organisation_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="iso_alpha_2_id">{{ trans('cruds.organisation.fields.iso_alpha_2') }}</label>
                <select class="form-control select2 {{ $errors->has('iso_alpha_2') ? 'is-invalid' : '' }}" name="iso_alpha_2_id" id="iso_alpha_2_id">
                    @foreach($iso_alpha_2s as $id => $iso_alpha_2)
                        <option value="{{ $id }}" {{ old('iso_alpha_2_id') == $id ? 'selected' : '' }}>{{ $iso_alpha_2 }}</option>
                    @endforeach
                </select>
                @if($errors->has('iso_alpha_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('iso_alpha_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.organisation.fields.iso_alpha_2_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.organisations.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 512,
      height: 512
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($organisation) && $organisation->logo)
      var file = {!! json_encode($organisation->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection