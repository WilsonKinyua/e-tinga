@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.customerReview.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CustomerReview">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.customerReview.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerReview.fields.customer_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerReview.fields.professional') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerReview.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerReview.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerReview.fields.stars') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customerReviews as $key => $customerReview)
                        <tr data-entry-id="{{ $customerReview->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $customerReview->id ?? '' }}
                            </td>
                            <td>
                                {{ $customerReview->customer_name ?? '' }}
                            </td>
                            <td>
                                {{ $customerReview->professional ?? '' }}
                            </td>
                            <td>
                                {{ $customerReview->title ?? '' }}
                            </td>
                            <td>
                                {{ $customerReview->description ?? '' }}
                            </td>
                            <td>
                                {{ $customerReview->stars ?? '' }}
                            </td>
                            <td>
                                @can('customer_review_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.customer-reviews.show', $customerReview->id) }}">
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
  let table = $('.datatable-CustomerReview:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection