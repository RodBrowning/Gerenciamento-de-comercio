@extends('home')

@section('title', 'Estoque')

@section('content')
	
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-10 offset-md-1 text-center">
						<h1 class="black-font">Balanço de Estoque</h1>
						<hr>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-md-12">						
						<table class="table table-sm table-striped mt-3">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>Produto</th>
						      <th>Marca</th>
						      <th>Categoria</th>
						      <th>Estoque</th>
						      <th>Status</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						      <td class="bg-success">Disponivel</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Mark</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						      <td class="bg-warning">Comprar</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Larry</td>
						      <td>Mark</td>
						      <td>the Bird</td>
						      <td>@twitter</td>
						      <td class="bg-success">Disponivel</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		
@endsection