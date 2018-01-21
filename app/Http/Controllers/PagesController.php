<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

    	return view('pages.index');
    }

    public function estoque(){
    	return view('pages.estoque');
    }

    public function vendas(){
    	return view('pages.vendas');
    }

    public function compras(){
    	return view('pages.compras');
    }

    public function produtos(){

        $produtos = Produto::orderBy('categoria_id','asc')->paginate(15);
        return view('pages.produtos')->withProdutos($produtos);
    }
}
