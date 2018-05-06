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


Route::get('/', ['uses' => 'Home\IndexController@index'])->name('index');

Route::get('/charts', ['uses' => 'Home\ChartController@charts'])->name('charts');

Route::get('/tables', ['uses' => 'Home\TableController@tables'])->name('tables');

Route::get('/navbar', ['uses' => 'Home\ComponentController@navbar'])->name('navbar');

Route::get('/cards', ['uses' => 'Home\ComponentController@cards'])->name('cards');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
