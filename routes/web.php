<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/', [UsuarioController::class, 'index'])->name('home.login');

Route::post('/login', [UsuarioController::class, 'login'])->name('login');
Route::get('/logout', [UsuarioController::class, 'logout']);

Route::get('/users/create', [UsuarioController::class, 'cadastrar']);
Route::post('/users', [UsuarioController::class, 'salvar']);

Route::get('/home', [ClienteController::class, 'listar']);

Route::get('/clients/create', [ClienteController::class, 'criar']);
Route::get('/clients/{id}', [ClienteController::class, 'mostrarItem']);
Route::post('/clients', [ClienteController::class, 'salvar']);
Route::delete('/clients/{id}', [ClienteController::class, 'excluir']);
Route::get('/clients/edit/{id}', [ClienteController::class, 'editar']);
Route::put('/clients/update/{id}', [ClienteController::class, 'atualizar']);
