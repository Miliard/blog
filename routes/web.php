<?php

use App\Http\Controllers\PostControlles;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return "hola desde la pagina de inicio";

    });

//*  ruta para mostrar el listado de registro
Route::get('/posts', [PostControlles::class, 'index']);

//* ruta para ostrar un formulariopara crear un registro
Route::get('/posts/create', [PostControlles::class, 'create']);

//* ruta para guardar un registro
Route::get('/posts/store', [PostControlles::class, 'store']);

//* ruta para mostrar un registro
Route::get('/posts/{post}', [PostControlles::class, 'show']);

//* ruta para mostrar un formulario para esditar un registro
Route::get('/posts/{post}/edit', [PostControlles::class, 'edit']);

//* ruta para actualizar un registro
Route::put('/posts/{post}',[PostControlles::class, 'update']);

//* todo ruta para eliminar un registro
Route::delete('.posts/{post}', [PostControlles::class, 'destroy']);
