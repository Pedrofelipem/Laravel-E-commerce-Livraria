<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }
    
    public function salvarusuario(Request $r){
        $r->validate([
            'nome' => 'required|max:30',
            'email' => 'required|max:20|email',
            'numero' => 'required|max:12',
            'cpf' => 'required|max:11',
            'cep' => 'required|max:9',
            'senha' => 'required|max:20'
        ]);
        
        Usuario::create($r->except('_token'));

        return redirect()->route('login')->with('mensagem', 'Usuário cadastrado com sucesso!');
    }
}
