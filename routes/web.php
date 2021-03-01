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

Route::get('/','Home@home')->name('home');
Route::post('/input','Home@input')->name('input');
Route::get('/list', 'Home@list')->name('list');
Route::get('/list/edit/{id}', 'Home@listeditview')->name('inputedit');
Route::post('/list/input/post', 'Home@listeditpost')->name('inputeditpost');
Route::get('/list/hapus/{id}', 'Home@hapus')->name('inputhapus');
