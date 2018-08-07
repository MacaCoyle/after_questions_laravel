<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Passion+One:400,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.cs7s">
<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" src="plugins/aos/main.aos.css" />
<title>After question</title>
 
</head>
<body>
<div class="container">

<header class="header">
<div class="header_wrapper">
<div class="header_logo" >
<a href=""> <img src="images/logo.png"> </a>
</div><!-- cierra header_logo -->
	<div class="botonera">
	<nav class="main-nav" id="myTopnav">
  		<ul>
    		<li><a href="#que_es1">¿Qué es?</a></li>
    		<li><a href="#reglas1">Reglas</a></li>
    		<li><a href="#players">Players</a></li>
    		<li><a href="faqs">FAQS</a></li>
    		<li><a href="#descargar">Descargalo</a></li>
    		<li><a href="register">Registrate</a></li>
 	 	</ul>
 	 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a>
	</nav>
	<div class="button_login">
		<a href="login"> Login</a>
	</div>
	</div><!-- cierra botonera -->
</div>
</header>

<main class="welcome">
<h2>Elegí una categoria</h2>

{{-- dd($categories) --}}
@foreach($categories as $category)
	<div class="boton-jugar">
	<a href="/juego/{{ $category->name }}">{{ $category->name }}</a>
	</div>
@endforeach

</main>
 
<footer>
	<div class="redes">
	<a href="#" class="fa fa-facebook"></a>
	<a href="#" class="fa fa-twitter"></a>
	<a href="#" class="fa fa-instagram"></a>
	</div>
	<nav class="footer">
		<uL>
    		<li><a href="#que_es1">¿Qué es?</a></li>
    		<li><a href="#reglas1">Reglas</a></li>
    		<li><a href="faqs">FAQS</a></li>
			<li>Copyright  2018. Todos los derechos reservados</li>
		</uL>
	</nav>
</footer>

</div> <!-- cierra container -->
</body>
</html>