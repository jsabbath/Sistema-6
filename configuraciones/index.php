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
                <li><a href="../logout.php">Cerrar Sesion</a></li>
                  <li><a href="../logout.php">Cerrar</a></li>
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
              <li><a href="../logout.php">Cerrar Sesion</a></li>
            </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <?php
    	include('../conectar_db.php');

    	$ver = mysql_query("SELECT * FROM fecha");
    	while ($row=mysql_fetch_assoc($ver)) {
    		# code...
    		$fecha = $row['fecha'];
    	}
    ?>

    <div class="container">
    	<div class="jumbotron"> 
    			<div class="col-lg-4 col-md-offset-4"> 		
			    	<input type="text" id="disabledTextInput" readonly="readonly" class="form-control" value="<?php echo$fecha;?>">
			    </div>
    		<br>
    		<form action="" method="POST" role="form">
    			<table class="table">
    				<tr>
    					<td align="center">Cambio de Fecha para los Oficios </td>
    				</tr>
    				<tr>
    					<td align="center"><label for="fecha">Fecha:</label></td>
    				</tr>
    				<tr>
    					<td align="center">
    						<div class="col-lg-4 col-md-offset-4">
    							<input type="text" id="fecha" class="form-control" name="fecha" value="<?php echo$fecha;?>">
    						</div>
    					</td>
    				</tr>
    				<tr>
    					<td align="center"><input type="submit" class="btn btn-primary" value="Aceptar"></td>
    				</tr>
    			</table>
    		</form>
    	</div>
    </div>
    <?php

    	if (isset($_POST['fecha'])) {
    		$save = mysql_query("UPDATE fecha SET fecha='".$_POST['fecha']."' WHERE id=1");
    		
    		header("Location: index.php");   	
    	}
    ?>


	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>