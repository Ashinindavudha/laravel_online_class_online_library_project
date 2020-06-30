<?php

namespace App\Http\Controllers\Admin;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Category;
use App\Model\Author;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\InteractsWithMedia;
use App\Http\Requests\MassDestroyBookRequest;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller
{
    //use MediaUploadingTrait;
    use InteractsWithMedia;
    public function index()
    {
        abort_if(Gate::denies('book_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $books = Book::all();

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        abort_if(Gate::denies('book_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');
        $authors = Author::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.books.create', compact('categories', 'authors'));
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->all());

        foreach ($request->input('cover_image', []) as $file) {
            $book->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('cover_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $book->id]);
        }

        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        abort_if(Gate::denies('book_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $book->load('category');

        return view('admin.books.edit', compact('categories', 'book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->all());

        if (count($book->cover_image) > 0) {
            foreach ($book->cover_image as $media) {
                if (!in_array($media->file_name, $request->input('cover_image', []))) {
                    $media->delete();
                }
            }
        }

        $media = $book->cover_image->pluck('file_name')->toArray();

        foreach ($request->input('cover_image', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $book->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('cover_image');
            }
        }

        return redirect()->route('books.index');
    }

    public function show(Book $book)
    {
        abort_if(Gate::denies('book_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book->load('category');

        return view('admin.books.show', compact('book'));
    }

    public function destroy(Book $book)
    {
        abort_if(Gate::denies('book_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $book->delete();

        return back();
    }

    public function massDestroy(MassDestroyBookRequest $request)
    {
        Book::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('book_create') && Gate::denies('book_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Book();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
