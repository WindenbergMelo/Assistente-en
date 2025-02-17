<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Listar os Usuários
    public function index(){
        // Carregar a view
        return view('users.index');
    }

    // Mostrar os cards dos decks
    public function show(){
        //Carregar a view show(mostra os cards)
        return view('users.show');
    }

    // Carregar o formulario cadastrar decks
    public function create(){
        //Carregar a view
        return view('users.create');

    }
    // Carregar o formulario editar deck
    public function edit(){
        //Carregar a view
        return view('users.edit');

    }
}
