<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Model\Category;

use Illuminate\Support\Facades\Input;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        $ebook_search = Book::paginate(15);
        return view('search', compact('ebook_search'));
    }

    public function search(Request $request)
    {
        dd($request);
        $q = $request->Input( 'q' );
    if($q != ""){
    $book = Book::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'series_title', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
    $pagination = $book->appends ( array (
                'q' => Input( 'q' ) 
        ) );
    //dd($book);
    if (count ( $book ) > 0)
        return view ( 'search' )->withDetails ( $book )->withQuery ( $q );
    }
        return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
    }
*/

    public function index()
    {
        $books = Book::with('category')->get();
        return view('p_search', compact('books'));
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Book::class, 'title')
            ->registerModel(Category::class, 'name')
            ->perform($request->input('query'));

        return view('user.search.index', compact('searchResults'));
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
