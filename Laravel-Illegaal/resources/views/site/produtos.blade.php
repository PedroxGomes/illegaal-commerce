@extends("site.template")
@section("content")

<div class="container">
  <div class="row">
    @foreach($produtos as $produto)
      <div class="col-lg-4 text-center">
          <div class="img_Produto">
              <img class="" src="/storage/{{ $produto->CaminhoDaImagem }}" style="width:30%">
          </div>
          <div class="conteudo text-white">
              <p>{{$produto->NomeDoProduto}}</p>
              <p>R${{$produto->PrecoUnitario}}</p>
          </div>
          <div class="comprar">
              <a class="btn btn-success" href="addproduto/{{$produto->id}}">COMPRAR</a>
          </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
