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


// A route is defined as two parameters passed
// to the Route class and whatever method is 
// handling the request... in this case GET
// param 1 - the route itself (a string)
// param 2 - a callable (function or class method) to handle it
Route::get('/hello', function(){
	return '<h1>Hello, World!</h1>';
});

Route::get('/hello/{name}', function($name){
	return "<h1>Hello, " . $name . "</h1>";
});

// To have a controller handle a route, create a string
// as so: ControllerName@method 
// @ sign separates controller from method
Route::get('/books/{title}', 'TestController@book');

// Create route for books that accepts two parameters... title and author
// Invoke a method called author on the TestController
// In the methods, simply output a string with both variables

Route::get('/books/publishers/ballantyne', function(){
	return 'Publisher Route';
});


Route::get('/books/{title}/{author}', 'TestController@author');


