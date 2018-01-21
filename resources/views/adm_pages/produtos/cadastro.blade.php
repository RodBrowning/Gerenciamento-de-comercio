@extends('home')

@section('title', 'Cadastro de Produtos')

@section('stylesheet')
	{{ Html::style('css/parsley.css') }}
@endsection

@section('content')
	
			<div class="col-md-8 offset-md-2">
				<h2 class="text-center black-font">Cadadastro de Produto</h2>
				<hr>												
			</div>
			<div class="col-md-6 offset-md-3">
				{!! Form::open(['route'=>'produto.store', 'method'=>'post', 'data-parsley-validate'=>'']) !!}
				<div class="form-group row">
					{{ Form::label('name', 'Nome:',['class'=>'mt-2 col-sm-2 col-form-label col-form-label-sm'])}}
					<div class="col-sm-10 mt-2">
						{{ Form::text('name',null,['class'=>'form-control form-control-sm', 'required'=>'', 'minlength'=>'2','maxlength'=>'255'])}}
					</div>

					{{ Form::label('marca', 'Marca:',['class'=>'mt-2 col-sm-2 col-form-label col-form-label-sm'])}}
					<div class="col-sm-10 mt-2">
						{{ Form::text('marca',null,['class'=>'form-control form-control-sm', 'maxlength'=>'255'])}}					
					</div>


					{{ Form::label('categoria_id', 'Categoria:',['class'=>'mt-2 col-sm-2 col-form-label col-form-label-sm'])}}
					<div class="col-sm-10 mt-2">
						<select name='categoria_id' class="form-control form-control-sm">
							<option>Selecione...</option>
							@foreach($categorias as $categoria)
								@if($categoria->ativa)
									<option value="{{$categoria->id}}">{{ ucfirst($categoria->categoria) }}</option>
								@endif
							@endforeach					  
						</select>
					</div>

					{{ Form::label('valor_venda', 'Valor de venda:',['class'=>'mt-2 col-sm-3 col-form-label col-form-label-sm'])}}
					<div class="col-sm-9 mt-2">
						{{ Form::number('valor_venda', null,['class'=>'form-control form-control-sm', 'placeholder'=>'Pode ser null','step'=>'0.01', 'data-parsley-type'=>'number'])}}	
					</div>

					{{ Form::label('descricao', 'Descrição:',['class'=>'mt-2 col-sm-2 col-form-label col-form-label-sm'])}}
					<div class="col-sm-10 mt-2">
						{{ Form::textarea('descricao',null,['class'=>'form-control form-control-sm'])}}					
					</div>
				</div>

					{{ Form::submit('Cadastrar',['class'=>'btn btn-primary btn-block mt-3'])}}
				{!! Form::close() !!}
					<div class="row mt-3">
			    		<div class="text-center col"><a href="{{ route('produto.index') }}" class="btn btn-outline-secondary btn-block" ><< Voltar aos produtos</a></div>
			    	</div>
			</div>
		
@endsection

@section('javascript')
	{{ Html::script('js/parsley.min.js') }}	
	{{ Html::script('js/i18n/pt-br.js') }}
@endsection