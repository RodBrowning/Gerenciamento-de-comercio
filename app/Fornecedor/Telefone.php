<?php

namespace App\Fornecedor;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones_fornecedores';

    public function fornecedor()
    {
    	return $this->belongsTo('App\Fornecedor\Fornecedor', 'fornecedor_id', 'id');
    }
}
