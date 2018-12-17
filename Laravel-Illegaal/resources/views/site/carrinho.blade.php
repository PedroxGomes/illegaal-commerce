@extends("site.template")
@section("content")

<div class="container">
  <div class="row">
      <div class="col-lg-12">
        <h2 class="text-white">Carrinho</h2>
      </div>

      @if(!empty($produtos))
      @foreach($produtos as $produto)
      <div class="col-lg-12 d-flex bk-carrinhos">
          <div class=" align-self-center">
              <img class="" src="/storage/{{ $produto['CaminhoDaImagem'] }}" style="width:100px">
          </div>
          <div class="conteudo text-white flex-fill align-self-center">
              <p>{{$produto['NomeDoProduto']}}</p>
              <p>R${{$produto['PrecoUnitario']}}</p>
          </div>
          <div class="comprar flex-fill align-self-center">
              <a class="btn btn-success" href="addproduto/">FINALIZAR</a>
          </div>
      </div>
      @endforeach
      <div>
          <a class="btn btn-danger" href="deletarCarrinho"> LIMPAR CARRINHO</a>
            <a class="btn btn-success" href="produtos"> CONTINUAR COMPRANDO</a>
      </div>
      @else
        <h4 class="text-white">Desculpe, carrinho vazio!</h4>
      </br>
          <a class="btn btn-success" href="produtos"> IR AS COMPRAS</a>
      @endif


  </div>
</div>


@endsection
