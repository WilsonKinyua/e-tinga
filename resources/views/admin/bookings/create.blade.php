@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bookings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="customer">{{ trans('cruds.booking.fields.customer') }}</label>
                <input class="form-control {{ $errors->has('customer') ? 'is-invalid' : '' }}" type="text" name="customer" id="customer" value="{{ old('customer', '') }}" required>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address">{{ trans('cruds.booking.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}" required>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.booking.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="number" name="phone" id="phone" value="{{ old('phone', '') }}" step="1">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="equipment">{{ trans('cruds.booking.fields.equipment') }}</label>
                <input class="form-control {{ $errors->has('equipment') ? 'is-invalid' : '' }}" type="text" name="equipment" id="equipment" value="{{ old('equipment', '') }}" required>
                @if($errors->has('equipment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('equipment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.equipment_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="order_start_date">{{ trans('cruds.booking.fields.order_start_date') }}</label>
                <input class="form-control datetime {{ $errors->has('order_start_date') ? 'is-invalid' : '' }}" type="text" name="order_start_date" id="order_start_date" value="{{ old('order_start_date') }}" required>
                @if($errors->has('order_start_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_start_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.order_start_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="order_end_date">{{ trans('cruds.booking.fields.order_end_date') }}</label>
                <input class="form-control datetime {{ $errors->has('order_end_date') ? 'is-invalid' : '' }}" type="text" name="order_end_date" id="order_end_date" value="{{ old('order_end_date') }}" required>
                @if($errors->has('order_end_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_end_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.order_end_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_cost">{{ trans('cruds.booking.fields.total_cost') }}</label>
                <input class="form-control {{ $errors->has('total_cost') ? 'is-invalid' : '' }}" type="number" name="total_cost" id="total_cost" value="{{ old('total_cost', '') }}" step="0.01" required>
                @if($errors->has('total_cost'))
                    <div class="invalid-feedback">
                        {{ $errors->first('total_cost') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.total_cost_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.booking.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', '0') }}" step="1" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.status_helper') }}</span>
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