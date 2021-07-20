{{$qtd_fotos_post = 3}}

@if ($qtd_fotos_post == 1)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <img class="d-block w-100" src="/img/post/u1/1/4.jpg"  width="100%" height="100%" alt="Lince." /  >
  </div>
</nav>
@endif
 
@if ($qtd_fotos_post == 2)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <img class="d-block w-49" src="/img/post/u1/1/3.jpg"  width="49%" height="49%" alt="Lince." /  >
  <img class="d-block w-49" src="/img/post/u1/1/4.jpg"  width="49%" height="49%" alt="Lince." />
  </div>
</nav>
@endif

@if ($qtd_fotos_post == 3)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <img src="/img/post/u1/1/2.jpg"  width="33%" height="33%" alt="Lince." />
  <img src="/img/post/u1/1/3.jpg"  width="33%" height="33%" alt="Lince." />
  <img src="/img/post/u1/1/4.jpg"  width="33%" height="33%" alt="Lince." />
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f0f0f0;" >
  <div class="container-fluid">
    <div class="row justify-content-md-left">
    <label">Eu nao via perigo, so via beleza</label>
    </div>

    <div class="row left-content-md-left">
    <label">Os 3 pastorinhos de Fatima</label>
    </div>

    <div class="row left-content-md-left">
    <label">Igreja de Nossa  Senhora de Fatima</label>
    </div>
  </div>
</nav>
@endif

@if ($qtd_fotos_post == 4)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <img src="/img/post/u1/1/1.jpg"  width="24%" height="24%" alt="Lince." /  >
  <img src="/img/post/u1/1/2.jpg"  width="24%" height="24%" alt="Lince." />
  <img src="/img/post/u1/1/3.jpg"  width="24%" height="24%" alt="Lince." /  >
  <img src="/img/post/u1/1/4.jpg"  width="24%" height="24%" alt="Lince." />
  </div>
</nav>
@endif

@if ($qtd_fotos_post == 5)
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <img src="/img/post/u1/1/1.jpg"  width="19%" height="19%" alt="Lince." /  >
  <img src="/img/post/u1/1/2.jpg"  width="19%" height="19%" alt="Lince." />
  <img src="/img/post/u1/1/3.jpg"  width="19%" height="19%" alt="Lince." /  >
  <img src="/img/post/u1/1/4.jpg"  width="19%" height="19%" alt="Lince." />
  <img src="/img/post/u1/1/1.jpg"  width="19%" height="19%" alt="Lince." />
  </div>
</nav>
@endif
