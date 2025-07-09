<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return "hola desde la pagina de inicio";

    });




// ruta para mostrar el listado de registro
Route::get('/posts', function(){

    return "hola desde la pagina de posts";

});

//! ruta para ostrar un formulariopara crear un registro
Route::get('/posts/create', function(){  //? ruta para mostrar un formulario para crear un registro

    return "aqui de mostrara el formulario para crear posts";

});


//@ ruta para guardar un registro
Route::post('/posts', function(){
    return "aqui se procesara el formulario para crear el posts";

});

//! ruta para mostrar un registro

Route::get('/posts/{post}', function ($post){
    return " aqui se motrara el post: $post";
});

//? ruta para mostrar un formulario para esditar un registro

Route::get('/posts/{post}/edit', function ($post) {

    return " aqui se mostrara el formulario para editar posts: $post";
});

//* ruta para actualizar un registro
Route::put('/posts/{post}',function ($post){

    return "aqui se procesara el formulario para editar el post: $post";
});


//todo ruta para eliminar un registro
Route::delete('.posts/{post}', function ($post){
    return "aqui se eliminara el post: $post";
});
