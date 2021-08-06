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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payments/create', 'PaymentsController@show')->name('payments.create')->middleware('auth');
Route::post('/payments', 'PaymentsController@store')->middleware('auth');
Route::get('/notifications', 'UserNotificationsController@show')->name('notifications')->middleware('auth');

Route::get('conversations', 'ConversationsController@index')->name('conversations.index');
Route::get('conversations/{conversation}', 'ConversationsController@show')->name('conversations.show');