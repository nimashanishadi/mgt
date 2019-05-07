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
    return view('welcome');
});

Route::get('/tickets','TicketController@index')->name('tickets.index');


Route::get('/create','TicketController@create')->name('tickets.create');

Route::post('/create/store','TicketController@store')->name('tickets.store');

Route::post('/{ticket}','TicketController@update')->name('tickets.update');

Route::get('/delete/{ticket}','TicketController@delete')->name('tickets.delete');

Route::post('/delete/{ticket}','TicketController@destroy')->name('tickets.destroy');

Route::get('/{ticket}','TicketController@show')->name('tickets.show');  