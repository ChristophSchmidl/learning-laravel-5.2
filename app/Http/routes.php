<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    /*Route::get('articles', 'ArticlesController@index');
    Route::get('articles/create', 'ArticlesController@create');
    Route::get('articles/{id}', 'ArticlesController@show');
    Route::post('articles', 'ArticlesController@store');*/

    Route::resource('articles', 'ArticlesController');

    Route::auth();
    Route::get('/home', 'HomeController@index');

    Route::get('foo', ['middleware' => 'manager', function()
    {
        return 'this page may only be viewed by managers';
    }]);

    Route::get('tags/{tags}', 'TagsController@show');
});
