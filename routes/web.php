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
Route::view("4menu", "layouts/layout_menu_4");
Route::view("5main", "p5_main");
Route::view("5", "p5_main");
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
