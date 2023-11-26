<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function index(Request $request)
    {
       
        return view('painel.login.login');
    }

    public function store(Request $request)
    {


        Session::flush();

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            $usuario_logado = [
                'id'            => $user->id,
                'nome'          => $user->name,
                'email'         => $user->email,
                'carteira'      => $user->carteira,
            ];

            Session::put(['usuario' => $usuario_logado]);

            return view('painel.login.index');
        }

        return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);
    }
}
