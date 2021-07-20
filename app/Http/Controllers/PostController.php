<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Titulo ;
use App\Models\Post ;

class PostController extends Controller
{
   public function consultarPost(){
      return view("post.consultarpost"); // nao necessita /views/post/consultarPost.blade.php
  }   

   public function criarPost(){
      return view("post.criarpost"); // nao necessita /views/post/criarPost.blade.php
  }   
  
  public function uploadfoto()
  {
     return view('post.upload');
  }
   
  public function inserirPost(Request $request){
   // $cidade = new Cidade;
   // $cidade->nomecidade = $request->nomecidade ; // nomecidade = id e name no formulario
   // $cidade->save(); // Biblioteca Eloquente - ORM 

   // Somente uma linha
   // Cidade::create($request->all());
   
   // $cidade = new Cidade(['nomecidade'=>'RIO DE JANEIRO']);
   // dd($cidade);
   // dd($request->all());
   
   // Duas linhas
   // $post = new Post($request->all());
   // $post->save();   // Biblioteca Eloquente - ORM 

   $obj_titulo = new Titulo;
   $obj_titulo->titulo = $request->titulo ; // O titulo eh a id e name no formulario
   $obj_titulo->save(); // Biblioteca Eloquente - ORM 


   
   $obj_post = new Post;
   $obj_post->titulo_id = $request->titulo ; // O titulo eh a id e name no formulario
   $obj_post->save(); // Biblioteca Eloquente - ORM 

   // return redirect()->route('consultarPostApelido');
}

}
