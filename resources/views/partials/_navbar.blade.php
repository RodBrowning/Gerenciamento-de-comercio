<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <a class="navbar-brand black-font" href="#">Controle de Vendas</a>
	  <div class="collapse navbar-collapse w-100" id="navbarNavDropdown">
	    <ul class="navbar-nav col-lg-9">
	      <li class="nav-item {{ Request::is('/') ? 'active':'' }}">
	        <a class="nav-link" href="{{ route('pages.index') }}">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item {{ Request::is('estoque') ? 'active':''}}">
	        <a class="nav-link" href="{{ route('pages.estoque') }}">Estoque</a>
	      </li>
	      <li class="nav-item {{ Request::is('vendas') ? 'active':'' }}">
	        <a class="nav-link" href="{{ route('pages.vendas') }}">Vendas</a>
	      </li>    
	      <li class="nav-item {{ Request::is('compras') ? 'active':''}}">
	        <a class="nav-link" href="{{ route('pages.compras') }}">Compras</a>
	      </li>
	      <li class="nav-item {{ Request::is('produtos') ? 'active':''}}">
	        <a class="nav-link" href="{{ route('pages.produtos') }}">Produtos</a>
	      </li>
	  	</ul>
	  	<ul class="navbar-nav col-lg-3">
		    <li class="nav-item dropdown w-100">
		        <a class="nav-link dropdown-toggle text-lg-right" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Olá Senhor Rodrigo
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		        	<p class="mt-3 bg-primary text-white text-center">Lançamentos</p>
		          <a class="dropdown-item" href="#">Lançar Vendas</a>
		          <a class="dropdown-item" href="#">Lancar Compras</a>
		          <a class="dropdown-item" href="#">Prod. c/ Vendedor</a>
		          <a class="dropdown-item" href="#">Lancar Pagamento</a>
		          <hr>
		          <p class="bg-primary text-white text-center">Cadastros</p>
		          <a class="dropdown-item" href="{{ route('produto.index') }}">Produtos</a>
		          <a class="dropdown-item" href="{{ route('fornecedor.index') }}">Fornecedores</a>
		          <a class="dropdown-item" href="#">Vendedores</a>
		          <hr>
		          <a class="dropdown-item" href="#">Logout</a>
		        </div>
		    </li>    
	    </ul>

	  </div>
	  
	</nav>