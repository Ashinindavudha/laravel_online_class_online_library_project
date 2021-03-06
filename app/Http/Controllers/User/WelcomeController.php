<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Book;

//use App\Model\Book;
use Spatie\Searchable\Search;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::orderBy('id', 'desc')->paginate(5);

        return view('welcome', [
            "books" => $data
        ]);
       // return view('welcome', compact('$data'));
    }

    // public function search(Request $request)
    // {
    //     $searchResults = (new Search())
    //         ->registerModel(Book::class, 'title')
    //         ->registerModel(Category::class, 'name')
    //         ->perform($request->input('query'));

    //     return view('user.search.index', compact('searchResults'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    //  public function search(Request $request)
    // {
    //     //dd($request);
    //     $q = $request->Input( 'q' );
    // if($q != ""){
    // $book = Book::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'series_title', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
    // $pagination = $book->appends ( array (
    //             'q' => Input( 'q' ) 
    //     ) );
    // //dd($book);
    // if (count ( $book ) > 0)
    //     return view ( 'welcome' )->withDetails ( $book )->withQuery ( $q );
    // }
    //     return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
    // }
}
