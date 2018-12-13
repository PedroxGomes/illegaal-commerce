@extends('layouts.illegaaltemplate')
@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Cadastro de Produtos</h1>

  </div>
  <div class="col-md-12 text-center">
    <form>
  <div class="form-group">
    <label for="nomeProdutos">Nome do Produto</label>
    <input type="text" class="form-control" id="nomeProdutos" aria-describedby="produtoHelper" placeholder="Inserir Produto">
    <small id="produtoHelper" class="form-text text-muted">Cadastrar produtos com o nome correto.</small>
  </div>
  <div class="form-group">
    <label for="precoProduto">Preço do Produto</label>
    <input type="number" class="form-control" id="precoProduto" placeholder="Inserir Preço">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>

  </div>

</div>
@endsection
