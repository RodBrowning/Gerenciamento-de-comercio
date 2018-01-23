<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function categories()
    { 
    	//Caso a coluna category tenha sido especificada como foreign deve ser adicionadas as colunas relacionadas.
    	//2º argumento coluna nesta tabela, "categoria_id", e sua refêrencia na tabela de destino, "id", respectivamente.
    	//Se a coluna 'categoria_id' for adicionada apos a criação deste model o mesmo deve ser recriado.

    	return $this->belongsTo('App\Produtos\Categoria','categoria_id', 'id' );
    }
}
