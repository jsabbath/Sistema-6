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
          <a class="navbar-brand" href="#">Control Escolar</a>
        </div>
        <div class="navbar-collapse collapse">
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Bienvenido:</a></li>
            <li><a href=""><span class="glyphicon glyphicon-user"></span></a></li>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle user" data-toggle="dropdown"><?php echo $Usuario; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Cerrar Sesion</a></li>
            </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <table border="0" class="table table-striped">
      <tr>
        <td colspan="4" align="center"><b>Control Escolar</b></td>
      </tr>
      <tr class="success">
        <td align="center"><a href="actas_complementarias"><img src="img/content-icon.png" class="img-rounded" width="200"><br>Actas Complementarias</a></td>
        <td align="center"><a href="listas_de_actas" ><img src="img/lista.png" class="img-rounded" width="200"><br>Listas de Actas</a></td>
        <td align="center"><a href=""><img src="img/carpeta3.png" class="img-rounded" width="200"><br>Capacidades</a></td>
        <td align="center"><a href=""><img src="img/carpeta4.png" class="img-rounded" width="200"><br>Entrada a Ajustes</a></td>
      </tr>
      <tr class="success">
        <td align="center"><a data-toggle="modal" href="#Eva_Permanente"><img src="img/folder-icon.png" class="img-rounded" width="200"><br>Oficios E. Permanente</a></td>
        <td align="center"><a data-toggle="modal" href="#E_independiente"><img src="img/Places-folder-blue-icon.png" class="img-rounded" width="200"><br>Oficios E. Independiente</a></td>
        <td align="center"><a  data-toggle="modal"href="#Eva_per_x_Est_Indp"><img src="img/carpeta2.png" class="img-rounded" width="200"><br>Oficios Eva.Per x E. Indp.</a></td>
        <td align="center"><a href="configuraciones/"><img src="img/carpeta1.png" class="img-rounded" width="200"><br>Configuraciones</a></td>
      </tr>
      <tr>
        <td align="center" colspan="4"><h6>Hecho por el Estudiante: Mario Obed Ambriz</h6></td>
      </tr>
    </table>
      </div>

    </div> <!-- /container -->
    <!-- Modal Eva_per_x_Est_Indp -->
  <div class="modal fade" id="Eva_per_x_Est_Indp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Periodo de Evaluacion Permanente por Estudios Independientes</h4>
        </div>
        <div class="modal-body">
          <form action="oficios_eva_per_x_Est_Indp/index.php" method="POST">
            <table class="table">
              <tr>
                <td align="center"><img src="img/calendario.jpeg" alt="periodo"></td>
              </tr>
              <tr>
                <td align="center"><label for="periodo"><h2>Periodo:</h2></label></td>
              </tr>
              <tr>
                <td>
                  <select name="periodo" id="periodo" class="form-control input-lg">
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
  <!-- /.modal Eva_per_x_Est_Indp -->
<!-- ********************************************************************************************************************************************* -->
    <!-- Modal E_independiente -->
  <div class="modal fade" id="E_independiente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Periodo de Estudios Independientes</h4>
        </div>
        <div class="modal-body">
          <form action="oficios_e_independiente/index.php" method="POST">
            <table class="table">
              <tr>
                <td align="center"><img src="img/calendario.jpeg" alt="periodo"></td>
              </tr>
              <tr>
                <td align="center"><label for="periodo"><h2>Periodo:</h2></label></td>
              </tr>
              <tr>
                <td>
                  <select name="periodo" id="periodo" class="form-control input-lg">
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
  <!-- /.modal E_independiente -->
<!-- ********************************************************************************************************************************************* -->
    <!-- Modal Eva_Permanente -->
  <div class="modal fade" id="Eva_Permanente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Periodo de Evaluacion Permanente</h4>
        </div>
        <div class="modal-body">
          <form action="oficios_eva_permanente/index.php" method="POST">
            <table class="table">
              <tr>
                <td align="center"><img src="img/calendario.jpeg" alt="periodo"></td>
              </tr>
              <tr>
                <td align="center"><label for="periodo"><h2>Periodo:</h2></label></td>
              </tr>
              <tr>
                <td>
                  <select name="periodo" id="periodo" class="form-control input-lg">
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
  <!-- /.modal Eva_Permanente -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>