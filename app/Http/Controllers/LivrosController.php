<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function livros(){
        return view('livros');
    }
    public function mestres(){
        return view('livro-mestres');
    }

    public function arte(){
        return view('livro-a-arte-do-pensar');
    }

    public function homemdeferro(){
        return view('livro-homem-de-ferro');
    }
    public function catan(){
        return view('livro-catan');
    }
}
