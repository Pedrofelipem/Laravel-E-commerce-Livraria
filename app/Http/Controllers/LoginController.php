<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }
    
    public function logar(Request $r){
        if($r->email_login == 'cesmac@edu.com.br' && $r->senha_login == '12345'){
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('alerta', 'Login ou senha invalidos.');
        }       
    }
}
