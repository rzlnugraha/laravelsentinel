<?php

Route::get('/', 'UsersController@index')->name('index');

Route::get('/testjob', 'HomeController@tesJob')->name('tesjob');

Route::group(['middleware' => 'sentinel'], function () {
    // Index awal login
    Route::get('home','UsersController@home')->name('home');
    
    // Buku
    Route::resource('book', 'BooksController')->except(['create']);
    Route::get('cari_buku','BooksController@cari')->name('cari');
    
    
    // Komentar
    Route::post('/komentar','CommentsController@store')->name('komentar.store');
    
    // Task
    Route::resource('/task', 'TasksController');
    Route::get('/table/task','TasksController@dataTable')->name('table.task');
});

Route::group(['middleware' => ['sentinel','hasAdmin']], function () {
    // Artikel
    Route::resource('/article', 'ArticlesController')->except(['create']);
    Route::get('cari_artikel','ArticlesController@cari')->name('cariartikel');
    Route::get('dashboard','Admin\DashboardAdminController@index')->name('dashboard');
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
