<?php

namespace App\Http\Controllers\ProdutosController\CategoriasController;

use App\Produtos\Categoria as Categoria;
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

            'categoria' => 'required|min:2|max:255|unique:categorias,categoria'

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categ = Categoria::find($id);
        return view('adm_pages.categorias.editar')->withCategoria($categ);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $categoria = Categoria::find($id);

         if($categoria->categoria != $request->input('categoria')){
            
            $this->validate($request,array(
               
                'categoria' => 'required|min:2|max:255|unique:categorias,categoria'
                
            ));
        }

        $categoria = Categoria::find($id);

        $velhoNome = ucwords($categoria->categoria);

        $categoria->categoria = $request->input('categoria');

        $nome = ucwords($categoria->categoria);

        $categoria->update();

        

        Session::flash('success',"A categoria - $velhoNome - foi atualizada para - $nome - com sucesso.");

        return redirect()->route('categoria.index');
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

    public function excluidas(){

        $excluidas = Categoria::orderBy('categoria','asc')->paginate(15);

        return view('adm_pages.categorias.excluidas')->withExcluidas($excluidas);
    }

    public function restaurar($id){

        $restaurar = Categoria::find($id);

        $restaurar->ativa = true;

        $restaurar->update();

        $restaurado = ucwords($restaurar->categoria);

        Session::flash('success', "A categoria $restaurado foi restaurada con sucesso.");

        return redirect()->route('categoria.excluidas');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produtos\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
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

}
