<?php

use App\Http\Controllers\controller_question;
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
    return view('home');
})->name('index');

Route::get('/home/question', 'controller_question@index');
Route::post('store', 'controller_question@store')->name('store');

Route::get('/register', 'controller_user@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'controller_user@postRegister')->middleware('guest');

Route::get('/login', 'controller_user@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'controller_user@postLogin')->middleware('guest');

Route::get('/logout','controller_user@logout')->middleware('auth')->name('logout');


Route::prefix('home')->middleware('auth')->name('home.')->group(function(){
    Route::prefix('answer')->name('answer.')->group(function(){
        Route::get('{id_user}','ControllerAnswer@index')->name('index');
        Route::get('{id_user}/show','ControllerAnswer@show')->name('show');
        Route::post('store', 'ControllerAnswer@store')->name('store');
        Route::get('{id_answer}/edit', 'ControllerAnswer@edit')->name('edit');
        Route::patch('{id_answer}/edit', 'ControllerAnswer@update');
        Route::delete('{id_user}/{id_answer}/delete', 'ControllerAnswer@destroy')->name('delete');
    });
});