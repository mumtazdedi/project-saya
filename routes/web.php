<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/add', function () {
    return view('add');
});

Route::get('/', [App\Http\Controllers\ArtikelController::class, 'show']);
Route::post('/add_process', 'App\Http\Controllers\ArtikelController@add_process');
Route::get('/detail/{id}', 'App\Http\Controllers\ArtikelController@detail');

Route::get('/admin', 'App\Http\Controllers\ArtikelController@show_by_admin');


Route::get('/edit/{id}', 'App\Http\Controllers\ArtikelController@edit');
Route::post('/edit_process', 'App\Http\Controllers\ArtikelController@edit_process');
Route::get('/delete/{id}', 'App\Http\Controllers\ArtikelController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
