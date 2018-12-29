<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/home', function () {
    return view('home');
});

Route::get('/child', function () {
    return view('child');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});

//### Ensayos
Route::get('/ensayo/{id?}', function () {
        return view('ensayo');
});

//### lamadas
Route::get('/llamada', function () {
    return view('llamada');
});


//### desfile
Route::get('/desfile', function () {
    return view('desfile');
});