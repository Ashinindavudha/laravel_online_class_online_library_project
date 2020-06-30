@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.book.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("books.update", [$book->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.book.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $book->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="series_title">{{ trans('cruds.book.fields.series_title') }}</label>
                <input class="form-control {{ $errors->has('series_title') ? 'is-invalid' : '' }}" type="text" name="series_title" id="series_title" value="{{ old('series_title', $book->series_title) }}">
                @if($errors->has('series_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('series_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.series_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="call_number">{{ trans('cruds.book.fields.call_number') }}</label>
                <input class="form-control {{ $errors->has('call_number') ? 'is-invalid' : '' }}" type="text" name="call_number" id="call_number" value="{{ old('call_number', $book->call_number) }}">
                @if($errors->has('call_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('call_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.call_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="publisher">{{ trans('cruds.book.fields.publisher') }}</label>
                <input class="form-control {{ $errors->has('publisher') ? 'is-invalid' : '' }}" type="text" name="publisher" id="publisher" value="{{ old('publisher', $book->publisher) }}">
                @if($errors->has('publisher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('publisher') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.publisher_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="collation">{{ trans('cruds.book.fields.collation') }}</label>
                <input class="form-control {{ $errors->has('collation') ? 'is-invalid' : '' }}" type="text" name="collation" id="collation" value="{{ old('collation', $book->collation) }}">
                @if($errors->has('collation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('collation') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.collation_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="language">{{ trans('cruds.book.fields.language') }}</label>
                <input class="form-control {{ $errors->has('language') ? 'is-invalid' : '' }}" type="text" name="language" id="language" value="{{ old('language', $book->language) }}">
                @if($errors->has('language'))
                    <div class="invalid-feedback">
                        {{ $errors->first('language') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.language_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="isbn_issn">{{ trans('cruds.book.fields.isbn_issn') }}</label>
                <input class="form-control {{ $errors->has('isbn_issn') ? 'is-invalid' : '' }}" type="text" name="isbn_issn" id="isbn_issn" value="{{ old('isbn_issn', $book->isbn_issn) }}">
                @if($errors->has('isbn_issn'))
                    <div class="invalid-feedback">
                        {{ $errors->first('isbn_issn') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.isbn_issn_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="classification">{{ trans('cruds.book.fields.classification') }}</label>
                <input class="form-control {{ $errors->has('classification') ? 'is-invalid' : '' }}" type="text" name="classification" id="classification" value="{{ old('classification', $book->classification) }}">
                @if($errors->has('classification'))
                    <div class="invalid-feedback">
                        {{ $errors->first('classification') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.classification_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="content_type">{{ trans('cruds.book.fields.content_type') }}</label>
                <input class="form-control {{ $errors->has('content_type') ? 'is-invalid' : '' }}" type="text" name="content_type" id="content_type" value="{{ old('content_type', $book->content_type) }}">
                @if($errors->has('content_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.content_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="media_type">{{ trans('cruds.book.fields.media_type') }}</label>
                <input class="form-control {{ $errors->has('media_type') ? 'is-invalid' : '' }}" type="text" name="media_type" id="media_type" value="{{ old('media_type', $book->media_type) }}">
                @if($errors->has('media_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('media_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.media_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="carrier_type">{{ trans('cruds.book.fields.carrier_type') }}</label>
                <input class="form-control {{ $errors->has('carrier_type') ? 'is-invalid' : '' }}" type="text" name="carrier_type" id="carrier_type" value="{{ old('carrier_type', $book->carrier_type) }}">
                @if($errors->has('carrier_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('carrier_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.carrier_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="edition">{{ trans('cruds.book.fields.edition') }}</label>
                <input class="form-control {{ $errors->has('edition') ? 'is-invalid' : '' }}" type="text" name="edition" id="edition" value="{{ old('edition', $book->edition) }}">
                @if($errors->has('edition'))
                    <div class="invalid-feedback">
                        {{ $errors->first('edition') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.edition_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subject">{{ trans('cruds.book.fields.subject') }}</label>
                <input class="form-control {{ $errors->has('subject') ? 'is-invalid' : '' }}" type="text" name="subject" id="subject" value="{{ old('subject', $book->subject) }}">
                @if($errors->has('subject'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.subject_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="specific_detail_info">{{ trans('cruds.book.fields.specific_detail_info') }}</label>
                <input class="form-control {{ $errors->has('specific_detail_info') ? 'is-invalid' : '' }}" type="text" name="specific_detail_info" id="specific_detail_info" value="{{ old('specific_detail_info', $book->specific_detail_info) }}">
                @if($errors->has('specific_detail_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('specific_detail_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.specific_detail_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="statement_responsibility">{{ trans('cruds.book.fields.statement_responsibility') }}</label>
                <input class="form-control {{ $errors->has('statement_responsibility') ? 'is-invalid' : '' }}" type="text" name="statement_responsibility" id="statement_responsibility" value="{{ old('statement_responsibility', $book->statement_responsibility) }}">
                @if($errors->has('statement_responsibility'))
                    <div class="invalid-feedback">
                        {{ $errors->first('statement_responsibility') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.statement_responsibility_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.book.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $book->description) !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cover_image">{{ trans('cruds.book.fields.cover_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('cover_image') ? 'is-invalid' : '' }}" id="cover_image-dropzone">
                </div>
                @if($errors->has('cover_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cover_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.cover_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="category_id">{{ trans('cruds.book.fields.category') }}</label>
                <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                    @foreach($categories as $id => $category)
                        <option value="{{ $id }}" {{ ($book->category ? $book->category->id : old('category_id')) == $id ? 'selected' : '' }}>{{ $category }}</option>
                    @endforeach
                </select>
                @if($errors->has('category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.book.fields.category_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/books/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', {{ $book->id ?? 0 }});
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    var uploadedCoverImageMap = {}
Dropzone.options.coverImageDropzone = {
    url: '{{ route('books.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="cover_image[]" value="' + response.name + '">')
      uploadedCoverImageMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedCoverImageMap[file.name]
      }
      $('form').find('input[name="cover_image[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($book) && $book->cover_image)
      var files =
        {!! json_encode($book->cover_image) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="cover_image[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
