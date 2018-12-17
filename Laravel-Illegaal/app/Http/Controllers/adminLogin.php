<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\produto;

class adminLogin extends Controller
{
    public function home(Request $r){
       if ($r-> isMethod('get')){

         return view('admin.homeAdmin');
       }
     }

    public function listagemprodutos(Request $r){
         if ($r-> isMethod('get')){
            $produto = produto::All();
           return view('admin.listagemprodutos',['produtos'=>$produto]);
         }
       }

   public function cadastrarprodutos(Request $r){
      if ($r-> isMethod('get')){
        return view('admin.cadastroproduto');
      }
      $produto=new produto();
      $produto->CodigoProduto = $r->input('CodigoProduto');
      $produto->NomeDoProduto = $r->input('NomeDoProduto');
      $produto->CodigoCategoria = $r->input('CodigoCategoria');
      $produto->QuantidadePorUnidade = $r->input('QuantidadePorUnidade');
      $produto->PrecoUnitario = $r->input('PrecoUnitario');
      $produto->UnidadeEmEstoque = $r->input('UnidadeEmEstoque');
      $produto->UnidadesPedidas = $r->input('UnidadesPedidas');
      $produto->NivelDeEstoque = $r->input('NivelDeEstoque');
      $produto->Descontinuado = $r->input('Descontinuado');
      $nome = $r->file('ImagemDoProduto')->store('public/img');
      $produto->CaminhoDaImagem = str_replace('public/','',$nome);
      $produto->save();

      return 'cadastro com sucesso!';

      }
    public function editarprodutos($id,Request $r){
       if ($r-> isMethod('get')){
         $produto=produto::find($id);
         return view('admin.editarprodutos', ['produtos'=>$produto]);
       }

       $produto=produto::find($id);
       $produto->CodigoProduto = $r->input('CodigoProduto');
       $produto->NomeDoProduto = $r->input('NomeDoProduto');
       $produto->CodigoCategoria = $r->input('CodigoCategoria');
       $produto->QuantidadePorUnidade = $r->input('QuantidadePorUnidade');
       $produto->PrecoUnitario = $r->input('PrecoUnitario');
       $produto->UnidadeEmEstoque = $r->input('UnidadeEmEstoque');
       $produto->UnidadesPedidas = $r->input('UnidadesPedidas');
       $produto->NivelDeEstoque = $r->input('NivelDeEstoque');
       $produto->Descontinuado = $r->input('Descontinuado');
       $produto->save();

      return redirect('admin/listagemprodutos');

     }

     public function excluirproduto($id,Request $r){
       $produto=produto::find($id);
       $produto->delete();
       return redirect('admin/listagemprodutos');
     }
     public function cadastrocliente(Request $r){
        if ($r-> isMethod('get')){
          return view('admin.cadastrocliente');


        }
        $produto=new produto();
        $produto->CodigoProduto = $r->input('CodigoProduto');
        $produto->NomeDoProduto = $r->input('NomeDoProduto');
        $produto->CodigoCategoria = $r->input('CodigoCategoria');
        $produto->QuantidadePorUnidade = $r->input('QuantidadePorUnidade');
        $produto->PrecoUnitario = $r->input('PrecoUnitario');
        $produto->UnidadeEmEstoque = $r->input('UnidadeEmEstoque');
        $produto->UnidadesPedidas = $r->input('UnidadesPedidas');
        $produto->NivelDeEstoque = $r->input('NivelDeEstoque');
        $produto->Descontinuado = $r->input('Descontinuado');
      }
    }
