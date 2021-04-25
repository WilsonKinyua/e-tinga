@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.farmer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.farmers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.farmer.fields.id') }}
                        </th>
                        <td>
                            {{ $farmer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.farmer.fields.name') }}
                        </th>
                        <td>
                            {{ $farmer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.farmer.fields.phone') }}
                        </th>
                        <td>
                            {{ $farmer->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.farmer.fields.email') }}
                        </th>
                        <td>
                            {{ $farmer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.farmer.fields.address') }}
                        </th>
                        <td>
                            {{ $farmer->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.farmer.fields.id_number') }}
                        </th>
                        <td>
                            {{ $farmer->id_number }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.farmers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection