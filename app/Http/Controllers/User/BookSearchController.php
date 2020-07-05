<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Book;

class BookSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   //  public function index()
   //  {
   //      return view('search_test');
   //  }

   //  public function bookSearch(Request $request) 
   //  {
   //      $search = $request->get('term');
   //      $request = Book::where('title', 'LIKE', '%'. $search. '%')->get();
   //      return response()->json($request);
   //  }

   //  public function getBook(Request $request){

   //    $getsearch = $request->getsearch;

   //    if($getsearch == ''){
   //       $booksearches = Book::orderby('title','asc')->select('id','title')->limit(5)->get();
   //    }else{
   //       $booksearches = Book::orderby('title','asc')->select('id','title')->where('title', 'like', '%' .$getsearch . '%')->limit(5)->get();
   //    }

   //    $response = array();
   //    foreach($booksearches as $booksearch){
   //       $response[] = array("value"=>$booksearch->id,"label"=>$booksearch->title);
   //    }

   //    return response()->json($response);
   // }
     
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
   public function show(Book $book)
    {
        return view('user.search.show', compact('book'));
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
