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
Route::get('/', 'DogsController@home');

/**
 * Routes to list view page
 */
Route::get('/dogs', 'DogsController@list');

/**
 * Routes to detail page
 */
Route::get('/dogs/{id}', 'DogsController@show');

/**
 * Routes to about page
 */
Route::get('/about', 'AboutController@about');

/**
 * Routes to contact page
 */
Route::get('/contact', 'ContactController@contact');




Route::middleware(['admin'])->group(function(){

    /**
     * Routes to admin successful login page
     */
    Route::get('/admin', 'Admin\AdminController@index');

    /**
     * Route to admin list view page
     */
    Route::get('/admin/dogs', 'Admin\DogController@index');

    /* EDIT 
    -------------------------------------------------------- */

    /**
     * Route to edit one record
     */
    Route::get('/admin/dogs/edit/{id}', 'Admin\DogController@edit');

    /**
     * Route to update one record
     */
    Route::put('/admin/dogs/edit/{id}', 'Admin\DogController@update');

    /* CREATE NEW 
    -------------------------------------------------------- */

    /**
     * Route to create a new record
     */
    Route::get('/admin/dogs/create', 'Admin\DogController@create');

    /**
     * Route to store a new record
     */
    Route::post('/admin/dogs', 'Admin\DogController@store');

    /* DELETE
    -------------------------------------------------------- */
    /**
     * Route to delete a record
     */
    Route::delete('/admin/dogs/delete/{id}', 'Admin\DogController@destroy');
    
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
