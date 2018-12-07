@extends('layouts.illegaaltemplate')
@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Cadastro de Clientes</h1>

  </div>
  <div class="col-md-12 text-center">
    <form>
  <div class="form-group">
    <label for="editarCliente">Editar Clientes</label>
    <input type="text" class="form-control" id="editarCliente" aria-describedby="editarHelper" placeholder="Editar Cliente">
    <small id="editarHelper" class="form-text text-muted">Editar os clientes.</small>
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
</form>

  </div>

</div>
@endsection
