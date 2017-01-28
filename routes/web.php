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
    
    


Route::get('diseno-interfaces','InicioController@diseno');
Route::get('desarrollo-web','InicioController@desarrollo');
Route::get('optimizacion-web','InicioController@optimizacion');
Route::get('pruebas-usabilidad','InicioController@pruebas');
Route::get('empresa','InicioController@empresa');

Route::resource('/', 'InicioController');
    Route::resource('portafolio', 'PortafolioController');
    //Route::get('servicios', 'InicioController@servicios');
    
    Route::resource('gracias', 'MailController');
    
    
    /* rutas administrativas backend */
    Route::group(['prefix' => 'admin'], function () {
        Auth::routes();
        Route::get('/', 'HomeController@index');
        
    });
