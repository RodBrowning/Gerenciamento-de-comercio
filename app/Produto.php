<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categories()
    { 
    	//segundo argumento coluna na tabela 'produtos'
    	//terceiro argumento colune na tabela 'categorias'
    	return $this->belongsTo('App\Produtos\Categoria','categoria_id', 'id' );
    }
}
