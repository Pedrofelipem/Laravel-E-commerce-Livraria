<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        if(!session('nome')){
            return redirect('login')->with('alerta', 'Sessão expirada.');
        }
        return view ('index');
    }
}
