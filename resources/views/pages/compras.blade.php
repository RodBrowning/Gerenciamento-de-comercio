@extends('home')

@section('title', 'Compras')

@section('content')
	
			<div class="col-md-10 offset-md-1 text-center">
				<h1>Detalhes de Compras</h1>
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
				      <th>Fornecedor</th>
				      <th>Data</th>
				      <th>Val. Unid.</th>
				      <th>Quant.</th>				      
				      <th>Val. Total</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Seda Smiking Black c/ Filtro</td>
				      <td>Smiking Brasil</td>
				      <td>Seda</td>
				      <td>Chileno da 25 de março</td>
				      <td>24/10/2018</td>
				      <td>R$ 50,00</td>
				      <td>3</td>
				      <td>R$ 150,00</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Otto clabl</td>
				      <td>Mark</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>Mark</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		

@endsection