<?php

namespace App\Produtos;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $fillable = [
		'categoria'
	];

    protected $table = 'categorias';

    public function produtos()
    {
    	return $this->hasMany('App\Produto');
    }
}
