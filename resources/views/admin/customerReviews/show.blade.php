@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customerReview.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customer-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customerReview.fields.id') }}
                        </th>
                        <td>
                            {{ $customerReview->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerReview.fields.customer_name') }}
                        </th>
                        <td>
                            {{ $customerReview->customer_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerReview.fields.professional') }}
                        </th>
                        <td>
                            {{ $customerReview->professional }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerReview.fields.title') }}
                        </th>
                        <td>
                            {{ $customerReview->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerReview.fields.description') }}
                        </th>
                        <td>
                            {{ $customerReview->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerReview.fields.stars') }}
                        </th>
                        <td>
                            {{ $customerReview->stars }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customer-reviews.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection