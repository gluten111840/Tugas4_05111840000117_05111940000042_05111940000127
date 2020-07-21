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

Route::get('/register', 'controller_user@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'controller_user@postRegister')->middleware('guest');

Route::get('/login', 'controller_user@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'controller_user@postLogin')->middleware('guest');

Route::get('/home',function(){
    return view('home');
})->middleware('auth')->name('home');

Route::get('/logout','controller_user@logout')->middleware('auth')->name('logout');