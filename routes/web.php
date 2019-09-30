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
    return view('web.home');
});




Route::get('/', 'HomeController@index');
Route::get('/carpas', 'HomeController@carpas')->name('carpas');
Route::get('/cuadrada', 'HomeController@cuadrada')->name('cuadrada');
Route::get('/mesaVintage', 'HomeController@mesaVintage')->name('mesaVintage');
Route::get('/periquera', 'HomeController@periquera')->name('periquera');
Route::get('/sala-vintage', 'HomeController@salaVintage')->name('sala-vintage');
Route::get('/lounge', 'HomeController@lounge')->name('lounge');
Route::get('/bocadillos', 'HomeController@bocadillos')->name('bocadillos');

Auth::routes();


Route::group(['middleware' => ['auth']], function() {


    Route::get('logout', 'Auth\LoginController@logout', function () {
        return abort(404);
    });
    
    
    Route::get('/administrador', function () {
        return view('dashboard.dashboard');
    });
    
    
    
    //Route::resource('medias','MediaController');
    Route::get('listarImagen','MediaController@index')->name('listarImagen');
    Route::get('crearImagen','MediaController@create')->name('crearImagen');
    Route::post('guardarImagen','MediaController@store')->name('guardarImagen');
    Route::get('eliminarImagen/{id}','MediaController@destroy')->name('eliminarImagen');

    Route::get('enlaces','MediaController@createEnlace')->name('enlaces');
    Route::post('guardarEnlaces','MediaController@guardarEnlaces')->name('guardarEnlaces');

});