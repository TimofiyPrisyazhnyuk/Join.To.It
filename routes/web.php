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

/**
 * Access all users
 */
Route::get('/', ['uses' => 'Home\IndexController@index'])->name('index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Google Map show
 */
Route::get('/map', ['uses' => 'Map\MapController@showMap'])->name('map');

/**
 * Access if have permission:tables_access
 */
Route::get('/tables', ['uses' => 'Home\TableController@tables', 'middleware' => 'permission:tables_access'])
    ->name('tables');

/**
 * Access auth users
 */
Route::group(['middleware' => ['auth']], function () {

    Route::get('/navbar', ['uses' => 'Home\ComponentController@navbar'])->name('navbar');

    Route::get('/cards', ['uses' => 'Home\ComponentController@cards'])->name('cards');

});

/**
 * Access if have permission:dasb_char_comp_access
 */
Route::group(['middleware' => ['permission:dasb_char_comp_access', 'web']], function () {

    Route::get('/dashboard', ['uses' => 'Home\DashboardController@dashboard'])->name('dashboard');

    Route::get('/charts', ['uses' => 'Home\ChartController@charts'])->name('charts');

    Route::post('/map', ['uses' => 'Map\MapController@createMarkers'])->name('create_markers');
});
