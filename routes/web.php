<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Usuario2Controller;
use App\Http\Controllers\ProdutoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// http://localhost:8000/testando  --> executa o d:/wtb/wtb-app/resources/views/teste/index.blade.php
// Route::get('/testando', function () {
//     return view('/teste/index');
// });




// http://localhost:8000/cadastrarusuario
// D:\wtb\wtb-app\app\Http\Controllers\PostController.php
Route::get('/'               , [PostController::class,'consultarPost'] )->name('consultarPostApelido');
// Route::get('/{id}', [PostController::class,'consultarPost'] )->name('consultarPostApelido');  lista um usuario especifico
Route::get('/post/criar'     , [PostController::class,'criarPost'] )->name('criarPostApelido');
Route::get('/post/upload'    , [PostController::class,'uploadfoto'] )->name('uploadPostApelido');
Route::post('/inserirpost'   , [PostController::class,"inserirPost"] )->name('inserirPostApelido');

// Route::get('/file-resize', [ResizeController::class, 'index']);
Route::post('/resize-file', [ResizeController::class, 'resizeImage'])->name('resizeImage');



// http://localhost:8000/consultacidade
// Route::get('/testecidade', [CidadeController::class,"vercida"] );
Route::get('/cadastrarcidade', [CidadeController::class,"cadastrarCidade"] );
Route::post('/inserircidade', [CidadeController::class,"inserirCidade"] )->name('inserirCidadeApelido');
Route::post('/deletarcidade/{para1}', [CidadeController::class,"deletarCidade"] )->name('deletarCidadeApelido');
Route::get('/consultarcidade', [CidadeController::class,"consultarCidade"] )->name('consultarCidadeApelido');


// http://localhost:8000/cadastrarusuario
// D:\bombeiro\example-app\app\Http\Controllers\UsuarioController.php
Route::get('/cadastrarusuario'               , [UsuarioController::class,'cadastrarUsuario'] )->name('cadastrarUsuarioApelido');
Route::post('/cadastrarusuario'              , [UsuarioController::class,'inserirUsuario']   )->name('inserirUsuarioApelido');
Route::get('/consultarusuario'               , [UsuarioController::class,'consultarUsuario'] )->name('consultarUsuarioApelido');
Route::post('/deletarusuario/{para1}'        , [UsuarioController::class,'deletarUsuario']   )->name('deletarUsuarioApelido') ;
Route::post('/alterarusuario/{para1}'        , [UsuarioController::class,'alterarUsuario']   )->name('alterarUsuarioApelido');
Route::get('/consultarusuario/{para1}'       , [UsuarioController::class,'exibirUsuario']    )->name('exibirUsuarioApelido');


//Route::get('/usuarios') lista todos os usuarios
//Route::get('/usuarios/{id}') lista um usuario específico
//Route::post('/usuarios') persiste a informação no banco
//Route::delete('/usuarios/{id}') exclui a informação no banco
//Route::put('/usuarios/{id}') atualização de um usuário
//Route::patch('/usuarios/{id}')

Route::resource('produtos', ProdutoController::class);
