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

Route::get('/add/shipping', function () {
    return view('add');
});
Route::get('/shipping/{id}/edit', function () {
    return view('update');
});
Route::get('/','USPController@get');
Route::get('/delete/{id}','USPController@delete');



Route::post('/shipping','USPController@Add');
Route::post('/shipping/{id}/update','USPController@Update');

