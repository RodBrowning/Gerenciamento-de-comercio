@extends('home')

@section('title', 'Editar Produto')

@section('stylesheet')
	{{ Html::style('css/parsley.css') }}
@endsection

@section('content')
	
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center black-font">Editar Produto</h3>
				<hr>												
			</div>
			<div class="col-md-6 offset-md-3">
				{!! Form::open(['route'=>['produto.update',$produto->id], 'method'=>'PUT', 'data-parsley-validate'=>'']) !!}
					{{ Form::label('name', 'Nome:',['class'=>'mt-2'])}}
					{{ Form::text('name',$produto->name,['class'=>'form-control', 'required'=>'', 'minlength'=>'2','maxlength'=>'255'])}}

					{{ Form::label('marca', 'Marca:',['class'=>'mt-2'])}}
					{{ Form::text('marca',$produto->marca,['class'=>'form-control', 'maxlength'=>'255'])}}					


					{{ Form::label('categoria_id', 'Categoria:',['class'=>'mt-2'])}}
					<select name='categoria_id' class="form-control">
						@foreach($categorias as $categoria)
							@if($categoria->ativa)
								<option value="{{$categoria->id}}" {{ $categoria->id == $produto->categories->id ? "selected":"" }}>
									{{ ucfirst($categoria->categoria) }}
								</option>
							@endif
						@endforeach					  
					</select>

					{{ Form::label('valor_venda', 'Valor de venda:',['class'=>'mt-2'])}}
					{{ Form::number('valor_venda', $produto->valor_venda,['class'=>'form-control', 'placeholder'=>'Pode ser null','step'=>'0.01', 'data-parsley-type'=>'number'])}}	

					{{ Form::label('descricao', 'Descrição:',['class'=>'mt-2'])}}
					{{ Form::textarea('descricao',$produto->descricao,['class'=>'form-control'])}}					
					<div class="row">
						<div class="col-md-6">
							{{ Form::submit('Salvar Edição',['class'=>'btn btn-success btn-block mt-3'])}}
						</div>
						<div class="col-md-6">
							<a href="{{ route('produto.show',$produto->id) }}" class="btn btn-danger btn-block mt-3 col">Cancelar</a>	
						</div>
						
					</div>
				{!! Form::close() !!}
			</div>
		
@endsection

@section('javascript')
	{{ Html::script('js/parsley.min.js') }}	
	{{ Html::script('js/i18n/pt-br.js') }}
@endsection