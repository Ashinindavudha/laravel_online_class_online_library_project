<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Categories
    Route::apiResource('categories', 'CategoryApiController');

    // Books
    Route::post('books/media', 'BookApiController@storeMedia')->name('books.storeMedia');
    Route::apiResource('books', 'BookApiController');

    // Authors
    Route::post('authors/media', 'AuthorApiController@storeMedia')->name('authors.storeMedia');
    Route::apiResource('authors', 'AuthorApiController');
});


Route::resource('apicategories', 'Api\CategoryApiController@index');
