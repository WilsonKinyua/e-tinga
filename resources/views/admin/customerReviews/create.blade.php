@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.customerReview.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customer-reviews.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="customer_name">{{ trans('cruds.customerReview.fields.customer_name') }}</label>
                <input class="form-control {{ $errors->has('customer_name') ? 'is-invalid' : '' }}" type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', '') }}" required>
                @if($errors->has('customer_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerReview.fields.customer_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="professional">{{ trans('cruds.customerReview.fields.professional') }}</label>
                <input class="form-control {{ $errors->has('professional') ? 'is-invalid' : '' }}" type="text" name="professional" id="professional" value="{{ old('professional', '') }}" required>
                @if($errors->has('professional'))
                    <div class="invalid-feedback">
                        {{ $errors->first('professional') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerReview.fields.professional_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.customerReview.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerReview.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.customerReview.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerReview.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="stars">{{ trans('cruds.customerReview.fields.stars') }}</label>
                <input class="form-control {{ $errors->has('stars') ? 'is-invalid' : '' }}" type="number" name="stars" id="stars" value="{{ old('stars', '') }}" step="1" required>
                @if($errors->has('stars'))
                    <div class="invalid-feedback">
                        {{ $errors->first('stars') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerReview.fields.stars_helper') }}</span>
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