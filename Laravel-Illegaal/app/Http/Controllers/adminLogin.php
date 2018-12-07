<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminLogin extends Controller
{
    public function home(Request $r){
       if ($r-> isMethod('get')){
         return view('homeAdmin');
       }
     }

    public function listagemprodutos(Request $r){
         if ($r-> isMethod('get')){
           return view('listagemprodutos');
         }
       }

   public function cadastrarprodutos(Request $r){
      if ($r-> isMethod('get')){
        return view('cadastroproduto');
      }
    }
    public function editarprodutos(Request $r){
       if ($r-> isMethod('get')){
         return view('editarprodutos');
       }
     }
     public function cadastrocliente(Request $r){
        if ($r-> isMethod('get')){
          return view('cadastrocliente');


        }
      }
    }
