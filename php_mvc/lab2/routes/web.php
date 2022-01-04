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
 * Routes to home page
 */
Route::get('/', 'MoviesController@home');

/**
 * Routes to list view page
 */
Route::get('/movies', 'MoviesController@list');

/**
 * Routes to detail page
 */
Route::get('/movies/{id}', 'MoviesController@detail');
