@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.contactMessage.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ContactMessage">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.contactMessage.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactMessage.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactMessage.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactMessage.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.contactMessage.fields.message') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contactMessages as $key => $contactMessage)
                        <tr data-entry-id="{{ $contactMessage->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $contactMessage->id ?? '' }}
                            </td>
                            <td>
                                {{ $contactMessage->name ?? '' }}
                            </td>
                            <td>
                                {{ $contactMessage->email ?? '' }}
                            </td>
                            <td>
                                {{ $contactMessage->subject ?? '' }}
                            </td>
                            <td>
                                {{ $contactMessage->message ?? '' }}
                            </td>
                            <td>
                                @can('contact_message_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.contact-messages.show', $contactMessage->id) }}">
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
  let table = $('.datatable-ContactMessage:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection