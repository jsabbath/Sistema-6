<?php
    //Inicializar una sesion de PHP
    include("sesion.php");
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actas Complementarias</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-glyphicons.css">
	<style>
		.user{
			margin-left: -25px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="navbar">
		  <a class="navbar-brand" href="index.php">Control Escolar</a>
		  <ul class="nav navbar-nav">
		    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="logout.php">Cerrar Sesion</a></li>
                  <li><a href="logout.php">Cerrar</a></li>
                </ul>
            </li>
		    <li><a href="#">Contacto</a></li>
		  </ul>
		  	<ul class="nav navbar-nav pull-right">
		      	<li><a href="#">Bienvenido:</a></li>
		      	<li><a href=""><img src="img/User-blue-icon.png" width="25" height="25" alt="user"></a></li>
		      	<li class="dropdown">
		        <a href="#" class="dropdown-toggle user" data-toggle="dropdown"><? echo $Usuario; ?> <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="logout.php">Cerrar Sesion</a></li>
		        </ul>
		      	</li>
		    </ul>
		</div>
		<!-- Fin de Menu -->
	

	</div>

	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script src="js/holder.js"></script>
	<script src="js/application.js"></script>
	<script>
	  var _gauges = _gauges || [];
	  (function() {
	    var t   = document.createElement('script');
	    t.type  = 'text/javascript';
	    t.async = true;
	    t.id    = 'gauges-tracker';
	    t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
	    t.src = '//secure.gaug.es/track.js';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(t, s);
	  })();
	</script>
</body>
</html>