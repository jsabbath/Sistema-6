<?php
	include('sesion.php');
	include('conectar_db.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Busquedas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">
    <style>
		.consulta{
			width: 100%;
			height: 420px;
			overflow: scroll;
		}
    </style>

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
              <a href="index.php" class="dropdown-toggle">Inicio</b></a>           
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
    <br>
    <form action="consulta.php" method="POST">
		<table border="0" class="table">
			<tr>
				<td colspan="7" align="center">
					<label for="periodo">Seleccionar el periodo:</label>
				</td>
			</tr>
			<tr>
				<td colspan="7" align="center">
					<div class="col-lg-4 col-md-offset-4">
						<select name="periodo" class="form-control input-lg" id="periodo">
							<option value="">- -Selecciona Periodo- -</option>
							<option value="2010-1">2010-1</option>
							<option value="2010-2">2010-2</option>
							<option value="2011-1">2011-1</option>
							<option value="2011-2">2011-2</option>
							<option value="2012-1">2012-1</option>
							<option value="2012-2">2012-2</option>
							<option value="2013-1">2013-1</option>
							<option value="2013-2">2013-2</option>
							<option value="2014-1">2014-1</option>
							<option value="2014-2">2014-2</option>
							<option value="2015-1">2015-1</option>
							<option value="2015-2">2015-2</option>
						</select>
					</div>
				</td>
			</tr>
			<tr>
				<td><input type="radio" name="numero" id="numero1" target="frm1" value="1" checked><label for="numero1">No. Lista</label></td>
				<td><input type="radio" name="numero" id="numero2" target="frm1" value="2"><label for="numero2">No. Acta</label></td>
				<td><input type="radio" name="numero" id="numero3" target="frm1" value="3"><label for="numero3">Grupo</label></td>
				<td><input type="radio" name="numero" id="numero4" target="frm1" value="4"><label for="numero4">Materia</label></td>
				<td><input type="radio" name="numero" id="numero5" target="frm1" value="5"><label for="numero5">Maestro</label></td>
				<td><input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar"></td>
				<td><button class="btn-lg btn btn-primary"><span class='glyphicon glyphicon-search'></span></button></td>
			</tr>
			<tr>
				<td colspan="7" align="center">
					<div class="consulta">
						<?php
							$busqueda=$_GET['busqueda'];
							$numero=$_GET['opcion'];
							$periodo=$_GET['periodo'];
							switch ($numero) {
								case "1":
									$buscar=mysql_query("SELECT * FROM lista WHERE id_lista='$busqueda' AND periodo='$periodo' ORDER BY id_lista");
						?>
									<table class="table table-striped">
										<tr>
											<td>No Lista</td>
											<td>No. Acta</td>
											<td>Clave Materia</td>
											<td>Materia</td>
											<td>Grupo</td>
											<td>No. Empleado</td>
											<td>Maestro</td>
											<td>Periodo</td>
											<td>Tipo</td>
											<td>T_Examen</td>
											<td>Fecha</td>
										</tr>
						<?php while ($row=mysql_fetch_assoc($buscar)) {
									?>
										<tr>
											<td><?php echo $row['id_lista']; ?></td>
											<td><?php echo $row['no_acta']; ?></td>
											<td><?php echo $row['clave_materia']; ?></td>
											<td><?php echo $row['materia']; ?></td>
											<td><?php echo $row['grupo']; ?></td>
											<td><?php echo $row['no_emp']; ?></td>
											<td><?php echo $row['empleado']; ?></td>
											<td><?php echo $row['periodo']; ?></td>
											<td><?php echo $row['tipo_lista']; ?></td>
											<td><?php echo $row['tipo_examen']; ?></td>
											<td><?php echo $row['fecha']; ?></td>
										</tr>
						<?php } ?>
									</table>
						<?php  
									break;

								case 2:
						?>
									<table class="table table-striped">
										<tr>
											<td>No Lista</td>
											<td>No. Acta</td>
											<td>Clave Materia</td>
											<td>Materia</td>
											<td>Grupo</td>
											<td>No. Empleado</td>
											<td>Maestro</td>
											<td>Periodo</td>
											<td>Tipo</td>
											<td>T_Examen</td>
											<td>Fecha</td>
										</tr>
						<?php 
									$buscar=mysql_query("SELECT * FROM lista WHERE no_acta='$busqueda' ORDER BY no_acta");
									while ($row=mysql_fetch_assoc($buscar)) {
						?>
										<tr>
											<td><?php echo $row['id_lista']; ?></td>
											<td><?php echo $row['no_acta']; ?></td>
											<td><?php echo $row['clave_materia']; ?></td>
											<td><?php echo $row['materia']; ?></td>
											<td><?php echo $row['grupo']; ?></td>
											<td><?php echo $row['no_emp']; ?></td>
											<td><?php echo $row['empleado']; ?></td>
											<td><?php echo $row['periodo']; ?></td>
											<td><?php echo $row['tipo_lista']; ?></td>
											<td><?php echo $row['tipo_examen']; ?></td>
											<td><?php echo $row['fecha']; ?></td>
										</tr>
						<?php } ?>
									</table>
						<?php
									break;

								case 3:
						?>
									<table class="table table-striped">
										<tr>
											<td>No Lista</td>
											<td>No. Acta</td>
											<td>Clave Materia</td>
											<td>Materia</td>
											<td>Grupo</td>
											<td>No. Empleado</td>
											<td>Maestro</td>
											<td>Periodo</td>
											<td>Tipo</td>
											<td>T_Examen</td>
											<td>Fecha</td>
										</tr>
						<?php
								$buscar=mysql_query("SELECT * FROM lista WHERE grupo='$busqueda' ORDER BY grupo");
									while ($row=mysql_fetch_assoc($buscar)) {
						?>
										<tr>
											<td><?php echo $row['id_lista']; ?></td>
											<td><?php echo $row['no_acta']; ?></td>
											<td><?php echo $row['clave_materia']; ?></td>
											<td><?php echo $row['materia']; ?></td>
											<td><?php echo $row['grupo']; ?></td>
											<td><?php echo $row['no_emp']; ?></td>
											<td><?php echo $row['empleado']; ?></td>
											<td><?php echo $row['periodo']; ?></td>
											<td><?php echo $row['tipo_lista']; ?></td>
											<td><?php echo $row['tipo_examen']; ?></td>
											<td><?php echo $row['fecha']; ?></td>
										</tr>
						<?php } ?>
									</table>
						<?php
									break;

								case 4:
						?>
									<table class="table table-striped">
										<tr>
											<td>No Lista</td>
											<td>No. Acta</td>
											<td>Clave Materia</td>
											<td>Materia</td>
											<td>Grupo</td>
											<td>No. Empleado</td>
											<td>Maestro</td>
											<td>Periodo</td>
											<td>Tipo</td>
											<td>T_Examen</td>
											<td>Fecha</td>
										</tr>
						<?php
								$buscar=mysql_query("SELECT * FROM lista WHERE clave_materia='$busqueda' ORDER BY materia");
									while ($row=mysql_fetch_assoc($buscar)) {
						?>
										<tr>
											<td><?php echo $row['id_lista']; ?></td>
											<td><?php echo $row['no_acta']; ?></td>
											<td><?php echo $row['clave_materia']; ?></td>
											<td><?php echo $row['materia']; ?></td>
											<td><?php echo $row['grupo']; ?></td>
											<td><?php echo $row['no_emp']; ?></td>
											<td><?php echo $row['empleado']; ?></td>
											<td><?php echo $row['periodo']; ?></td>
											<td><?php echo $row['tipo_lista']; ?></td>
											<td><?php echo $row['tipo_examen']; ?></td>
											<td><?php echo $row['fecha']; ?></td>
										</tr>
						<?php } ?>
									</table>
						<?php
									break;

								case 5:
						?>
									<table class="table table-striped">
										<tr>
											<td>No Lista</td>
											<td>No. Acta</td>
											<td>Clave Materia</td>
											<td>Materia</td>
											<td>Grupo</td>
											<td>No. Empleado</td>
											<td>Maestro</td>
											<td>Periodo</td>
											<td>Tipo</td>
											<td>T_Examen</td>
											<td>Fecha</td>
										</tr>
						<?php 
								$buscar=mysql_query("SELECT * FROM lista WHERE no_emp='$busqueda' ORDER BY empleado");
									while ($row=mysql_fetch_assoc($buscar)) {
						?>
										<tr>
											<td><?php echo $row['id_lista']; ?></td>
											<td><?php echo $row['no_acta']; ?></td>
											<td><?php echo $row['clave_materia']; ?></td>
											<td><?php echo $row['materia']; ?></td>
											<td><?php echo $row['grupo']; ?></td>
											<td><?php echo $row['no_emp']; ?></td>
											<td><?php echo $row['empleado']; ?></td>
											<td><?php echo $row['periodo']; ?></td>
											<td><?php echo $row['tipo_lista']; ?></td>
											<td><?php echo $row['tipo_examen']; ?></td>
											<td><?php echo $row['fecha']; ?></td>
										</tr>
						<?php } ?>
									</table>
						<?php
									break;
								
								default:
						?>
									<table class="table table-striped">
										<tr>
											<td>No Lista</td>
											<td>No. Acta</td>
											<td>Clave Materia</td>
											<td>Materia</td>
											<td>Grupo</td>
											<td>No. Empleado</td>
											<td>Maestro</td>
											<td>Periodo</td>
											<td>Tipo</td>
											<td>T_Examen</td>
											<td>Fecha</td>
										</tr>
									</table>
						<?php
									break;
							}
						?>
					</div>
				</td>
			</tr>
		</table>
	</form>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>