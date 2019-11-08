<?php

Route::get('/', 'UsersController@index')->name('index');

Route::group(['middleware' => 'sentinel'], function () {
    Route::get('home','UsersController@home')->name('home');
    
    Route::resource('book', 'BooksController')->except(['create']);
    Route::get('cari_buku','BooksController@cari')->name('cari');
    
    Route::resource('/article', 'ArticlesController')->except(['create']);
    Route::get('cari_artikel','ArticlesController@cari')->name('cariartikel');

    Route::post('/komentar','CommentsController@store')->name('komentar.store');
});

Route::get('forgot-password','RemindersController@create')->name('reminders.create');
Route::post('forgot-password','RemindersController@store')->name('reminders.store');
Route::get('reset-password/{id}/{token}','RemindersController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}','RemindersController@update')->name('reminders.update');

Route::get('register','UsersController@signup')->name('register');
Route::post('register','UsersController@signup_store')->name('register.store');
Route::get('login','SessionsController@login')->name('login');
Route::post('login','SessionsController@login_store')->name('login.store');
Route::get('logout','SessionsController@logout')->name('logout');
