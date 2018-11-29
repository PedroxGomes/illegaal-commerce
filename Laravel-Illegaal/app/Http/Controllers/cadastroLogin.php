<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cadastroLogin extends Controller
{
  
    public function cadastrar(Request $r){
         $nome = $r->input("nome");
         $email = $r->input("email");
         $password = password_hash($r->input("senha"),PASSWORD_DEFAULT);
         $passwordconfirm = $r->input("senha2");

        
         $cadastro = DB::insert('insert into clientes (nome_completo, email, senha) values (?, ?, ?)', [$nome, $email, $password]);
         
           return redirect('/illegaal'); 
    }     


    /*public function login(Request $r) {
        $nome = $r->input("nome");
        $password = $r->input("senha");

    }*/
}


