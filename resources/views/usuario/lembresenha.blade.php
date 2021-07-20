  <!-- Modal Lembrete de senha -->
  <div class="modal fade" id="modalLembreteSenha" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lembrete de senha</h4>
        </div>

        <form action="{{route('inserirUsuarioApelido')}}" method="post">
            @csrf

            <div class="modal-body">
              <div class="form-group">
              <label for="exampleInputCidade1">E-mail</label>
              <input type="text" class="form-control" id="form_usuario" name="form_usuario" required="" aria-describedby="EmailHelp" placeholder="Digite seu e-mail, cadastrado.">
              <small id="EmailHelp" class="form-text text-muted">Digite seu e-mail para receber uma mensagem na sua caixa. Verifique a caixa Spam tambem.</small>
              </div>
            </div>

            <div class="modal-footer">
            <button type="submit" class="btn btn-default">Enviar e-mail</button>
            </div>
        </form>

      </div>

    </div>
  </div>
