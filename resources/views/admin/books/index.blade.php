@extends('layouts.admin')
@section('content')
@can('book_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('books.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.book.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.book.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Book">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.book.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.series_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.call_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.publisher') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.collation') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.language') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.isbn_issn') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.classification') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.content_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.media_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.carrier_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.edition') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.subject') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.specific_detail_info') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.statement_responsibility') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.cover_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.book.fields.category') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
@foreach($books as $key => $book)
<tr data-entry-id="{{ $book->id }}">
    <td>

    </td>
    <td>
        {{ $book->id ?? '' }}
    </td>
    <td>
        {{ $book->title ?? '' }}
    </td>
    <td>
        {{ $book->series_title ?? '' }}
    </td>
    <td>
        {{ $book->call_number ?? '' }}
    </td>
    <td>
        {{ $book->publisher ?? '' }}
    </td>
    <td>
        {{ $book->collation ?? '' }}
    </td>
    <td>
        {{ $book->language ?? '' }}
    </td>
    <td>
        {{ $book->isbn_issn ?? '' }}
    </td>
    <td>
        {{ $book->classification ?? '' }}
    </td>
    <td>
        {{ $book->content_type ?? '' }}
    </td>
    <td>
        {{ $book->media_type ?? '' }}
    </td>
    <td>
        {{ $book->carrier_type ?? '' }}
    </td>
    <td>
        {{ $book->edition ?? '' }}
    </td>
    <td>
        {{ $book->subject ?? '' }}
    </td>
    <td>
        {{ $book->specific_detail_info ?? '' }}
    </td>
    <td>
        {{ $book->statement_responsibility ?? '' }}
    </td>
    <td>
        @foreach($book->cover_image as $key => $media)
            <a href="{{ $media->getUrl() }}" target="_blank">
                <img src="{{ $media->getUrl('thumb') }}" width="50px" height="50px">
            </a>
        @endforeach
    </td>
    <td>
        {{ $book->category->name ?? '' }}
    </td>
    <td>
        @can('book_show')
            <a class="btn btn-xs btn-primary" href="{{ route('books.show', $book->id) }}">
                {{ trans('global.view') }}
            </a>
        @endcan

        @can('book_edit')
            <a class="btn btn-xs btn-info" href="{{ route('books.edit', $book->id) }}">
                {{ trans('global.edit') }}
            </a>
        @endcan

        @can('book_delete')
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('book_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('books.massDestroy') }}",
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
  let table = $('.datatable-Book:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
