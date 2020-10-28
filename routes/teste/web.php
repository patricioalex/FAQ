<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Login
Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login/validar', 'AuthController@login')->name('login.validar');
Route::post('/login/sair', 'AuthController@sair')->name('sair');

//Página Home
Route::get('/', 'HomeController@index')->name('home');
Route::post('/pesquisar', 'HomeController@pesquisar')->name('home.pesquisar');
Route::get('/recente/{id?}', 'HomeController@recente')->name('home.recente');

// Rota index do menu mais a rota listar de dúvidas por sistemas
Route:: get('/categoria_de_duvidas', 'CategoriaDuvidas@index')->name('categorias');
Route:: get('/categoria_de_duvidas/listar', 'CategoriaDuvidas@listar')->name('categorias.listar');
Route:: get('/categoria_de_duvidas/listaPergunta/{id?}', 'CategoriaDuvidas@listaPergunta')->name('categorias.listaPergunta');

// Rota Pesquisar Erros
Route::get('/codigos_de_erros', 'CodigoErroController@index')->name('codigos_de_erros');
Route::get('/codigos_de_erros/listarSistemas', 'CodigoErroController@listarSistemas')->name('codigos_de_erros.listarSistemas');
Route::get('/codigos_de_erros/listarCodigos/{id?}/{opcao?}', 'CodigoErroController@listarCodigos')->name('codigos_de_erros.listarCodigos');
Route::get('/codigos_de_erros/pesquisa/{codigo?}', 'CodigoErroController@pesquisarCodigoDeErro')->name('codigos_de_erros.listarErros');

// Area restrita
// Rota de Cadastro. Possivel cadastrar, alterar e excluir pergunta e resposta, código de erro e novo sistema
Route::group(['middleware' => ['auth']], function () {
    Route::get('/cadastro', 'CadastroController@index')->name('cadastro');
    Route::get('/cadastro/pesquisarId/{id?}/{pesquisar?}/{opcao?}', 'CadastroController@pesquisarId')->name('cadastro.pesquisarId');
    Route::put('/cadastro/atualizar/{id?}', 'CadastroController@atualizar')->name('cadastro.atualizar');
    Route::delete('/cadastro/deletar/{lista?}', 'CadastroController@deletar')->name('cadastro.deletar');
    Route::post('/cadastro/cadastrar', 'CadastroController@cadastrar')->name('cadastro.cadastrar');
    Route::get('/cadastro/listarPerguntaResposta', 'CadastroController@listarPerguntaResposta')->name('cadastro.listarPerguntaResposta');
    Route::get('/cadastro/listarCodigoErros', 'CadastroController@listarCodigoErros')->name('cadastro.listarCodigoErros');
    Route::get('/cadastro/listarSistemas', 'CadastroController@listarSistemas')->name('cadastro.listarSistemas');
    //lista de sistema completa para o select do novo cadastro
    Route::get('/cadastro/sistemasListar', 'CadastroController@sistemasListar')->name('cadastro.sistemasListar');
});

