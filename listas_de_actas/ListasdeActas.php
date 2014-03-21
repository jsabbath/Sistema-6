<?
    //Inicializar una sesion de PHP
    include("sesion.php");
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listas de Actas</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-glyphicons.css">
</head>
<body>
	<div class="container">
		<!-- Inicio menu -->
		<div class="navbar">
		  <a class="navbar-brand" href="index.php">Control Escolar</a>
		  <ul class="nav navbar-nav">
		    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Lista Nueva</a></li>
                  <li><a href="#">Salir</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Busquedas <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Lista</a></li>
                  <li><a href="#">Otros</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Altas <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Maestros</a></li>
                  <li><a href="#">Materias</a></li>
                </ul>
            </li>
		  </ul>
		</div>
		<!-- Fin de menu -->
		<div class="container">
			<table border="0" class="table table-striped">
				<tr>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td><a href=""><img src="img/carpeta3.png" class="img-responsive" alt="iconos"><br>Crear</a></td>
					<td><a href=""><img src="img/carpeta3.png" class="img-responsive" alt="iconos"><br>Busqueda</a></td>
					<td><a href=""><img src="img/carpeta3.png" class="img-responsive" alt="iconos"><br>Imprimir</a></td>
				</tr>
				<tr>
					<td colspan="3"></td>
				</tr>
			</table>
		</div>
	</div>
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