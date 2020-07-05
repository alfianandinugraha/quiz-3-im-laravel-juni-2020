<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/artikel', 'ItemController@store'); // menyimpan data
Route::get('/artikel', 'ItemController@index'); // menampilkan semua
Route::get('/artikel/{id}', 'ItemController@show'); // menampilkan detail item dengan id
Route::get('/artikel/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/artikel/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ItemController@destroy'); // menghapus data dengan id
