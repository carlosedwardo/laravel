
  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <form action="{{route('inserirPostApelido')}}" method="post">
            @csrf
            <div class="container">
               <h2>Novo Post</h2>
            </div> 


            <div class="form-group">
                <label for="exampleInputPost1">Titulo do Post</label>
                <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="PostHelp" placeholder="Digite o titulo do post">
                <small id="PostHelp" class="form-text text-muted">Voce podera alterar o titulo a qualquer momento.</small>
            </div>
            



            <div class="form-group">
                <textarea id="w3review" name="w3review" rows="10" cols="150" class="form-control" placeholder="Digite o post"></textarea>
                <small id="PostHelp" class="form-text text-muted">Voce podera alterar, ativar e desativar o post a qualquer momento.</small>
            </div>

            <button type="submit" class="btn btn-primary">Criar Post</button>
            </form>

        </div>
    </nav>
    </div>

