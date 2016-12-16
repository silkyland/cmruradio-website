<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'BackendController@index');

    /*-- Article --*/
    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'ArticleController@articles');
        Route::get('create', 'ArticleController@create');
        Route::post('store', 'ArticleController@store');
        Route::get('edit-{id}', 'ArticleController@edit');
        Route::put('update-{id}', 'ArticleController@update');
        Route::delete('destroy', 'ArticleController@destroy');
    });

    /* -- Categories -- */
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@index');
        Route::get('create', 'CategoryController@create');
    });
});
