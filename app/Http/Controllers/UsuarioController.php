<?php

// \app\Http\Controllers\UsuarioController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

// \app\Models\Usuario.php
use App\Models\Usuario ;

class UsuarioController extends Controller
{

    // Consultar usuario
    public function consultarUsuario(){
  
        // $usuarios = Usuario::get();
        // Usuario = Sera a classe Usuario que esta em Model/Usuario.php 
        $usuarios = Usuario::get();

        // carrega o campo endereco
        // Onde endereco eh: o metodo  public function enderecos() em:
        //    D:\bombeiro\example-app\app\Models\Usuario.php

        // mode eager
        $usuarios = Usuario::with('enderecos')->get();
        // dd($usuarios);

        // usuario = nome do arquivo. Local: views/usuario.blade.php 
        //   OBS: Nao necessita informar /views/usuario.blade.php, somente usuario (nome do arquivo)
        return view("usuario/consultarusuario",['aUsuariossss'=>$usuarios]); // nao necessita /views/usuario.blade.php
    }


    // Consultar usuario
    public function exibirUsuario($parametro1){
  
        // $usuarios = Usuario::get();
        // Usuario = Sera a classe Usuario que esta em Model/Usuario.php 
        
        // mode lazy
        $usuarios = Usuario::get();


        
        // usuario = nome do arquivo. Local: views/usuario.blade.php 
        //   OBS: Nao necessita informar /views/usuario.blade.php, somente usuario (nome do arquivo)
        return view("usuario/consultarusuario",['aUsuariossss'=>$usuarios,'usuarioeditar'=>$parametro1]); // nao necessita /views/usuario.blade.php
    }    

    // Deletar usuario
    public function deletarUsuario($parametro1){
        // Usuario extend model 
        $objUsuario = Usuario::find($parametro1);


        // delete = metodo delete
        $objUsuario->delete(); 

        // redirecionamento para tela de consulta
        return redirect()->route('consultarUsuarioApelido');
    }    


    // view / cadastro de usuario
    public function cadastrarUsuario(){
         return view("usuario.cadastrarusuario"); // nao necessita /views/usuario/cadastrarusuario.blade.php
    }


    // insert / usuario
    public function inserirUsuario(Request $request){
        $usuario = new Usuario;
        $usuario->usuario = $request->form_usuario ; // form_usuario = input name no formulario
        $usuario->save(); // Biblioteca Eloquente - ORM 
        return redirect()->route('consultarUsuarioApelido');
    }


    // Alterar usuario
    public function alterarUsuario($parametro1,Request $request){
        // Usuario extend model 
        $objUsuario = Usuario::find($parametro1);
        $objUsuario->usuario = $request->form_usuario;

        // delete = metodo delete
        $objUsuario->save(); 

        // redirecionamento para tela de consulta
        return redirect()->route('consultarUsuarioApelido');
    }    


}
