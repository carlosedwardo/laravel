{{-- D:\wtb\wtb-app\resources\views\layouts\app.blade.php --}}
@extends('layouts.app') 


@section('title','MENU PRINCIPAL')


{{-- INICIO: CABECALHO --}}
@section('sidebar')
    @parent
@endsection

@section('sidebar2')
    {{-- // D:\wtb\wtb-app\resources\views\post\menu.blade.php --}}
    @include("post.menu")
    @include("post.caroucel")
    @include("post.hr")
@endsection
{{-- FIM: CABECALHO --}}


@section('mypost')
    @include("post.linha")
    @include("post.dropdown")
    @include("post.imagens")
    @include("post.textopost")
    @include("post.datapost")
    @include("post.hr")
    
    @include("post.rodape")     
 
   {{--   
    @include('usuario.botoes')

    @include('usuario.login')
    @include('usuario.cadastrar')
    @include('usuario.lembresenha')
    --}}

@endsection
