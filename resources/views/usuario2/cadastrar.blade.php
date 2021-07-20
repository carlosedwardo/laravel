  <!-- Modal Cadastro de usuario -->
  <div class="modal fade" id="modalCadastroUsuario" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastro de Usuario</h4>
        </div>

        <form action="{{route('inserirUsuarioApelido')}}" method="post">
            @csrf

            <div class="modal-body">
              <div class="form-group">
              <label for="exampleInputUsuario1">Usuario</label>
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
