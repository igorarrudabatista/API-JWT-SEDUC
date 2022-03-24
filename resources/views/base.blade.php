<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title> SEDUC - API</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,600" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/selectric.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'><link rel="stylesheet" href="/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">SEDUC MT</a>
	<input class="form-control form-control-dark w-100" type="text" placeholder="Procurar" aria-label="Search">
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="{{ url('/logout') }}">Sair</a>
		</li>
	</ul>
</nav>
<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="/dashboard">
                  <i class="zmdi zmdi-widgets"></i>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
					{{-- </li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
                  ------
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-shopping-cart"></i>
				  ------                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-accounts"></i>
                  ------
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-chart"></i>
                  ------
                </a>
					</li> --}}
					<li class="nav-item">
						<a class="nav-link" href="/seduc/">
                  <i class="zmdi zmdi-layers"></i>
					API - Documentação
				                </a>
					</li>
				</ul>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center pl-3 mt-4 mb-1 text-muted">
					<span>Relatórios</span>
					<a class="d-flex align-items-center text-muted" href="#">
						<i class="zmdi zmdi-plus-circle-o"></i>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
						Professor
					                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-file-text"></i>
						Aluno
					                </a>
					</li>
					
	
				</ul>
			</div>
		</nav>
		@yield('content')


		
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/jquery.selectric.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js'></script>
<script  src="/js/script.js"></script>

</body>
</html>
