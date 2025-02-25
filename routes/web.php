<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');
Route::get('logout', [LoginController::class, 'destroy'])->name('login.destroy');

// Essas são as rotas privadas, foi criada um grupo e o middleware verifica usando o auth, caso essas verificação esteja correta executa a função
Route::group(['middleware' => 'auth'], function(){
    //Usuarios
    Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
    Route::get('/show-cards/{deck}', [UserController::class, 'show'])->name('show.cards');
    Route::get('/create-deck', [UserController::class, 'create'])->name('create.deck');
    Route::get('/edit-deck/{deck}', [UserController::class, 'edit'])->name('edit.deck');

});