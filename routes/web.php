<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/manu', function (){
    return "Hola Manu";
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('manolo', function() {
    return response('<p>ManuLG</p>', 200) ->header( 'Content-Type', 'text/html')
        -> cookie ('blog' ,'asdasdasdasd',30);
});

Route::get('salir', function(){
    return redirect('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::put('post/{id}', function ($id) {
    //
})->middleware('auth', 'role:admin');

Route::resource('propiedades','PropertyController');