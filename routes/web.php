<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'HomeController@homepage')->name('home');
Route::get('/login', 'LoginController@login')->name('login');
Route::post('/home', 'LoginController@logar')->name('logar');

Route::get('/cadastro', 'CadastroController@cadastro')->name('cadastro');
Route::post('/salvar', 'CadastroController@salvarusuario')->name('salvarusuario');

Route::get('/livros', 'LivrosController@livros')->name('livros');
Route::group(['prefix' => '/livros'], function() {
    Route::get('/li', 'LivrosController@arte')->name('livros.a-arte');
    Route::get('/mestres-do-capitalismo', 'LivrosController@mestres')->name('livros.mestres');
    Route::get('/a-arte-de-pensar', 'LivrosController@arte')->name('livros.a-arte');
    Route::get('/homem-de-ferro','LivrosController@homemdeferro')->name('livros.homem-de-ferro');
    Route::get('/catan','LivrosController@catan')->name('livros.catan');
});