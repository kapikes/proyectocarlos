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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get("/", "miControlador@index");

Route::get("/galeria", "miControlador@galeria");
Route::get("/artistas", "miControlador@artistas");

//Route::get("/contacto", "ContactController@showForm");
//Route::post("/contacto", "ContactController@store")->name('contact.store');
//Route::post("/contacto", "ContactController@store");
Route::post("/contacto", "MessagesController@store");
Route::view('/contacto', 'contacto')->name('contacto');

Route::get("/dondeEstamos", "miControlador@dondeEstamos");
Route::get("/enQueConsiste", "miControlador@enQueConsiste");
Route::get("/Sofia", "miControlador@Sofia");
Route::get("/Marina", "miControlador@Marina");
Route::get("/Carlos", "miControlador@Carlos");
Route::get("/carlosFotos", "miControlador@carlosFotos");
Route::get("/sofiaFotos", "miControlador@sofiaFotos");
Route::get("/marinaFotos", "miControlador@marinaFotos");
Route::get("/equipo", "miControlador@equipo");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
