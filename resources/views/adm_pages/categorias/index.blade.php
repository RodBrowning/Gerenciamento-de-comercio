@extends('home')

@section('title', 'Categorias')

@section('content')
	
	<div class="col-md-6 text-center">
		<h2 class="">Categorias</h2>
	</div>
	<div class="col-md-6 text-center">				  
		  <a href="{{ route('categoria.create') }}" class="btn btn-secondary mt-1">Nova Categoria</a>				
	</div>
	<div class="col-md-12">
		<hr>													
	</div>	

	<div class="col-md-6 offset-md-3">
		<table class="table table-sm table-striped mt-3">
		  <thead>
		    <tr>
		      <th>Cod.</th>
		      <th>Categoria</th>
		      <th></th>
		      <th></th>				      		      		      
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($categorias as $categoria)
		  		@if($categoria->ativa)
				  	<tr>
					  	<th scope="row">{{$categoria->id}}</th>
					  	<td>{{ ucwords($categoria->categoria) }}</td>
					  	<td><a href="{{ route('categoria.edit',$categoria->id)}}" class="btn btn-secondary btn-sm btn-block">Editar</a></td>
					  	<td>				  		
					  		<a href="{{ route('categoria.delete',$categoria->id) }}" class="btn btn-secondary btn-sm btn-block">Deletar</a>
					  	</td>
					</tr>
				@endif
		  	@endforeach
		  </tbody>		
		</table>
		<div class="center-pagination">
			{{ $categorias->links() }}
		</div>
	</div>

@endsection
