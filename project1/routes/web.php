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

Route::get('/register', 'controller_user@getRegister')->name('register');
Route::post('/register', 'controller_user@postRegister');

Route::get('/login', 'controller_user@getLogin')->name('login');
Route::post('/login', 'controller_user@postLogin');

Route::get('/home',function(){
    return view('home');
})->name('home');

Route::get('/logout','controller_user@logout')->name('logout');