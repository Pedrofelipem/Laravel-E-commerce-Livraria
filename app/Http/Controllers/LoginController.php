<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }
    
    public function logar(Request $r){
        $r->validate([
            'email_login' => 'required|max:20|email',
            'senha_login' => 'required|max:20'   
        ]);

        $usuario = Usuario::where('email', $r->email_login)->where('senha', $r->senha_login)->first();
        
        if($usuario != null){
            session(['nome'=> $usuario->nome]);
            return redirect()->route('home'); 
        }else{
            return redirect()->back()->with('alerta', 'Login ou senha invalidos.');
        }      
    }

    public function logout(Request $r){
        $r->session()->flush();
        return redirect ('login');
    }
}

