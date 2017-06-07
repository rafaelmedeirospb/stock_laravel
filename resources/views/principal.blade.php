@extends('app')

@section('content')

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<link href="/css/custom.css" rel="stylesheet">
		<title>Controle de estoque</title>
	
	</head>

	<body>
			 <div class="container">

			  <nav class="navbar navbar-default">
			    <div class="container-fluid">

			    <div class="navbar-header">      
			      <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
			    </div>

			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="{{action('ProdutosController@lista')}}">Listagem</a></li>
			         <li><a href="{{action('ProdutosController@formulario')}}">Cadastrar produto</a></li>
			         <li><a href="{{action('ProdutosController@listaJson')}}">Json dos produtos</a></li>


					

			    </div>
			  </nav>

			    @yield('conteudo')

			  <footer class="footer">
			      <p>© Rafael F. Medeiros</p>
			  </footer>

			  </div>
</body>
</html>


@endsection