@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.machineryCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.machinery-categories.update", [$machineryCategory->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.machineryCategory.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $machineryCategory->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="category_id">{{ trans('cruds.machineryCategory.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id" required>
                    @foreach($categories as $id => $entry)
                        <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $machineryCategory->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="main_photo">{{ trans('cruds.machineryCategory.fields.main_photo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('main_photo') ? 'is-invalid' : '' }}" id="main_photo-dropzone">
                </div>
                @if($errors->has('main_photo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('main_photo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.main_photo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other_photos">{{ trans('cruds.machineryCategory.fields.other_photos') }}</label>
                <div class="needsclick dropzone {{ $errors->has('other_photos') ? 'is-invalid' : '' }}" id="other_photos-dropzone">
                </div>
                @if($errors->has('other_photos'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other_photos') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.other_photos_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.machineryCategory.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $machineryCategory->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cost_per_hour">{{ trans('cruds.machineryCategory.fields.cost_per_hour') }}</label>
                <input class="form-control {{ $errors->has('cost_per_hour') ? 'is-invalid' : '' }}" type="number" name="cost_per_hour" id="cost_per_hour" value="{{ old('cost_per_hour', $machineryCategory->cost_per_hour) }}" step="0.01" required>
                @if($errors->has('cost_per_hour'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_per_hour') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.cost_per_hour_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cost_per_day">{{ trans('cruds.machineryCategory.fields.cost_per_day') }}</label>
                <input class="form-control {{ $errors->has('cost_per_day') ? 'is-invalid' : '' }}" type="number" name="cost_per_day" id="cost_per_day" value="{{ old('cost_per_day', $machineryCategory->cost_per_day) }}" step="0.01" required>
                @if($errors->has('cost_per_day'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_per_day') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.cost_per_day_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cost_per_week">{{ trans('cruds.machineryCategory.fields.cost_per_week') }}</label>
                <input class="form-control {{ $errors->has('cost_per_week') ? 'is-invalid' : '' }}" type="number" name="cost_per_week" id="cost_per_week" value="{{ old('cost_per_week', $machineryCategory->cost_per_week) }}" step="0.01" required>
                @if($errors->has('cost_per_week'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_per_week') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.cost_per_week_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="cost_per_month">{{ trans('cruds.machineryCategory.fields.cost_per_month') }}</label>
                <input class="form-control {{ $errors->has('cost_per_month') ? 'is-invalid' : '' }}" type="number" name="cost_per_month" id="cost_per_month" value="{{ old('cost_per_month', $machineryCategory->cost_per_month) }}" step="0.01" required>
                @if($errors->has('cost_per_month'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cost_per_month') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.cost_per_month_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="two_way_delivery">{{ trans('cruds.machineryCategory.fields.two_way_delivery') }}</label>
                <input class="form-control {{ $errors->has('two_way_delivery') ? 'is-invalid' : '' }}" type="number" name="two_way_delivery" id="two_way_delivery" value="{{ old('two_way_delivery', $machineryCategory->two_way_delivery) }}" step="0.01" required>
                @if($errors->has('two_way_delivery'))
                    <div class="invalid-feedback">
                        {{ $errors->first('two_way_delivery') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.two_way_delivery_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_rental_price_incl_taxes_before">{{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_before') }}</label>
                <input class="form-control {{ $errors->has('total_rental_price_incl_taxes_before') ? 'is-invalid' : '' }}" type="number" name="total_rental_price_incl_taxes_before" id="total_rental_price_incl_taxes_before" value="{{ old('total_rental_price_incl_taxes_before', $machineryCategory->total_rental_price_incl_taxes_before) }}" step="0.01" required>
                @if($errors->has('total_rental_price_incl_taxes_before'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_rental_price_incl_taxes_before') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_before_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_rental_price_incl_taxes_after">{{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_after') }}</label>
                <input class="form-control {{ $errors->has('total_rental_price_incl_taxes_after') ? 'is-invalid' : '' }}" type="number" name="total_rental_price_incl_taxes_after" id="total_rental_price_incl_taxes_after" value="{{ old('total_rental_price_incl_taxes_after', $machineryCategory->total_rental_price_incl_taxes_after) }}" step="0.01" required>
                @if($errors->has('total_rental_price_incl_taxes_after'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_rental_price_incl_taxes_after') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_after_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="brand">{{ trans('cruds.machineryCategory.fields.brand') }}</label>
                <input class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" type="text" name="brand" id="brand" value="{{ old('brand', $machineryCategory->brand) }}" required>
                @if($errors->has('brand'))
                    <div class="invalid-feedback">
                        {{ $errors->first('brand') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.brand_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="manufacturer">{{ trans('cruds.machineryCategory.fields.manufacturer') }}</label>
                <input class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}" type="text" name="manufacturer" id="manufacturer" value="{{ old('manufacturer', $machineryCategory->manufacturer) }}">
                @if($errors->has('manufacturer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('manufacturer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.manufacturer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="model">{{ trans('cruds.machineryCategory.fields.model') }}</label>
                <input class="form-control {{ $errors->has('model') ? 'is-invalid' : '' }}" type="text" name="model" id="model" value="{{ old('model', $machineryCategory->model) }}">
                @if($errors->has('model'))
                    <div class="invalid-feedback">
                        {{ $errors->first('model') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.model_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="manufacture_year">{{ trans('cruds.machineryCategory.fields.manufacture_year') }}</label>
                <input class="form-control {{ $errors->has('manufacture_year') ? 'is-invalid' : '' }}" type="text" name="manufacture_year" id="manufacture_year" value="{{ old('manufacture_year', $machineryCategory->manufacture_year) }}">
                @if($errors->has('manufacture_year'))
                    <div class="invalid-feedback">
                        {{ $errors->first('manufacture_year') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.manufacture_year_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="digging_depth">{{ trans('cruds.machineryCategory.fields.digging_depth') }}</label>
                <input class="form-control {{ $errors->has('digging_depth') ? 'is-invalid' : '' }}" type="text" name="digging_depth" id="digging_depth" value="{{ old('digging_depth', $machineryCategory->digging_depth) }}">
                @if($errors->has('digging_depth'))
                    <div class="invalid-feedback">
                        {{ $errors->first('digging_depth') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.digging_depth_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="maximum_digging_force">{{ trans('cruds.machineryCategory.fields.maximum_digging_force') }}</label>
                <input class="form-control {{ $errors->has('maximum_digging_force') ? 'is-invalid' : '' }}" type="text" name="maximum_digging_force" id="maximum_digging_force" value="{{ old('maximum_digging_force', $machineryCategory->maximum_digging_force) }}">
                @if($errors->has('maximum_digging_force'))
                    <div class="invalid-feedback">
                        {{ $errors->first('maximum_digging_force') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.maximum_digging_force_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="weight">{{ trans('cruds.machineryCategory.fields.weight') }}</label>
                <input class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}" type="text" name="weight" id="weight" value="{{ old('weight', $machineryCategory->weight) }}">
                @if($errors->has('weight'))
                    <div class="invalid-feedback">
                        {{ $errors->first('weight') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.weight_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="rated_power">{{ trans('cruds.machineryCategory.fields.rated_power') }}</label>
                <input class="form-control {{ $errors->has('rated_power') ? 'is-invalid' : '' }}" type="text" name="rated_power" id="rated_power" value="{{ old('rated_power', $machineryCategory->rated_power) }}">
                @if($errors->has('rated_power'))
                    <div class="invalid-feedback">
                        {{ $errors->first('rated_power') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.rated_power_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="standard_bucket_capacity">{{ trans('cruds.machineryCategory.fields.standard_bucket_capacity') }}</label>
                <input class="form-control {{ $errors->has('standard_bucket_capacity') ? 'is-invalid' : '' }}" type="text" name="standard_bucket_capacity" id="standard_bucket_capacity" value="{{ old('standard_bucket_capacity', $machineryCategory->standard_bucket_capacity) }}">
                @if($errors->has('standard_bucket_capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('standard_bucket_capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.standard_bucket_capacity_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="standard_bucket_width">{{ trans('cruds.machineryCategory.fields.standard_bucket_width') }}</label>
                <input class="form-control {{ $errors->has('standard_bucket_width') ? 'is-invalid' : '' }}" type="text" name="standard_bucket_width" id="standard_bucket_width" value="{{ old('standard_bucket_width', $machineryCategory->standard_bucket_width) }}">
                @if($errors->has('standard_bucket_width'))
                    <div class="invalid-feedback">
                        {{ $errors->first('standard_bucket_width') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.standard_bucket_width_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="operation_hydraulic_pressure">{{ trans('cruds.machineryCategory.fields.operation_hydraulic_pressure') }}</label>
                <input class="form-control {{ $errors->has('operation_hydraulic_pressure') ? 'is-invalid' : '' }}" type="text" name="operation_hydraulic_pressure" id="operation_hydraulic_pressure" value="{{ old('operation_hydraulic_pressure', $machineryCategory->operation_hydraulic_pressure) }}">
                @if($errors->has('operation_hydraulic_pressure'))
                    <div class="invalid-feedback">
                        {{ $errors->first('operation_hydraulic_pressure') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.operation_hydraulic_pressure_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="gradeadility">{{ trans('cruds.machineryCategory.fields.gradeadility') }}</label>
                <input class="form-control {{ $errors->has('gradeadility') ? 'is-invalid' : '' }}" type="text" name="gradeadility" id="gradeadility" value="{{ old('gradeadility', $machineryCategory->gradeadility) }}">
                @if($errors->has('gradeadility'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gradeadility') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.gradeadility_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pressure_to_the_ground">{{ trans('cruds.machineryCategory.fields.pressure_to_the_ground') }}</label>
                <input class="form-control {{ $errors->has('pressure_to_the_ground') ? 'is-invalid' : '' }}" type="text" name="pressure_to_the_ground" id="pressure_to_the_ground" value="{{ old('pressure_to_the_ground', $machineryCategory->pressure_to_the_ground) }}">
                @if($errors->has('pressure_to_the_ground'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pressure_to_the_ground') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.pressure_to_the_ground_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="brochure">{{ trans('cruds.machineryCategory.fields.brochure') }}</label>
                <div class="needsclick dropzone {{ $errors->has('brochure') ? 'is-invalid' : '' }}" id="brochure-dropzone">
                </div>
                @if($errors->has('brochure'))
                    <div class="invalid-feedback">
                        {{ $errors->first('brochure') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.brochure_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.machineryCategory.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', $machineryCategory->status) }}" step="1" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.machineryCategory.fields.status_helper') }}</span>
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
    Dropzone.options.mainPhotoDropzone = {
    url: '{{ route('admin.machinery-categories.storeMedia') }}',
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
      $('form').find('input[name="main_photo"]').remove()
      $('form').append('<input type="hidden" name="main_photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="main_photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($machineryCategory) && $machineryCategory->main_photo)
      var file = {!! json_encode($machineryCategory->main_photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="main_photo" value="' + file.file_name + '">')
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
<script>
    var uploadedOtherPhotosMap = {}
Dropzone.options.otherPhotosDropzone = {
    url: '{{ route('admin.machinery-categories.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
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
      $('form').append('<input type="hidden" name="other_photos[]" value="' + response.name + '">')
      uploadedOtherPhotosMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedOtherPhotosMap[file.name]
      }
      $('form').find('input[name="other_photos[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($machineryCategory) && $machineryCategory->other_photos)
      var files = {!! json_encode($machineryCategory->other_photos) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="other_photos[]" value="' + file.file_name + '">')
        }
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
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.machinery-categories.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $machineryCategory->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    var uploadedBrochureMap = {}
Dropzone.options.brochureDropzone = {
    url: '{{ route('admin.machinery-categories.storeMedia') }}',
    maxFilesize: 20, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 20
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="brochure[]" value="' + response.name + '">')
      uploadedBrochureMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedBrochureMap[file.name]
      }
      $('form').find('input[name="brochure[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($machineryCategory) && $machineryCategory->brochure)
          var files =
            {!! json_encode($machineryCategory->brochure) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="brochure[]" value="' + file.file_name + '">')
            }
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