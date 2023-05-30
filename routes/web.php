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

// Route::get('/', function () {
//     return view('welcome');
// });


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',       [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/',           [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/articulos',  [App\Http\Controllers\PagesController::class, 'art1'])->name('articulos1');
Route::get('/articulos2', [App\Http\Controllers\PagesController::class, 'art2'])->name('articulos2');
Route::get('/articulos3', [App\Http\Controllers\PagesController::class, 'art3'])->name('articulos3');


Route::get('/cart', [App\Infrastructure\CartController::class, 'addItem']);

Route::get('/order', [App\Infrastructure\OrderController::class, 'completeOrder']);