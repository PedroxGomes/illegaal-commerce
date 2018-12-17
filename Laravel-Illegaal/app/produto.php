<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
  //


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'CodigoProduto', 'NomeDoProduto','CodigoCategoria', 'QuantidadePorUnidade',
      'PrecoUnitario', 'UnidadeEmEstoque', 'UnidadesPedidas', 'NivelDeEstoque', 'Descontinuado', 'CaminhoDaImagem'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];

}
