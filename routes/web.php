<?php

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
    return view('detect');
})->middleware('auth');

Route::post('/detect', 'DetectController@index');

Route::get('/detect', function () {
    return redirect('/');
});

Route::get('/recent_searches', 'SearchController@index');

Route::get('/admin', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
