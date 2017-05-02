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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/output', 'FormSubmit@formsubmitted');

Route::get('/layout', function () {
    return view('layout');
    });

Route::get('/main', function () {
    return view('main');
    });

Route::get('/newpost', function () {
    
    });

// Route::post('/allposts', 'PostController@store');

// Route::post('allpost/insert', 'PostController@insert');

// Route::get('/allposts/{id}', 'PostController@show');

// Route::get('/allposts', 'PostController@index');

// Route::get('deletepost/{id}', 'PostController@destroy');

// Route::get('update/{id}', 'PostController@edit');

// Route::post('/update/{id}', 'PostController@update');

Route::resource('allposts', 'PostController');
