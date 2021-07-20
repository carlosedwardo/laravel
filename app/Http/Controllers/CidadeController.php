<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cidade ;

class CidadeController extends Controller
{
    //
    // public function show(){
    //     return "Controle de Cidade";
    // }

//    public function show(){
//        return view("cidade"); // nao necessita /views/cidade.blade.php
//    }

    public function consultarCidade(){
        // $arrayCidades = Cidade::get();
        $arrayCidades = Cidade::withTrashed()->get();
       //  dd($arrayCidades);
        return view("cidade",['aCidadessss'=>$arrayCidades]); // nao necessita /views/cidade.blade.php
    }

    public function cadastrarCidade(){
        return view("cadastrarcidade"); // nao necessita /views/cadastrarCidade.blade.php
    }

  
    public function deletarCidade($parametro1){
        // Cidade extend model 
        $objCidade = Cidade::find($parametro1);

        // delete = metodo delete
        $objCidade->delete();  

        // redirecionamento para tela de consulta
        return redirect()->route('consultarCidadeApelido');
    }

    public function inserirCidade(Request $request){
        // $cidade = new Cidade;
        // $cidade->nomecidade = $request->nomecidade ; // nomecidade = id e name no formulario
        // $cidade->save(); // Biblioteca Eloquente - ORM 

        // Somente uma linha
        // Cidade::create($request->all());
        
        // $cidade = new Cidade(['nomecidade'=>'RIO DE JANEIRO']);
        // dd($cidade);
        // dd($request->all());
        
        // Duas linhas
        $cidade = new Cidade($request->all());
        $cidade->save();   // Biblioteca Eloquente - ORM 

        return redirect()->route('consultarCidadeApelido');
    }

}
