<?php

namespace App\Http\Controllers\ProdutosController\CategoriasController;

use App\Produtos\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('categoria', 'asc')->paginate(20);
        return view('adm_pages.categorias.index')->withCategorias($categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm_pages.categorias.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate data

        $this->validate($request,array(

            'categoria' => 'required|min:2|max:255'

        ));

        //Store data

        $categoria = new Categoria;
        $categoriaFormatada = strtolower($request->categoria);
        $categoria->categoria = $categoriaFormatada;

        $categoria->save();

        //Set success message
        $nomeCategoria = ucwords($categoria->categoria);
        Session::flash('success', "Categoria $nomeCategoria foi salva com sucesso");

        //Redirect to show page
        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }

    /**
     * Apenas deia a categoria inativa para novos cadastros e atualzações.
     * Metodo update.
    */
     public function deletar($id)
    {
        $deletar = Categoria::find($id);

        $deletar->ativa = false;       

        $deletar->update();

        $excluida = ucwords($deletar->categoria);

        Session::flash('success',"'A categoria $excluida foi excluida com sucesso.'");

        return redirect()->route('categoria.index');
        


    }
}
