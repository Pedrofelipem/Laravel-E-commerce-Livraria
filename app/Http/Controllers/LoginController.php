<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }
    
    public function logar(Request $r){
        if($r->email_login == 'felipe@gmail.com' && $r->senha_login == '123456'){
            session(['nome' => 'Pedro Felipe']);
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

