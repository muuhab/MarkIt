<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/','ProductsController@index')->name('home');
Route::get('/search','ProductsController@search')->name('search');
Route::get('/cat/{cat}','ProductsController@cat')->name('cat');
Route::get('/signin', function () {
        return view('login');
    })->name('signin');
Auth::routes();
Route::resource('products','ProductsController');
Route::resource('cart','CartController');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
