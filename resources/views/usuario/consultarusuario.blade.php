<html>
<body>

<h1>Consultar Usuario</h1>

<lu>

  {{-- dd($aUsuariossss) --}} 

@foreach($aUsuariossss as $usuario12022021)

    <li>  
    {{-- @if ( ($usuarioeditar ?? '' ) == $usuario12022021->id) --}}
    {{-- @if ( (!empty($usuarioeditar)) and ( $usuarioeditar == $usuario12022021->id) ) --}}
    
    @if ( ($usuarioeditar ?? '' ) == $usuario12022021->id)
      <form name="formalterar" action="{{ route('alterarUsuarioApelido',['para1'=>$usuario12022021->id] ) }}" method="post">
      @csrf
      <input type="text" name="form_usuario" id="usuario" value="{{ $usuario12022021->usuario}}"> 
      <input type="submit" name="opcao" id="opcao" value="Alterar">
      </form>
    @else
      Usuario: 
      {{ $usuario12022021->usuario}}
      <br />
      
      <hr>
      ENDERECO<br />
      @foreach($usuario12022021->enderecos as $ende)
         
         {{ $ende->endereco}}
         <br />
      @endforeach

      


      <a href='{{route('exibirUsuarioApelido',['para1'=>$usuario12022021->id]) }}'>Editar</a> 
    @endif

    <form name="formdeletar" action="{{ route('deletarUsuarioApelido',['para1'=>$usuario12022021->id]) }}" method="post">
    @csrf
    <input type="submit" name="opcao" id="opcao" value="Excluir"> - 
    </form>
    </li>

@endforeach
</lu>



</body>
</html>