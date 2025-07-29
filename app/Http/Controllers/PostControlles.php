<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pest\Plugins\Retry;

class PostControlles extends Controller
{
    public function index(){

    return "hola desde la pagina de posts y desde el controlador";
    }

    public function create(){
        return "aqui se mostrara el formulario para crear post";
    }

    public function store(){
        return "aqui se procesara el formulario para crear un post";
    }

    public function show($post){
            return " aqui se motrara el post: $post";
    }

    public function edit($post){
     return " aqui se mostrara el formulario para editar posts: $post";
    }

    public function update($post){
        return "aqui se procesara el formulario para editar el post: $post";
    }

    public function destroy($post){
        return "aqui se eliminara el post: $post";
    }
}
