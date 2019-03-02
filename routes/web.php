<?php

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
    // return view('welcome');
    return 'Welcome Home by Mai Van Dat';
});

Route::get('about', function() {
	return 'About Content';
});

Route::get('about/directions', function(){
	return 'Directions Content';
});

Route::any('submit-form', function(){
	return 'Process Form';
});
