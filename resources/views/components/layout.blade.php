<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title> {{ $title }} - Controle de Séries </title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">

        <!-- Styles -->
        <style>
        	.dark-mode {
			    background-color: #343a40 !important;
			    color: #fff;
			}

        	.dark-mode .content-wrapper {
			    background-color: #454d55 !important;
			    color: #fff;
			}

			.dark-mode .navbar-dark {
			    background-color: #343a40;
			    border-color: #4b545c;
			}
           
        </style>

        <!-- Scripts -->
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
	</head>
	<body class="dark-mode antialiased">
		<div class="container">
			<header>
				<nav class="main-header navbar navbar-expand navbar-dark">

				    <ul class="navbar-nav">
				        <li class="nav-item">
				            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
				        </li>
				        <li class="nav-item d-none d-sm-inline-block">
				            <a href="#" class="nav-link">Home</a>
				        </li>
				        <li class="nav-item d-none d-sm-inline-block">
				            <a href="#" class="nav-link">Series</a>
				        </li>
				        <li class="nav-item d-none d-sm-inline-block">
				            <a href="#" class="nav-link">Filmes</a>
				        </li>
				        <li class="nav-item d-none d-sm-inline-block">
				            <a href="#" class="nav-link">Categorias</a>
				        </li>
				        <li class="nav-item d-none d-sm-inline-block">
				            <a href="#" class="nav-link">Elenco</a>
				        </li>
				    </ul>
				</nav>

				<h1>{{ $title }}</h1>
			</header>
			<div class="content-wrapper">
				{{ $slot }}
			</div>
		</div>

	</body>
</html>
