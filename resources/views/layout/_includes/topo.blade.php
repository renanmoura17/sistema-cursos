<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>@yield('titulo')</title>

		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

		<!--Let browser know website is optimized for mobile-->
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>

		<header>
			<!-- Barra de navegação do Materialize (Desktop e mobile) -->
			<nav class="indigo darken-4">
				<div class="nav-wrapper indigo darken-4 container">
					
					<a href="#!" class="brand-logo">Curso de Laravel</a>
					<a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					
					<ul class="right hide-on-med-and-down">
						<li><a href="/">Home</a></li>
						<li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
					</ul>
					
					<ul class="side-nav" id="mobile">
						<li><a href="/">Home</a></li>
						<li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
					</ul>
				</div>
			</nav>
		</header>