<html>
<body>

<h1>Controle de Cidade</h1>

<lu>
@foreach($aCidadessss as $cida12022021)
    <form name="formdeletar" action="{{route('deletarCidadeApelido',['para1'=>$cida12022021->id])}}" method="post">
        @csrf
        @if ($cida12022021->trashed())
          <li>{{$cida12022021->nomecidade}} - [DELETADO]</li>
        @else
           <li>{{$cida12022021->nomecidade}} - <input type="submit" name="opcao" id="opcao" value="Excluir"</li>
        @endif
    </form>
@endforeach
</lu>

</body>
</html>