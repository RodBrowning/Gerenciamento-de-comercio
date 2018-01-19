@extends('home')

@section('title', 'Produtos')

@section('content')
				
				<div class="col-md-6 text-center">
					<h1 class="">Produtos</h1>
				</div>
				<div class="col-md-6 text-center">
					<a href="{{ route('produto.create') }}" class="btn btn-primary mt-1">Cadastrar produto</a>	
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
					      	<!--Este codigo exibe a categoria relacionada quando darem mach-->
					      	@foreach($categorias as $categoria)
					      		@if($categoria->id == $produto->categoria)
					      			{{ ucfirst($categoria->categoria) }}
					      		@endif
					      	@endforeach
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