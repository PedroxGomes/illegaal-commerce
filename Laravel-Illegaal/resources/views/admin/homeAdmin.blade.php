@extends('layouts.illegaaltemplate')
@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Home do Admin</h1>
    <form>
  <div class="form-group">
    <label for="CodigoProduto">Código do Produto</label>
    <input type="text" class="form-control" id="CodigoProduto" name="CodigoProduto" aria-describedby="CodigoHelper" placeholder="Inserir Codigo">
    <small id="CodigoHelper" class="form-text text-muted">Inserir o código do produto.</small>
  </div>
  <div class="form-group">
    <label for="NomeDoProduto">Nome do Produto</label>
    <input type="number" class="form-control" id="NomeDoProduto" name="NomeDoProduto" placeholder="Inserir Nome">
  </div>
  <div class="form-group">
    <label for="CodigoCategoria">Código da Categoria</label>
    <input type="number" class="form-control" id="CodigoCategoria" name="CodigoCategoria" placeholder="Inserir Codigo">
  </div>
  <div class="form-group">
    <label for="QuantidadePorUnidade">Quantidade por Unidade</label>
    <input type="number" class="form-control" id="QuantidadePorUnidade" name="QuantidadePorUnidade" placeholder="Inserir Quantidade">
  </div>
  <div class="form-group">
    <label for="PrecoUnitario">Preço por Unidade</label>
    <input type="number" class="form-control" id="PrecoUnitario" name="PrecoUnitario" placeholder="Inserir Preco">
  </div>
  <div class="form-group">
    <label for="UnidadeEmEstoque">Unidade em Estoque</label>
    <input type="number" class="form-control" id="UnidadeEmEstoque" name="UnidadeEmEstoque" placeholder="Inserir Unidade">
  </div>
  <div class="form-group">
    <label for="UnidadesPedidas">Unidades Pedidas</label>
    <input type="number" class="form-control" id="UnidadesPedidas" name="UnidadesPedidas" placeholder="Inserir Unidades Pedidas">
  </div>
  <div class="form-group">
    <label for="NivelDeEstoque">Nível de Estoque</label>
    <input type="number" class="form-control" id="NivelDeEstoque" name="NivelDeEstoque" placeholder="Nivel de Estoque">
  </div>
  <div class="form-group">
    <label for="Descontinuado">Descontinuado</label>
    <input type="number" class="form-control" id="Descontinuado" name="Descontinuado" placeholder="Descontinuado">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
</form>
  </div>
</div>
@endsection
