<?php

namespace App\Http\Controllers\Fornecedores;

use App\Fornecedor\Fornecedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedor::orderBy('id')->paginate(25);
        return view('adm_pages.fornecedores.index')->withFornecedores($fornecedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornecedor\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        // Codigo para mostar os numeros de telefone separados por slash /
        // Aqui se houver telefone ele coloca no array $phone ja no formato de exibição.
        if(count($fornecedor->telefones) > 0){
            for ($i=0; $i <count($fornecedor->telefones) ; $i++) {
                // Caso numero seja celular usar esta exibição
                if(strlen($fornecedor->telefones[$i]->numero_telefone) >= 9){ 
                    $phone[$i] = preg_replace('/(\d{1})(\d{4})(\d{4})/','$1-$2-$3', $fornecedor->telefones[$i]->numero_telefone);
                }
                // Caso numero seja fixo usar esta exibição
                else{
                    $phone[$i] = preg_replace('/(\d{4})(\d{4})/','$1-$2', $fornecedor->telefones[$i]->numero_telefone);
                }
            }
            // Aqui a função join concatena tudo com /
            $tel = join(' / ', $phone);
            return view('adm_pages.fornecedores.show')->withFornecedor($fornecedor)->withTelefone($tel);
        }else{
            // Caso nao haja telefones apenas informas que não foi encontrado.
            $tel = "Numero não encontrado.";
            return view('adm_pages.fornecedores.show')->withFornecedor($fornecedor)->withTelefone($tel);
        }
        
        
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedor\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedor\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedor\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
        //
    }
}
