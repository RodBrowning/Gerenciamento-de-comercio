
@if(Session::has('success'))
	<div class="col-md-10 off-md-set-1">
		<div class="alert alert-success mt-3">
			<strong>Success: </strong>{{ Session::get('success')}}
		</div>
	</div>
@endif

@if(count($errors)>0)
	<div class="col-md-10 off-md-set-1">
		<div class="alert alert-danger mt-3">
			<strong>Errors:</strong>
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>	
				@endforeach
				
			</ul>
		</div>
	</div>
@endif