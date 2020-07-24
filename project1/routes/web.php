<?php

use App\Http\Controllers\controller_question;
use Illuminate\Support\Facades\Auth;
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

Route::post('store', 'controller_question@store')->name('store');
Route::get('/question', 'controller_question@index')->middleware('auth')->name('question');
Route::get('/homeee','controller_question@tampil')->name('tampil');
Route::get('/search','controller_question@search')->name('search_question');
Route::get('{id}/edit','controller_question@edit')->name('edit');
Route::put('/update', 'controller_question@update')->name('update');
Route::get('{id}/delete','controller_question@delete')->name('delete');

Route::get('/answer','ControllerAnswer@index')->name('index');

Route::get('/register', 'controller_user@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'controller_user@postRegister')->middleware('guest');

Route::get('/login', 'controller_user@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'controller_user@postLogin')->middleware('guest');

Route::get('/home',function(){
    return view('home');
})->middleware('auth')->name('home');

Route::get('/logout','controller_user@logout')->middleware('auth')->name('logout');

