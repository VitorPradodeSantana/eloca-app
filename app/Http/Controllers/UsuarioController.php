<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function cadastrar()
    {
        return view('users.create');
    }


    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home');
        } else {
            dd('Voce não esta logado');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function salvar(Request $request)
    {
        $user = new User;

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/')->with('msg', 'Usuário criado com sucesso!');
    }
}
