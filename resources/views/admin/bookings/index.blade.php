@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Booking">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.customer') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.equipment') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.order_start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.order_end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.total_cost') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $key => $booking)
                        <tr data-entry-id="{{ $booking->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $booking->id ?? '' }}
                            </td>
                            <td>
                                {{ $booking->customer ?? '' }}
                            </td>
                            <td>
                                {{ $booking->address ?? '' }}
                            </td>
                            <td>
                                {{ $booking->phone ?? '' }}
                            </td>
                            <td>
                                {{ $booking->equipment ?? '' }}
                            </td>
                            <td>
                                {{ $booking->order_start_date ?? '' }}
                            </td>
                            <td>
                                {{ $booking->order_end_date ?? '' }}
                            </td>
                            <td>
                                {{ $booking->total_cost ?? '' }}
                            </td>
                            <td>
                                @if ($booking->status == 0)
                                   <a href="{{ route('admin.approve.approve', $booking->id )}}" class="btn btn-danger btn-xs"> Approve</a>
                                @else
                                    <a href="{{ route('admin.approve.disapprove', $booking->id )}}" class="btn btn-danger btn-xs"> Unapprove</a>
                                @endif
                            </td>
                            <td>
                                @can('booking_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
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
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Booking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection