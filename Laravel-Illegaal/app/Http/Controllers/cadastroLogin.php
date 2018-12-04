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
         $Cep = $r->input("Cep");
         $Telefone = $r->input("Telefone");
         $Data_De_Nascimento = $r->input("Data_De_Nascimento");
        

        
         $cadastro = DB::insert('insert into clientes (nome_completo, email, senha, Cep, Telefone, Data_De_Nascimento ) values (?, ?, ?,?,?,?,?)', [$nome, $email, $password, $Telefone, $Cep, $DataDeNascimento]);
         
           return redirect('/illegaal'); 
    }     

}


