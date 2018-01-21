@extends('home')

@section('title', 'Produtos')

@section('content')
	
			<div class="col-md-10 offset-md-1 text-center">
				<h1 class="black-font">Produtos Cadastrados</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Produto</th>
				      <th>Marca</th>
				      <th>Categoria</th>
				      <th>Descrição</th>
				      <th>Valor de Venda</th>				      
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($produtos as $produto)
					    <tr>
					      <th scope="row">{{ $produto->id }}</th>
					      <td>{{ $produto->name }}</td>
					      <td>{{ $produto->marca }}</td>
					      <td>{{ $produto->categories->categoria }}</td>
					      <td>{{ $produto->descricao }}</td>
					      <td>{{ isset($produto->valor_venda) ? $produto->valor_venda : "Valor Não informado"}}</td>
					    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
			<div class="center-pagination">
				{!! $produtos->links() !!}				
			</div>
		
@endsection