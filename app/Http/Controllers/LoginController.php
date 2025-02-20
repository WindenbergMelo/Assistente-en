<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Login
    public function index(){
        // Carregar a view
        return view('login.index');
    }
}
