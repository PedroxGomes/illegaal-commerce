@extends('layouts.illegaaltemplate')
@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Cadastro de Clientes</h1>

  </div>
  <div class="col-md-12 text-center">
    <form>
  <div class="form-group">
    <label for="cadastroCliente">Cadastro de Clientes</label>
    <input type="text" class="form-control" id="cadastroCliente" aria-describedby="clienteHelper" placeholder="Cadastrar Cliente">
    <small id="clienteHelper" class="form-text text-muted">Cadastrar os clientes.</small>
  </div>
  <div class="form-group">
    <label for="nomeCliente">Nome do cliente</label>
    <input type="text" class="form-control" id="nomeCliente" placeholder="Nome Cliente">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
</form>

  </div>

</div>
@endsection
