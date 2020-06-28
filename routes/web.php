<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
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
 
});
