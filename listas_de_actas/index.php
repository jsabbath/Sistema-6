<?php
    //Inicializar una sesion de PHP
    include("sesion.php");
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

	<title>Listas de Actas</title>


	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Control Escolar</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../logout.php">Cerrar Sesion</a></li>
                  <li><a href="../logout.php">Cerrar</a></li>
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bienvenido:</a></li>
            <li><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle user" data-toggle="dropdown"><?php echo $Usuario; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../logout.php">Cerrar Sesion</a></li>
            </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div class="container">
		<div class="container">
			<div class="jumbotron">
				<table border="0" class="table">
					<tr>
						<td align="center"><a data-toggle="modal" href="#crear"><img src="img/documento.png" width="250" class="img-responsive" alt="iconos"><br>Crear</a></td>
						<td align="center"><a href="busqueda.php"><img src="img/search-documento.png" width="250" class="img-responsive" alt="iconos"><br>Busqueda</a></td>
						<td align="center"><a data-toggle="modal" href="#imprimir"><img src="img/imprimir.png" width="250" class="img-responsive" alt="iconos"><br>Imprimir</a></td>
					</tr>
					<tr>
						<td colspan="3"></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- ********************************************************************************************************************************************* -->
    <!-- Modal crear -->
  <div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Crear Lista</h4>
        </div>
        <div class="modal-body">
          <form action="lista.php" method="GET">
            <table class="table">
              <tr>
                <td align="center"><img src="img/documento.png" width="50" alt="periodo"></td>
              </tr>
              <tr>
                <td align="center"><label for="periodo"><h4>Periodo:</h4></label></td>
              </tr>
              <tr>
                <td>
                  <select name="periodo" id="periodo" class="form-control input-lg">
                  	<option value="">Seleccionar</option>
                    <option value="2013-1">2009-1</option>
                    <option value="2013-1">2009-2</option>
                    <option value="2013-1">2010-1</option>
                    <option value="2013-1">2010-2</option>
                    <option value="2013-1">2011-1</option>
                    <option value="2013-1">2011-2</option>
                    <option value="2013-1">2012-1</option>
                    <option value="2013-1">2012-2</option>
                    <option value="2013-1">2013-1</option>
                    <option value="2013-2">2013-2</option>
                    <option value="2014-1">2014-1</option>
                    <option value="2014-2">2014-2</option>
                    <option value="2015-1">2015-1</option>
                    <option value="2015-2">2015-2</option>
                    <option value="2016-1">2016-1</option>
                    <option value="2016-2">2016-2</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td align="center"><label for="tipo"><h4>Tipo:</h4></label></td>
              </tr>
              <tr>
                <td>
                  <select name="tipo" id="tipo" class="form-control input-lg">
                  	<option value="">Seleccionar</option>
                    <option value="Normal">Normal</option>
                    <option value="Complementaria">Complementaria</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td align="center"><label for="examen"><h4>Tipo de Examen:</h4></label></td>
              </tr>
              <tr>
                <td>
                  <select name="examen" id="examen" class="form-control input-lg">
                  	<option value="">Seleccionar</option>
                    <option value="Ordinario">Ordinario</option>
                    <option value="Extraordinario">Extraordinario</option>
                    <option value="Regularizacion">Regularizacion</option>
                    <option value="Evaluacion Permanente">Evaluacion Permanente</option>
                    <option value="Intersemestral">Intersemestral</option>
                  </select>
                </td>
              </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!-- /.modal crear -->
  <!-- ********************************************************************************************************************************************* -->
    <!-- Modal imprimir -->
  <div class="modal fade" id="imprimir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Imprimir Lista</h4>
        </div>
        <div class="modal-body">
          <form action="pdf/index.php" method="POST">
            <table class="table">
              <tr>
                <td align="center"><img src="img/imprimir.png" width="200" alt="periodo"></td>
              </tr>
              <tr>
                <td align="center"><label for="imprimir"><h4>Numero de Lista:</h4></label></td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="lista" id="imprimir" class="form-control input-lg" placeholder="Numero de lista">
                </td>
              </tr>
              
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!-- /.modal imprimir -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>