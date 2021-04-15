<?php


Route::get('/', function () {
    return view('welcome');
});



Route::get('/Blog', 'Blogcontroller@index');
Route::get('/Blog/{id}', 'Blogcontroller@show');

Route::get('/folder', 'foldercontroller@index');
Route::get('/folder/{id}', 'foldercontroller@show');







Route::get('/lowongan', function () {
    return view('folder/formlowongan');
});

Route::get('/pendaftar', function () {
    return view('folder/pendaftar');
});


Route::get('/lowongan/tambah','lowonganController@tambah');
Route::post('/lowongan/store','lowonganController@store');
Route::get('/lowongan/show','lowonganController@show');
Route::get('/lowongan/delete/{id}','lowonganController@delete');
Route::get('/lowongan/edit/{id}','lowonganController@edit');
Route::post('/lowongan/editSave/','lowonganController@editSave');


Route::get('/pendaftar/tambah','lowonganController@tambahUser');
Route::post('/pendaftar/store','lowonganController@storeUser');
Route::get('/pendaftar/show','lowonganController@showUser');
Route::get('/pendaftar/delete/{id}','lowonganController@deleteUser');
Route::get('/pendaftar/edit/{id}','lowonganController@editUser');
Route::post('/pendaftar/editSave/','lowonganController@editSaveUser');
Route::get('/pendaftar/dataUser/','lowonganController@data');




