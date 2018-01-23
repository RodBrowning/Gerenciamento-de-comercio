@extends('home')

@section('title', 'Categorias')

@section('stylesheet')
	{!! Html::style('css/produtos.css')!!}
@endsection

@section('content')
	
	<div class="col-md-7 offset-md-1 text-center">
		<h2 class="black-font">Categorias</h2>
	</div>
	<div class="col-md-4 text-center">
		<div class="btn-group" role="group" aria-label="Basic example">
		  <a href="{{ route('produto.index') }}" class="btn btn-secondary mt-1">Produtos</a>		  
		  <a href="{{ route('categoria.excluidas') }}" class="btn btn-secondary mt-1">Categorias excluidas</a>			
		</div>					
	</div>
	<div class="col-md-12">
		<hr>													
	</div>	

	<div class="col-md-7 offset-md-1">
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
					  	<td><a href="{{ route('categoria.edit',$categoria)}}" class="btn btn-secondary btn-sm btn-block">Editar</a></td>
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
	<div class="col-md-4">
		<div class="card card-default p-3 mt-3">
			<div>
				<h2>Adicionar categoria</h2>
				<hr>
			</div>
			{!! Form::open(['route'=>'categoria.store', 'method'=>'POST']) !!}
				{{ Form::label('categoria', 'Categoria:',['class'=>'font-weight-bold']) }}
				{{ Form::text('categoria', null,['class'=>'form-control'])}}

				{{ Form::submit('Criar',['class'=>'btn btn-primary btn-block mt-3'])}}
			{!! Form::close() !!}
		</div>
		
	</div>

@endsection
