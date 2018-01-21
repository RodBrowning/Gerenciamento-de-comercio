<?php

namespace App\Fornecedor;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{

	protected $table = 'fornecedores';

    public function telefones()
    {
    	return $this->hasMany('App\Fornecedor\Telefone');
    }
}
