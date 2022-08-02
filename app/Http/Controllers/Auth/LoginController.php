<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show_login()
    {
        return view('login.login');
    }

    public function login()
    {
        $validaciones = [
            'user' => 'required|string',
            'password' => 'required|string'
        ];

        $mensajes = [
            'user.required' => 'Ingresa tu usuario',
            'user.string' => 'No se permitén caracteres extaños.',
            'password.required' => 'Ingresa tu contraseña'
        ];

        $credenciales = $this->validate(request(),$validaciones,$mensajes);

        if(Auth::attempt($credenciales)){
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['user'=>'USUARIO NO AUTORIZADO'])
            ->withInput(request(['user']));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/admin');
    }
}