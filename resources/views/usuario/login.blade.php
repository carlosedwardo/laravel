<!-- Modal Login -->
<div class="modal fade" id="modalLogin" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Entrar na area do cliente / Login</h4>
      </div>

      <form action="{{route('inserirUsuarioApelido')}}" method="post">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputUsuario">Usuario</label>
            <input type="text" class="form-control" id="form_usuario" name="form_usuario" required="" aria-describedby="UsuarioHelp" placeholder="Digite o nome do usuario">
            <small id="UsuarioHelp" class="form-text text-muted">Digite o nome do usuario que sera utilizado para logar no sistema.</small>
          </div>

          <div class="form-group">
            <label for="exampleInputSenha">Senha</label>
            <input type="text" class="form-control" id="form_senha" name="form_senha" required="" aria-describedby="SenhaHelp" placeholder="Digite sua senha ja cadastrada">
            <small id="SenhaHelp" class="form-text text-muted">Digite sua senha. Ela foi formada do minimo 8 caracteres (Letras e numeros).</small>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-default">Entrar</button>
        </div>
      </form>

    </div>

  </div>
</div>
