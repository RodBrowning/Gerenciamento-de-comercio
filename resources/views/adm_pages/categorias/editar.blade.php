@extends('home')

@section('title', 'Editar Categoria')

@section('content')

	<div class="col-md-8 offset-md-2">
				<h2 class="text-center black-font">Editar Categoria - <b>{{ ucwords($categoria->categoria) }}</b></h2>
				<hr>												
			</div>
			<div class="col-md-6 offset-md-3">

				{!! Form::open(['route'=>['categoria.update',$categoria->id], 'method'=>'PATCH', 'data-parsley-validate'=>'']) !!}

				

					{{ Form::label('categoria', 'Nome:',['class'=>'mt-2'])}}

					
						{{ Form::text('categoria',ucwords($categoria->categoria),['class'=>'form-control', 'required'=>'', 'minlength'=>'2','maxlength'=>'255'])}}
					

				

					{{ Form::submit('Salvar edição',['class'=>'btn btn-primary btn-block mt-3'])}}

				{!! Form::close() !!}

					<div class="row mt-3">
			    		<div class="text-center col"><a href="{{ route('categoria.index') }}" class="btn btn-outline-secondary btn-block" ><< Voltar as Categorias</a></div>
			    	</div>
			</div>
		
@endsection

@section('javascript')
	{{ Html::script('js/parsley.min.js') }}	
	{{ Html::script('js/i18n/pt-br.js') }}
@endsection