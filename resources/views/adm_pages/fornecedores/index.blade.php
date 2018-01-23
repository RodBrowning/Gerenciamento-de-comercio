@extends('home')

@section('title', 'Forenecedores')

@section('content')
	<div class="col-md-6 text-center">
				<h2 class="black-font">Fornecedores</h2>
			</div>
			<div class="col-md-6 text-center">
				<div class="btn-group" role="group" aria-label="Basic example">
				  <a href="{{ route('fornecedor.create') }}" class="btn btn-secondary mt-1">Cadastrar fornecedor</a>
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
				      <th>Fornecedor</th>
				      <th></th>		      
				    </tr>
				  </thead>
				  <tbody>
				  	 	@foreach($fornecedores as $fornecedor)						  	
						  		<tr>
							      <th scope="row">{{$fornecedor->id}}</th>
							      <td>{{$fornecedor->name}}</td>			      
							      <td>
							      	<a href="{{ route('fornecedor.show',$fornecedor->id)}}" class="btn btn-secondary btn-sm">Ver</a>
							      </td>				      
							    </tr>
					  	@endforeach
				  </tbody>
				</table>
				<div class="center-pagination">
					{!! $fornecedores->links() !!}
				</div>
			</div>
	
@endsection