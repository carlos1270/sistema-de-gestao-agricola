<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CoordenadorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/layouts/app');
});



Route::prefix('/user')->name('user')->namespace('User')->group(function(){
    Route::prefix('/coordenador')->name('.coordenador')->group(function () {
        Route::prefix('/criar_produtor')->name('.cadastrarProdutor')->group(function () {
            Route::get('/', [CoordenadorController::class, 'cadastroProdutor']);
            Route::post('/salvar', [CoordenadorController::class, 'salvarCadastrarProdutor'])->name('.salvar');
        });

        Route::get('/ver_produtor/{id_produtor}',  [CoordenadorController::class, 'verProdutor'])->name('.ver_produtor');

    });

});

//Todo: Criar controller home e a funçãod e erro!!!
//Route::get('/erro', 'HomeController@mostrarErro')->name('erro');
