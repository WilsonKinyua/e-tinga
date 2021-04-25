@extends('layouts.admin')
@section('content')
@can('machinery_category_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.machinery-categories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.machineryCategory.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.machineryCategory.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-MachineryCategory">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.category') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.main_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.other_photos') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_hour') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_day') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_week') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.cost_per_month') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.two_way_delivery') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_before') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.total_rental_price_incl_taxes_after') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.brand') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.manufacturer') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.model') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.manufacture_year') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.digging_depth') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.maximum_digging_force') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.weight') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.rated_power') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.standard_bucket_capacity') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.standard_bucket_width') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.operation_hydraulic_pressure') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.gradeadility') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.pressure_to_the_ground') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.brochure') }}
                        </th>
                        <th>
                            {{ trans('cruds.machineryCategory.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($machineryCategories as $key => $machineryCategory)
                        <tr data-entry-id="{{ $machineryCategory->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $machineryCategory->id ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->name ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->category->name ?? '' }}
                            </td>
                            <td>
                                @if($machineryCategory->main_photo)
                                    <a href="{{ $machineryCategory->main_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $machineryCategory->main_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @foreach($machineryCategory->other_photos as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $machineryCategory->cost_per_hour ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->cost_per_day ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->cost_per_week ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->cost_per_month ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->two_way_delivery ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->total_rental_price_incl_taxes_before ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->total_rental_price_incl_taxes_after ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->brand ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->manufacturer ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->model ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->manufacture_year ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->digging_depth ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->maximum_digging_force ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->weight ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->rated_power ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->standard_bucket_capacity ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->standard_bucket_width ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->operation_hydraulic_pressure ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->gradeadility ?? '' }}
                            </td>
                            <td>
                                {{ $machineryCategory->pressure_to_the_ground ?? '' }}
                            </td>
                            <td>
                                @foreach($machineryCategory->brochure as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $machineryCategory->status ?? '' }}
                            </td>
                            <td>
                                @can('machinery_category_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.machinery-categories.show', $machineryCategory->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('machinery_category_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.machinery-categories.edit', $machineryCategory->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('machinery_category_delete')
                                    <form action="{{ route('admin.machinery-categories.destroy', $machineryCategory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('machinery_category_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.machinery-categories.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-MachineryCategory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection