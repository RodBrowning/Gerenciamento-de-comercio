@extends('home')

@section('title', 'Pagina inicial')

@section('content')
	
			<div class="col-md-10 offset-md-1 text-center">
				<h1 class="black-font">Resumo Geral</h1>
				<hr>
			</div>
		</div>
		<div class="row">

			<div class="col-md-4 mt-5">
				<h3>Total de Compras</h3>
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>#</th>				      
				      <th>Mês</th>
				      <th>Total</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>				      
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>				      
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>				      
				      <td>@twitter</td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="col-md-4 mt-5">			
				<h3>Total de Vendas</h3>
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Mês</th>
				      <th>Total</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>				      
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>				      
				    </tr>
				  </tbody>
				</table>
			</div>
			
			<div class="col-md-4 mt-5">
				<h3>Total de Lucros</h3>
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Mês</th>
				      <th>Total</th>
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
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				      <td>Otto</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				      <td>Otto</td>
				    </tr>
				  </tbody>
				</table>
			</div>

		</div>

		<div class="row">
			
			<div class="col-md-6 mt-5">
				<h3>Produtos com estoque em baixa</h3>
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Produto</th>
				      <th>Quant. Min.</th>
				      <th>Em estoque</th>
				      <th>Status</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td class="table-warning">Comprar</td>
				    </tr>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
				      <td>@mdo</td>
				      <td class="table-warning">Comprar</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>@fat</td>
				      <td colspan="table-active">Sem estoque</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				      <td class="table-active">Sem estoque</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>@twitter</td>
				      <td class="table-active">Sem estoque</td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="col-md-6 mt-5">
				<h3>Ultimos Pagamentos</h3>
				<table class="table table-sm table-striped mt-3">
				  <thead>
				    <tr>
				      <th>#</th>
				      <th>Vendedor</th>
				      <th>Mês</th>
				      <th>Nº Vendas</th>
				      <th>Valor</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">1</th>
				      <td>Mark</td>
				      <td>Otto</td>
					  <td>49</td>
				      <td>@mdo</td>
				    </tr>
				    <tr>
				      <th scope="row">2</th>
				      <td>Jacob</td>
				      <td>Thornton</td>
				      <td>32</td>
				      <td>@fat</td>
				    </tr>
				    <tr>
				      <th scope="row">3</th>
				      <td>Larry</td>
				      <td>the Bird</td>
				      <td>76</td>
				      <td>@twitter</td>				      
				    </tr>
				  </tbody>
				</table>
			</div>
	
@endsection


