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
 * Routes to contact page
 */
Route::get('/contact', 'PageController@contact');

/**
 * Routes to gallery page
 */
Route::get('/gallery', 'PageController@gallery');

/**
 * Routes to index page
 */
Route::get('/', 'PageController@index');

/**
 * Routes to intro page
 */
Route::get('/intro', 'PageController@intro');

/**
 * Routes to port page
 */
Route::get('/port', 'PageController@port');