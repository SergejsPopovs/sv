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
//маршруты к страницам сайта
Route::get('/', 'MainController@home');
Route::get('/home', 'MainController@home');
Route::get('/history', 'MainController@history');
Route::get('/players', 'MainController@players');
Route::get('/events', 'MainController@events');
Route::get('/sponsors','MainController@sponsors');
Route::get('/about', 'MainController@about');
//маршрут к полно версии новости
Route::get('/show/{id}','MainController@show');
//маршруты для авторизации на сайте
Route::get('login' , 'Auth\AuthController@getLogin');
Route::post('auth/login' , 'Auth\AuthController@postLogin');
Route::get('auth/logout' , 'Auth\AuthController@getLogout');
//маршруты для админки
Route::group(['prefix'=>'adminzone'] , function()
{
    Route::get('/', 'Admin\AdminController@go');
    Route::resource('articles', 'Admin\ArticlesController');
    Route::resource('events', 'Admin\EventsController');
    Route::resource('players', 'Admin\PlayersController');
    Route::resource('photos', 'Admin\PhotosController');
    Route::resource('proles', 'Admin\ProlesController');
});
