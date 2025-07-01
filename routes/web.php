<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "hola desde la pagina de inicio";

    // return view('welcome');

    });

    Route::get('/contacto', function(){

        return "hola desde la pagina contactos";
    });

