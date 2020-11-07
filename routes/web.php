<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;


/**
 * Rota home
 * API public
 *
*/
Route::group(['prefix' => '/'], function () {
    Route::get('/', [Home\HomeController::class, 'index'])->name('home');
    Route::post('/listarRecentesHome', [HomeController::class, 'listarRecentesHome'])->name('listarRecentesHome');
    Route::post('/pesquisarPergunta', [HomeController::class, 'pesquisarPergunta'])->name('pesquisarPergunta');
    Route::post('/frequenciaPergunta/{id}', [HomeController::class, 'frequenciaPergunta'])->name('frequenciaPergunta');
});
    
