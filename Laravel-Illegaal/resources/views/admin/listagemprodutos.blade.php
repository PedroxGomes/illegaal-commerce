
           @extends('layouts.illegaaltemplate')
           @section('content')
           <div class="row">
             <div class="col-md-12 text-center">
               <h1>Listagem de Produtos</h1>

               <table class="table">
                 <th>
                      <tr>
                        <td scope="col">id</td>
                        <td scope="col">Imagem</td>
                        <td scope="col">Nome</td>
                        <td scope="col">Preço</td>
                        <td scope="col">Açoes</td>
                      </tr>
                 </th>
                 <tbody>
                   @foreach($produtos as $produto)
                   <tr>
                     <td>{{ $produto->id }}</td>
                     <td><img width="80" src="/storage/{{ $produto->CaminhoDaImagem }}" alt=""></td>
                     <td>{{ $produto->NomeDoProduto }}</td>
                     <td>{{ $produto->PrecoUnitario }}</td>
                     <td><a href="excluirproduto/{{ $produto->id }}" class="btn btn-danger">excluir produto</a><a href="editarprodutos/{{ $produto->id }}" class="btn btn-warning">editar produto</a></td>
                   </tr>
                   @endforeach
                 </tbody>
               </table>


             </div>

           </div>
           @endsection
