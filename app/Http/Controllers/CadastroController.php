<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(){
        return view('cadastro');
    }
    public function salvarusuario(Request $r){
        $r->validate([
            'nome' => 'required',
            'email' => 'required',
            'numero' => 'required|integer',
            'cpf' => 'required|integer',
            'cep' => 'required|integer',
            'senha' => 'required|integer'
        ]);
        return redirect()->route('login')->with('mensagem', 'Usuário cadastrado com sucesso!');
    }
}
