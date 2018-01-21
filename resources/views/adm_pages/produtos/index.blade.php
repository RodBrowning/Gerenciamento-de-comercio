@extends('home')

@section('title', 'Produtos')

@section('content')
				
			<div class="col-md-6 text-center">
				<h2 class="black-font">Produtos</h2>
			</div>
			<div class="col-md-6 text-center">
				<div class="btn-group" role="group" aria-label="Basic example">
				  <a href="{{ route('produto.create') }}" class="btn btn-secondary mt-1">Cadastrar produto</a>
				  <a href="{{ route('categoria.index') }}" class="btn btn-secondary mt-1">Categorias</a>		
				</div>					
			</div>	
			<div class="col-md-12">
				<hr>													
			</div>			
			<div class="col-md-8 offset-md-2">
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>Cod.</th>
				      <th>Produto</th>
				      <th>Marca</th>
				      <th>Categoria</th>				      
				      <th></th>				      
				    </tr>
				  </thead>
				  <tbody>
				  	 	@foreach($produtos as $produto)						  	
						  		<tr>
							      <th scope="row">{{$produto->id}}</th>
							      <td>{{$produto->name}}</td>
							      <td>
							      	{{ isset($produto->marca) ? $produto->marca : '---' }}
							      </td>
							      <td>
							      	{{ ucfirst($produto->categories->categoria) }}
							      </td>					      
							      <td>
							      	<a href="{{ route('produto.show',$produto->id)}}" class="btn btn-secondary btn-sm">Ver</a>
							      </td>				      
							    </tr>
					  	@endforeach
				  </tbody>
				</table>
				<div class="center-pagination">
				{!! $produtos->links()!!}
				</div>
			</div>
	
@endsection