<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Include the header-->
	@include('partials._head')
	
</head>
<body>

	
	<!--Navbar-->
	@include('partials._navbar')
	<div class="container-fluid">

		<!--Error msg-->
		@include('partials._messages')

		<!--Beginning of every content-->
		<div class="container">
			<div class="row mt-4">

		<!--Dinamic content-->
		@yield('content')

		<!--End of every content-->
			</div>
		</div>
		<!--Footer-->
		<hr>
		@include('partials._footer')
	</div>
	
	<!--JavaScripts Bootstrap-->
	@include('partials._javascript')

	<!--Add parsley js-->
	@yield('javascript')
</body>
</html>

