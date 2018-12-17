@extends('layouts.illegaaltemplate')
@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Cadastro de Clientes</h1>

    <form>
  <div class="form-group">
    <label for="CodigodoCliente">Código do Cliente</label>
    <input type="text" class="form-control" id="CodigodoCliente" name="CodigodoCliente" aria-describedby="ClienteHelper" placeholder="Inserir Codigo">
    <small id="ClienteHelper" class="form-text text-muted">Inserir o código do cliente.</small>
  </div>
  <div class="form-group">
    <label for="Endereco">Endereço do cliente</label>
    <input type="number" class="form-control" id="Endereco" name="Endereco" placeholder="Endereco">
  </div>
  <div class="form-group">
    <label for="Cidade">Inserir a cidade</label>
    <input type="number" class="form-control" id="Cidade" name="Cidade" placeholder="Inserir a cidade">
  </div>
  <div class="form-group">
    <label for="Cep">Inserir o CEP do cliente</label>
    <input type="number" class="form-control" id="Cep" name="Cep" placeholder="Inserir CEP">
  </div>
  <div class="form-group">
    <label for="PrecoUnitario">Preço por Unidade</label>
    <input type="number" class="form-control" id="PrecoUnitario" name="PrecoUnitario" placeholder="Inserir Preco">
  </div>
  <div class="form-group">
    <label for="UF">Inserir Estado</label>
    <input type="number" class="form-control" id="UF" name="UF" placeholder="Inserir Estado">
  </div>
  <div class="form-group">
    <label for="UnidadesPedidas">Unidades Pedidas</label>
    <input type="number" class="form-control" id="UnidadesPedidas" name="UnidadesPedidas" placeholder="Inserir Unidades Pedidas">
  </div>
  <div class="form-group">
    <label for="Pais">Inserir País</label>
    <input type="number" class="form-control" id="Pais" name="Pais" placeholder="Pais">
  </div>
  <div class="form-group">
    <label for="Telefone">Inserir telefone</label>
    <input type="number" class="form-control" id="Telefone" name="Telefone" placeholder="Telefone">
  </div>
  <div class="form-group">
    <label for="email">Inserir e-mail</label>
    <input type="number" class="form-control" id="email" name="email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="password">Inserir password</label>
    <input type="number" class="form-control" id="password" name="password" placeholder="password">
  </div>
  <div class="form-group">
    <label for="name">Inserir nome</label>
    <input type="number" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="remenber_token">Inserir token</label>
    <input type="number" class="form-control" id="remenber_token" name="remenber_token" placeholder="remenber_token">
  </div>
  <div class="form-group">
    <label for="created_at">Created_at</label>
    <input type="number" class="form-control" id="created_at" name="created_at" placeholder="created_at">
  </div>
  <div class="form-group">
    <label for="updated_at">Updated_at</label>
    <input type="number" class="form-control" id="updated_at" name="updated_at" placeholder="updated_at">
  </div>
  <div class="form-group">
    <label for="email_verfied_at">Email_verfied_at</label>
    <input type="number" class="form-control" id="email_verfied_at" name="email_verfied_at" placeholder="email_verfied_at">
  </div>

  <button type="submit" class="btn btn-primary">Editar Cliente</button>
</form>

  </div>

</div>
@endsection
