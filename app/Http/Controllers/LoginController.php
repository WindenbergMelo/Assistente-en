<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login
    public function index(){
        // Carregar a view
        return view('login.index');
    }
    // chama "LoginRequest" e ele verificará os dados e logo após colocará na variavel "$request"
    public function loginProcess(LoginRequest $request){
        // Validar os dados envidos do form 
        $request->validated();
        // Validar o usuário e a senha no bd
        $authenticated = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        // Verificar se o usuário foi autenticado
        if (!$authenticated) {
            // Redirecionar o usuário para a página anterior e enviar o erro
            return back()->withInput()->with('error', 'E-mail ou senha inválido');
        }

    }
}
