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
Route::view("p", "p");
Route::get('/', function () {
    return view('paginas.login');
})->name("login");

Route::get('/logged', function () {
    return view('paginas.logged');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
