@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.machineryCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.machinery-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $machineryCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.name') }}
                        </th>
                        <td>
                            {{ $machineryCategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.category') }}
                        </th>
                        <td>
                            {{ $machineryCategory->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.main_photo') }}
                        </th>
                        <td>
                            @if($machineryCategory->main_photo)
                                <a href="{{ $machineryCategory->main_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $machineryCategory->main_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.other_photos') }}
                        </th>
                        <td>
                            @foreach($machineryCategory->other_photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.description') }}
                        </th>
                        <td>
                            {!! $machineryCategory->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_hour') }}
                        </th>
                        <td>
                            {{ $machineryCategory->cost_per_hour }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_day') }}
                        </th>
                        <td>
                            {{ $machineryCategory->cost_per_day }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_week') }}
                        </th>
                        <td>
                            {{ $machineryCategory->cost_per_week }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_month') }}
                        </th>
                        <td>
                            {{ $machineryCategory->cost_per_month }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.two_way_delivery') }}
                        </th>
                        <td>
                            {{ $machineryCategory->two_way_delivery }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_before') }}
                        </th>
                        <td>
                            {{ $machineryCategory->total_rental_price_incl_taxes_before }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_after') }}
                        </th>
                        <td>
                            {{ $machineryCategory->total_rental_price_incl_taxes_after }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.brand') }}
                        </th>
                        <td>
                            {{ $machineryCategory->brand }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.manufacturer') }}
                        </th>
                        <td>
                            {{ $machineryCategory->manufacturer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.model') }}
                        </th>
                        <td>
                            {{ $machineryCategory->model }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.manufacture_year') }}
                        </th>
                        <td>
                            {{ $machineryCategory->manufacture_year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.digging_depth') }}
                        </th>
                        <td>
                            {{ $machineryCategory->digging_depth }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.maximum_digging_force') }}
                        </th>
                        <td>
                            {{ $machineryCategory->maximum_digging_force }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.weight') }}
                        </th>
                        <td>
                            {{ $machineryCategory->weight }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.rated_power') }}
                        </th>
                        <td>
                            {{ $machineryCategory->rated_power }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.standard_bucket_capacity') }}
                        </th>
                        <td>
                            {{ $machineryCategory->standard_bucket_capacity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.standard_bucket_width') }}
                        </th>
                        <td>
                            {{ $machineryCategory->standard_bucket_width }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.operation_hydraulic_pressure') }}
                        </th>
                        <td>
                            {{ $machineryCategory->operation_hydraulic_pressure }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.gradeadility') }}
                        </th>
                        <td>
                            {{ $machineryCategory->gradeadility }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.pressure_to_the_ground') }}
                        </th>
                        <td>
                            {{ $machineryCategory->pressure_to_the_ground }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.brochure') }}
                        </th>
                        <td>
                            @foreach($machineryCategory->brochure as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.status') }}
                        </th>
                        <td>
                            {{ $machineryCategory->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.machinery-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection