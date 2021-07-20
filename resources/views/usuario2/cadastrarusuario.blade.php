{{-- D:\bombeiro\example-app\resources\views\layouts\app.blade.php --}}
@extends('layouts.app') 


@section('title','MENU PRINCIPAL')


{{-- INICIO: CABECALHO --}}
@section('sidebar')
    @parent
@endsection

@section('sidebar2')
    Endereco: Rua A, 10 - Centro
    <hr color='blue'>
@endsection
{{-- FIM: CABECALHO --}}


@section('content')

    @include('usuario.botoes')

    @include('usuario.login')
    @include('usuario.cadastrar')
    @include('usuario.lembresenha')

@endsection
