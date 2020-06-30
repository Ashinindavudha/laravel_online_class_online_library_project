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
*/

Route::get('/', function () {
	return view('welcome');
});
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
});
 

