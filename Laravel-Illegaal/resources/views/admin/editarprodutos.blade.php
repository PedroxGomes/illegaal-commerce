@extends('layouts.illegaaltemplate')
@section('content')
<div class="row">
  <div class="col-md-12 text-center">
    <h1>Editar Produtos</h1>

  </div>
  <div class="col-md-12 text-center">

    <form action="/admin/editarprodutos/{{ $produtos->id}}" method="post">
      @csrf
  <div class="form-group">
    <label for="CodigoProduto">Código do Produto</label>
    <input type="text" class="form-control" id="CodigoProduto" name="CodigoProduto" aria-describedby="CodigoHelper" placeholder="Inserir Codigo" value="{{ $produtos->CodigoProduto}}">
    <small id="CodigoHelper" class="form-text text-muted">Inserir o código do produto.</small>
  </div>
  <div class="form-group">
    <label for="NomeDoProduto">Nome do Produto</label>
    <input type="text" class="form-control" id="NomeDoProduto" name="NomeDoProduto" placeholder="Inserir Nome" value="{{ $produtos->NomeDoProduto }}">
  </div>
  <div class="form-group">
    <label for="CodigoCategoria">Código da Categoria</label>
    <input type="number" class="form-control" id="CodigoCategoria" name="CodigoCategoria" placeholder="Inserir Codigo" value="{{ $produtos->CodigoCategoria}}">
  </div>
  <div class="form-group">
    <label for="QuantidadePorUnidade">Quantidade por Unidade</label>
    <input type="number" class="form-control" id="QuantidadePorUnidade"name="QuantidadePorUnidade" placeholder="Inserir Quantidade" value="{{ $produtos->QuantidadePorUnidade}}">
  </div>
  <div class="form-group">
    <label for="PrecoUnitario">Preço por Unidade</label>
    <input type="number" class="form-control" id="PrecoUnitario" name="PrecoUnitario" placeholder="Inserir Preco" value="{{ $produtos->PrecoUnitario}}">
  </div>
  <div class="form-group">
    <label for="UnidadeEmEstoque">Unidade em Estoque</label>
    <input type="number" class="form-control" id="UnidadeEmEstoque" name="UnidadeEmEstoque" placeholder="Inserir Unidade" value="{{ $produtos->UnidadeEmEstoque}}">
  </div>
  <div class="form-group">
    <label for="UnidadesPedidas">Unidades Pedidas</label>
    <input type="number" class="form-control" id="UnidadesPedidas" name="UnidadesPedidas" placeholder="Inserir Unidades Pedidas" value="{{ $produtos->UnidadesPedidas}}">
  </div>
  <div class="form-group">
    <label for="NivelDeEstoque">Nível de Estoque</label>
    <input type="number" class="form-control" id="NivelDeEstoque" name="NivelDeEstoque" placeholder="Nivel de Estoque" value="{{ $produtos->NivelDeEstoque}}">
  </div>
  <div class="form-group">
    <label for="Descontinuado">Descontinuado</label>
    <input type="number" class="form-control" id="Descontinuado" name="Descontinuado" placeholder="Descontinuado" value="{{ $produtos->Descontinuado}}">
  </div>




  <button type="submit" class="btn btn-primary">Editar Produtos</button>
</form>

  </div>

</div>
@endsection
