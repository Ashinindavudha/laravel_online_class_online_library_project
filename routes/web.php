<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
|


Route::get('/', function () {
	return view('welcome');
});
*/

Route::resource('/', 'User\WelcomeController');
Route::post('/search', 'User\SearchController@search')->name('search');
Route::get('/ebooks/{book}', 'User\BookSearchController@show')->name('ebooks.show');
Route::get('/ecategory/{category}', 'User\CategorySearchController@show')->name('ecategory.show');


//Route::post('search', 'User\WelcomeController@search');
 /*Route::get('autosearch', 'User\BookSearchController@bookSearch');
 Route::get('booksearch', 'User\BookSearchController@index');

 Route::get('searchbook','User\BookSearchController@index');
Route::post('/searches/ebook/searchesebook/','User\BookSearchController@getBook')->name('searches.ebook');

Route::resource('ebooks', 'User\SearchController');
Route::get('searches', 'User\SearchController@search');
*/
Route::view('api/test', 'api_test');

Route::redirect('admin-login', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => true]);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function(){
	Route::get('/home', 'HomeController@index')->name('home');
    // Permissions
	Route::delete('permissions/destroy', 'PermisstionsController@massDestroy')->name('permissions.massDestroy');
	Route::resource('permissions', 'PermisstionsController');

    // Roles
	Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
	Route::resource('roles', 'RolesController');

    // Users
	Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
	Route::resource('users', 'UsersController');

    //Category Route
	Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
	Route::resource('categories', 'CategoryController');

	// Books
    Route::delete('books/destroy', 'BookController@massDestroy')->name('books.massDestroy');
    Route::post('books/media', 'BookController@storeMedia')->name('books.storeMedia');
    Route::post('books/ckmedia', 'BookController@storeCKEditorImages')->name('books.storeCKEditorImages');
    Route::resource('books', 'BookController');

    // Authors
    Route::delete('authors/destroy', 'AuthorController@massDestroy')->name('authors.massDestroy');
    Route::post('authors/media', 'AuthorController@storeMedia')->name('authors.storeMedia');
    Route::post('authors/ckmedia', 'AuthorController@storeCKEditorImages')->name('authors.storeCKEditorImages');
    Route::resource('authors', 'AuthorController');
});
 
// Route::get('/esearch', 'User\SearchController@index')->name('esearch');
// Route::post('/search', 'User\SearchController@search')->name('search');
// Route::get('/ebooks/{book}', 'User\EbookSearchController@show')->name('ebooks.show');
// Route::get('/ecategory/{category}', 'User\CategorySearchController@show')->name('ecategory.show');




