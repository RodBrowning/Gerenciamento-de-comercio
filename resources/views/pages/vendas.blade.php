@extends('home')

@section('title', 'Vendas')

@section('content')
	
			<div class="col-md-10 offset-md-1 text-center">
				<h1 class="black-font">Detalhes de Vendas</h1>
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
				      <th>Quant.</th>
				      <th>Valor</th>
				      <th>Data</th>
				      <th>Vendedor</th>
				      <th>Comissão</th>
				      <th>Lucro</th>
				      <th>%</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				      <td>Otto</td>
				    </tr>
				  </tbody>
				</table>
			</div>
		

@endsection