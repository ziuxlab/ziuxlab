<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
    
    Route::resource('/', 'InicioController');
    Route::resource('gracias', 'MailController');
    
    
    /* rutas administrativas backend */
    Route::group(['prefix' => 'admin'], function () {
        Auth::routes();
        Route::get('/', 'HomeController@index');
        
    });
