@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.site.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sites.update", [$site->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.site.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $site->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="caption">{{ trans('cruds.site.fields.caption') }}</label>
                <textarea class="form-control {{ $errors->has('caption') ? 'is-invalid' : '' }}" name="caption" id="caption" required>{{ old('caption', $site->caption) }}</textarea>
                @if($errors->has('caption'))
                    <div class="invalid-feedback">
                        {{ $errors->first('caption') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.caption_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="logo">{{ trans('cruds.site.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="open_hours">{{ trans('cruds.site.fields.open_hours') }}</label>
                <input class="form-control {{ $errors->has('open_hours') ? 'is-invalid' : '' }}" type="text" name="open_hours" id="open_hours" value="{{ old('open_hours', $site->open_hours) }}" required>
                @if($errors->has('open_hours'))
                    <div class="invalid-feedback">
                        {{ $errors->first('open_hours') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.open_hours_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="support_phone_1">{{ trans('cruds.site.fields.support_phone_1') }}</label>
                <input class="form-control {{ $errors->has('support_phone_1') ? 'is-invalid' : '' }}" type="number" name="support_phone_1" id="support_phone_1" value="{{ old('support_phone_1', $site->support_phone_1) }}" step="1" required>
                @if($errors->has('support_phone_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_phone_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.support_phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="support_phone_2">{{ trans('cruds.site.fields.support_phone_2') }}</label>
                <input class="form-control {{ $errors->has('support_phone_2') ? 'is-invalid' : '' }}" type="number" name="support_phone_2" id="support_phone_2" value="{{ old('support_phone_2', $site->support_phone_2) }}" step="1">
                @if($errors->has('support_phone_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_phone_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.support_phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location">{{ trans('cruds.site.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', $site->location) }}" required>
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook">{{ trans('cruds.site.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $site->facebook) }}">
                @if($errors->has('facebook'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter">{{ trans('cruds.site.fields.twitter') }}</label>
                <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $site->twitter) }}">
                @if($errors->has('twitter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.twitter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="google_plus">{{ trans('cruds.site.fields.google_plus') }}</label>
                <input class="form-control {{ $errors->has('google_plus') ? 'is-invalid' : '' }}" type="text" name="google_plus" id="google_plus" value="{{ old('google_plus', $site->google_plus) }}">
                @if($errors->has('google_plus'))
                    <div class="invalid-feedback">
                        {{ $errors->first('google_plus') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.google_plus_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin">{{ trans('cruds.site.fields.linkedin') }}</label>
                <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $site->linkedin) }}">
                @if($errors->has('linkedin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.linkedin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="youtube">{{ trans('cruds.site.fields.youtube') }}</label>
                <input class="form-control {{ $errors->has('youtube') ? 'is-invalid' : '' }}" type="text" name="youtube" id="youtube" value="{{ old('youtube', $site->youtube) }}">
                @if($errors->has('youtube'))
                    <div class="invalid-feedback">
                        {{ $errors->first('youtube') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.youtube_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.site.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $site->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.site.fields.email_helper') }}</span>
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
    url: '{{ route('admin.sites.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
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
@if(isset($site) && $site->logo)
      var file = {!! json_encode($site->logo) !!}
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