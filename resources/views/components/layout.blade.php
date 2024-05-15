<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title> {{ $title }} - Controle de Séries </title>

		<!-- Styles-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome-free.all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/OverlayScrollbars.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/adminlte.min.css?v=3.2.0') }}">

        <!-- Scripts -->
        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
	</head>

	<body class="dark-mode sidebar-mini layout-fixed layout-navbar-fixed" style="height: auto;">
		<div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-dark">
                <ul class="navbar-nav">
                    <!--li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li-->
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/series" class="nav-link">Séries</a>
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

            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <a href="#" class="brand-link">
                    <span class="brand-text font-weight-light">Projeto Laravel</span>
                </a>
            </aside>

            <div class="content-wrapper" style="min-height: 529px;">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">{{ $title }}</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">{{ $breadcrumb0 }}</a></li>
                                    <li class="breadcrumb-item active">{{ $breadcrumb1 }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
							{{ $slot }}
                        </div>
                    </div>
                </section>
            </div>

            <footer class="main-footer">
                
            </footer>

            
        </div>
	</body>
</html>
