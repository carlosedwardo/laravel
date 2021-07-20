<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h2>Opcoes</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cadastrar</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Lembrar senha</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Cadastro de Usuario</h4>
            </div>

            <form action="{{route('inseriraUsuarioApelido')}}" method="post">
                @csrf

                <div class="modal-body">
                    <div class="form-group">
                    <label for="exampleInputCidade1">Usuario</label>
                    <input type="text" class="form-control" id="form_usuario" name="form_usuario" required="" aria-describedby="UsuarioHelp" placeholder="Digite o nome do usuario">
                    <small id="UsuarioHelp" class="form-text text-muted">Digite o nome do usuario que sera utilizado para logar no sistema.</small>
                    </div>
                </div>

                <div class="modal-footer">
                <button type="submit" class="btn btn-default">Continuar...</button>
                </div>

            </form>    


        </div>

    </div>
  </div>
  
</div>

</body>
</html>


