<?php

namespace App\Http\Controllers;
use App\produto;
use Illuminate\Http\Request;

class produtoController extends Controller
{
  public function listarprodutos(Request $r){
    $produto = produto::All();
    return view('site.produtos',['produtos'=>$produto]);
  }

  public function addProduto($id, Request $r){
    if($r->session()->has('carrinho')){
      $section = $r->session()->get('carrinho');
      $produto = produto::find($id);
      $section[]= $produto;
      $r->session()->put('carrinho', $section);
    }else {
      $produto = produto::find($id);
      $array[]=$produto;
      $section =$r->session()->put('carrinho', $array);
    }
  return redirect('carrinho');
  }

  public function listarCarrinho(Request $r){
    $produto = $r->session()->get('carrinho');

    return view('site.carrinho', ['produtos'=>$produto]);
  }
  public function deletarCarrinho(Request $r){
    $produto = $r->session()->flush('carrinho');
    return view('site.carrinho', ['produtos'=>$produto]);
  }
}
