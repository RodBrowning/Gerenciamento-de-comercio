@extends('home')

@section('title', 'Cadastro de Produtos')

@section('stylesheet')
	{{ Html::style('css/parsley.css') }}
@endsection

@section('content')
	
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center">Cadadastro de Produto</h3>
				<hr>												
			</div>
			<div class="col-md-6 offset-md-3">
				{!! Form::open(['route'=>'produto.store', 'method'=>'post', 'data-parsley-validate'=>'']) !!}
					{{ Form::label('name', 'Nome:',['class'=>'mt-2'])}}
					{{ Form::text('name',null,['class'=>'form-control', 'required'=>'', 'minlength'=>'2','maxlength'=>'255'])}}

					{{ Form::label('marca', 'Marca:',['class'=>'mt-2'])}}
					{{ Form::text('marca',null,['class'=>'form-control', 'maxlength'=>'255'])}}					


					{{ Form::label('categoria', 'Categoria:',['class'=>'mt-2'])}}
					{{ Form::text('categoria',null,['class'=>'form-control', 'required'=>'', 'minlength'=>'2','maxlength'=>'255'])}}		

					{{ Form::label('valor_venda', 'Valor de venda:',['class'=>'mt-2'])}}
					{{ Form::number('valor_venda', null,['class'=>'form-control', 'placeholder'=>'Pode ser null','step'=>'0.01', 'data-parsley-type'=>'number'])}}	

					{{ Form::label('descricao', 'Descrição:',['class'=>'mt-2'])}}
					{{ Form::textarea('descricao',null,['class'=>'form-control'])}}					

					{{ Form::submit('Cadastrar',['class'=>'btn btn-primary btn-block mt-3'])}}
				{!! Form::close() !!}
			</div>
		
@endsection

@section('javascript')
	{{ Html::script('js/parsley.min.js') }}	
	{{ Html::script('js/i18n/pt-br.js') }}
@endsection