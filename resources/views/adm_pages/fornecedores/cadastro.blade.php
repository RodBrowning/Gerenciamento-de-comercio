
@extends('home')

@section('title', 'Cadastro Forenecedor')

@section('stylesheet')
	{{ Html::style('css/parsley.css') }}
@endsection

@section('content')
	
		<div class="col-md-8 offset-md-2">
			<h2 class="text-center black-font">Cadastro de Novo Fornecedor</h2>
			<hr>			
		</div>
	
		<div class="col-md-6 offset-md-3">			
			{!! Form::open(['route' => 'fornecedor.store','mothod'=>'POST', 'data-parsley-validate'=>'']) !!}
				<div class="form-group row">
					{{ Form::label('name','Nome fornecedor:',['class'=>'col-sm-3 col-form-label col-form-label-sm'])}}
					<div class="col-md-9">
						{{ Form::text('name',null,['class'=>'form-control form-control-sm mb-1','required'=>'', 'minlength'=>'6', 'maxlength'=>'100'])}}
					</div>

					{{ Form::submit('Salvar cadastro',['class'=>'btn btn-primary btn-block mt-3']) }}
				</div>
			{!! Form::close() !!}
		</div>
		

	
@endsection

@section('javascript')
	{{ Html::script('js/parsley.min.js') }}
	{{ Html::script('js/i18n/pt-br.js') }}
@endsection