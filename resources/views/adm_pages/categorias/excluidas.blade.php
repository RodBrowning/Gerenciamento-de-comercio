@extends('home')

@section('title', 'Categorias Excluidas')

@section('content')
	
	<div class="col-md-6 text-center">
		<h2 class="">Categorias Excluidas</h2>
	</div>
	<div class="col-md-6 text-center">
		<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="{{ route('categoria.index') }}" class="btn btn-secondary mt-1">Categorias</a>	
		</div>					
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
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($excluidas as $excluida)
		  		@if(!$excluida->ativa)
				  	<tr>
					  	<th scope="row">{{$excluida->id}}</th>
					  	<td>{{ ucwords($excluida->categoria) }}</td>
					  	<td><a href="{{ route('categoria.restaurar',$excluida->id)}}" class="btn btn-success btn-sm btn-block">Restaurar</a></td>					  	
					</tr>
				@endif
		  	@endforeach
		  </tbody>		
		</table>
		<div class="center-pagination">
			{{ $excluidas->links() }}
		</div>
	</div>

@endsection
