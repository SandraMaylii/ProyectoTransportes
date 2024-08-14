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
   /* return view('welcome');*/
    return "Bienvenido a nuestra pagina principal Aguirre Transportes ";
});

Route::get('servicios', function(){
    return "Bienvenido a la pagina de servicios";
});

Route::get('servicios/{servicio}', function($servicio){
    return "Bienvenido al servicio de $servicio";
});
