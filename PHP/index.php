<!DOCTYPE html>
<html>
<head>

	<title>Inicio de Sesión</title>
	
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="../js/showModal.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/estiloLogin.css">
	<script src="../js/dataJson.js"></script>

</head>

<body >

<div id="main page">

<div id="menu">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
		  <div class="container">
		        <a class="navbar-brand" href="#">
		          <img src="../imagenes/logo.jpg" alt="">
		        </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarResponsive">
		      	<ul class="navbar-nav ml-auto">
		        	<li class="nav-item active">
		          		<a class="nav-link" href="#">Inicio</a>
		        	</li>

			        <li class="nav-item">
			          <a class="nav-link" href="#">Servicios</a>
			        </li>

			        <li class="nav-item">
			          <a class="nav-link" href="#">Nosotros</a>
			        </li>
		      	</ul>
		    </div>
		  </div>
		</nav>
	</header>
</div>

	<div class="container 1" id="inicioSesion">
<!--Aqui va el modal de iniciar sesión-->
	<?php
	include('modal_iniciar_sesion.php');
	?>

  	</div>


<div class="container 2" id="formRegistro">
	<!-- Aquí va el formulario de registro de usuario -->
	<div class="jumbotron mb-0">		
	<h1 class="display-6 mt-0">Registro de cuenta</h1>
	 <?php
    include('FormRegistro.php'); 
    ?>
	</div>
</div>

</div>

<footer>
<div class="alert alert-secondary" role="alert">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a></div>
</footer>
</body>
</html>







