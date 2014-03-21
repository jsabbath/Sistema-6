<?php
    //Inicializar una sesion de PHP
    include("sesion.php");
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Control Escolar</title>

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
                <li><a href="acta.php">Acta nueva</a></li>
                <li><a data-toggle="modal" href="#modif_acta">Modificar acta</a></li>
                  <li><a href="../logout.php">salir</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Busquedas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Acta nueva</a></li>
                <li><a href="">Oficio</a></li>
                <li><a href="">Otros</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Actas por empleado</a></li>
                <li><a href="">Actas</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estadisticas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Por periodo</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Altas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Alumnos</a></li>
                <li><a href="">Maestros</a></li>
                  <li><a href="">Materias</a></li>
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
      <div class="jumbotron">
        SISTEMA DE ACTAS COMPLEMENTARIAS
      </div>
    </div> <!-- /container -->

    <!-- ********************************************************************************************************************************************* -->
    <!-- Modal modif_acta -->
  <div class="modal fade" id="modif_acta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Acta a Modificar</h4>
        </div>
        <div class="modal-body">
          <form action="m_acta.php" method="POST">
            <table class="table">
              <tr>
                <td align="center"><label for="m_acta"><h2>Acta a Modificar:</h2></label></td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="m_acta" id="m_acta" class="form-control input-lg" placeholder="Acata a Modificar  ">
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
  <!-- /.modal modif_acta -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>