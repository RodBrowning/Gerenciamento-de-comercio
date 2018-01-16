<?php

namespace App\Http\Controllers;

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
        return view('pages.produtos');
    }
}
