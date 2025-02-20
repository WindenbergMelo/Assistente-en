<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'index'])->name('login');

//Usuarios
Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
Route::get('/show-cards/{deck}', [UserController::class, 'show'])->name('show.cards');
Route::get('/create-deck', [UserController::class, 'create'])->name('create.deck');
Route::get('/edit-deck/{deck}', [UserController::class, 'edit'])->name('edit.deck');

