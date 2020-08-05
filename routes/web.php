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
Route::view("1", "layouts/layout1");
Route::view("2", "layouts/layout2");
Route::view("3", "layouts/layout3");
/*
Route::get('/', function () {
    return view('paginas.login');
})->name("login");

Route::get('/logged', function () {
    return view('paginas.logged');
});
*/

Auth::routes();
Route::post("acceso", "Login@acceso")->name('acceso');
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/ppal', "layouts/ppal");
