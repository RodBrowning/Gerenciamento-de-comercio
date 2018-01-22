@extends('home')

@section('title', 'Fornecedor')

@section('content')
	
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center black-font">Fornecedor</h3>
				<hr>												
			</div>
			<div class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-heading">
						<div class="card">
							<div class="container">
								<div class="row">
								    <h3 class="col card-header">Forenecedor: {{$fornecedor->name}} </h3><h3 class="text-right col card-header"> Cod: {{$fornecedor->id}}</h3>
							    </div>
						    </div>
						    <div class="card-block">
							   <table class="table mb-0 table-sm text-sm-center">
								  <thead>
								    					    								  	
								    
								    	<tr>
									      <th class="text-center" colspan="{{count($fornecedor->telefones)}}">Telefone</th>
									    </th>
								    	<tr>
									      
									      <td> 
									      	{{$telefone}}
									      </td>
									    </tr>							    

								   
								  </tbody>
								</table>
															  
						    </div>
						    <div class="card-footer text-muted">
						    	<div class="row">
						    		<div class="text-center col"><a href="{{ route('fornecedor.edit',$fornecedor->id) }}" class="btn btn-primary btn-block">Editar</a></div>	
									<div class="text-center col">
										{!! Form::open(['route'=>['fornecedor.destroy',$fornecedor->id], 'method'=>'DELETE']) !!}
						    				{{ Form::submit('Deletar',['class'=>'btn btn-danger btn-block']) }}
						    			{!! Form::close() !!}
									</div>
						    	</div>						    	
						    	<div class="row mt-3">
						    		<div class="text-center col"><a href="{{ route('fornecedor.index') }}" class="btn btn-outline-secondary btn-block" ><< Voltar aos fornecedores</a></div>
						    	</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		
@endsection


