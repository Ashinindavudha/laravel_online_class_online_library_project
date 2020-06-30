<?php

namespace App\Http\Controllers\Admin;

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

class AuthorController extends Controller
{
    use InteractsWithMedia;
    
    public function index()
    {
        abort_if(Gate::denies('author_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $authors = Author::all();

        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        abort_if(Gate::denies('author_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.authors.create');
    }

    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $author->id]);
        }

        return redirect()->route('admin.authors.index');
    }

    public function edit(Author $author)
    {
        abort_if(Gate::denies('author_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.authors.edit', compact('author'));
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->all());

        return redirect()->route('admin.authors.index');
    }

    public function show(Author $author)
    {
        abort_if(Gate::denies('author_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.authors.show', compact('author'));
    }

    public function destroy(Author $author)
    {
        abort_if(Gate::denies('author_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $author->delete();

        return back();
    }

    public function massDestroy(MassDestroyAuthorRequest $request)
    {
        Author::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('author_create') && Gate::denies('author_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Author();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
