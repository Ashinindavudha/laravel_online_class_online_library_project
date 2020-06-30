<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Model\Author;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\InteractsWithMedia;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\Admin\AuthorResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends Controller
{
    use InteractsWithMedia;
    
    public function index()
    {
        abort_if(Gate::denies('author_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AuthorResource(Author::all());
    }

    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->all());

        return (new AuthorResource($author))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Author $author)
    {
        abort_if(Gate::denies('author_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AuthorResource($author);
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->all());

        return (new AuthorResource($author))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Author $author)
    {
        abort_if(Gate::denies('author_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $author->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
