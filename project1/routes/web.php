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

Route::get('/register', 'controller_user@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'controller_user@postRegister')->middleware('guest');

Route::get('/login', 'controller_user@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'controller_user@postLogin')->middleware('guest');

Route::get('/logout','controller_user@logout')->middleware('auth')->name('logout');


Route::prefix('home')->middleware('auth')->name('home.')->group(function(){
    
    Route::get('/','controller_question@tampil')->name('tampil')->middleware('auth');
    
    Route::prefix('question')->name('question.')->group(function(){
        Route::post('store', 'controller_question@store')->name('store');
        Route::get('/question', 'controller_question@index')->name('create');
        Route::get('/search','controller_question@search')->name('search_question');
        Route::get('{id}/edit','controller_question@edit')->name('edit');
        Route::put('/update', 'controller_question@update')->name('update');
        Route::get('{id}/delete','controller_question@delete')->name('delete');
        Route::get('{id}/show','controller_question@show')->name('show');
        Route::get('showall','controller_question@showall')->name('showall');
    });

    Route::prefix('answer')->name('answer.')->group(function(){
        Route::get('{id_user}','ControllerAnswer@index')->name('index');
        Route::get('{id_user}/show','ControllerAnswer@show')->name('show');
        Route::post('store', 'ControllerAnswer@store')->name('store');
        Route::get('{id_answer}/edit', 'ControllerAnswer@edit')->name('edit');
        Route::patch('{id_answer}/edit', 'ControllerAnswer@update')->name('update');
        Route::get('{id_answer}/delete', 'ControllerAnswer@destroy')->name('delete');
    });
});