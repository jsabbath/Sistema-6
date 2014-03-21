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

	<title>Listado</title>


	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
		function Maestro(Noemp){
			
			document.getElementById('iframe').src= 'maestro.php?noemp=' + Noemp;
		}
		function Alumno(Matricula){
			
			document.getElementById('iframe2').src= 'alumno.php?matricula=' + Matricula;
		}
		function Materia(Clave_materia){
			
			document.getElementById('iframe3').src= 'materias.php?clave_materia=' + Clave_materia;
		}
	</script>

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
              <a href="index.php" class="dropdown-toggle">Inicio</a>
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
	<?php
		include('conectar_db.php');
		//$periodo = $_GET['periodo'];
		//$tipo = $_GET['tipo'];
		//$examen = $_GET['examen'];
		//$fecha = date("d")."/".date("m")."/".date("Y");
		$lista = $_GET['lista'];

		//if ($_GET['lista'] == null) {
			$find = mysql_query("SELECT * FROM lista WHERE id_lista='$lista'");
			while ($row=mysql_fetch_assoc($find)) {
				$lista = $row['id_lista'];
				$periodo = $row['periodo'];
				$tipo = $row['tipo_lista'];
				$examen = $row['tipo_examen'];
				$fecha = $row['fecha'];
			}
		//}
		
	?>
	<div class="container">
		<div class="jumbotron">
			<form action="" method="POST">
				<table class="table">
					<tr>
						<td></td>
						<td><input type="text" readonly="readonly" class="form-control" name="id_lista"    value="<?php echo$lista;?>">   </td>
						<td><input type="text" readonly="readonly" class="form-control" name="periodo"     value="<?php echo$periodo;?>">    </td>
						<td><input type="text" readonly="readonly" class="form-control" name="tipo"        value="<?php echo$tipo;?>">       </td>
						<td colspan="2"><input type="text" readonly="readonly" class="form-control" name="examen" value="<?php echo$examen;?>"></td>
						<td><input type="text" readonly="readonly" class="form-control" name="fecha"       value="<?php echo$fecha;?>">      </td>
					</tr>
					<tr>
						<td>No. Acta</td>
						<td>Clave Materia</td>
						<td>Materia</td>
						<td>Grupo</td>
						<td>No. Empleado</td>
						<td>Maestro</td>
					</tr>
					<tr>
						<td><input type="text" name="Noacta"        class="form-control" id="Noacta"  placeholder="No. Acta">     </td>
						<td><input type="text" name="clave_materia" class="form-control" id="Clave_materia"  value="" onblur="Materia(this.value);" placeholder="Clave Materia"></td>
						<td><input type="text" name="materia"       class="form-control" id="nombre_materia" readonly="readonly" value="" placeholder="Materia">      </td>
						<td><input type="text" name="grupo"         class="form-control" id=""  placeholder="Grupo">        </td>
						<td><input type="text" name="noemp"         class="form-control" onblur="Maestro(this.value);" id="Noemp"  placeholder="No. Empleado"> </td>
						<td colspan="2"><input type="text" name="emp" class="form-control" id="nombre_maestro" readonly="readonly" value="" placeholder="Maestro">    </td>
					</tr>
					<tr>
						<td>
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
							    <h4>No. Acta</h4>
							  </label>
							</div>
						</td>
						<td>
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							   <h4> Materia</h4>
							  </label>
							</div>
						</td>
						<td>
							<div class="radio">
							  <label>
							    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							   <h4> Grupo</h4>
							  </label>
							</div>
						</td>
						<td><input type="submit"  onclick = "this.form.action = 'delete.php'" class="form-control" value="Borrar"></td>
						<td><input type="submit" target="_blank" onclick = "this.form.action = 'pdf/index.php'" class="form-control" value="Imprimir"></td>
						<td><input type="reset" class="form-control" value="cancelar"></td>
						<td><input type="submit" onclick = "this.form.action = 'proceso.php'" class="form-control" value="Aceptar"></td>
					</tr>
				</table>
				<input type="hidden" name="periodo" value="<?php echo$periodo;?>">
				<input type="hidden" name="tipo" value="<?php echo$tipo;?>">
				<input type="hidden" name="examen" value="<?php echo$examen;?>">
				<input type="hidden" name="lista" value="<?php echo$lista;?>">
			</form>
			<iframe id="iframe" src="maestro.php" width="0" height="0" frameborder="0"></iframe>
			<iframe id="iframe2" src="alumno.php" width="0" height="0" frameborder="0"></iframe>
			<iframe id="iframe3" src="materias.php" width="0" height="0" frameborder="0"></iframe>
			<div class="table-responsive">
				<table class="table">
					<tr class='active'>
						<th>No. Lista</th>
						<th>No. Acta</th>
						<th>Clave Materia</th>
						<th>Materia</th>
						<th>Grupo</th>
						<th>No. Empleado</th>
						<th>Maestro</th>
					</tr>

					<?php
						$num = 0;
						$ver = mysql_query("SELECT * FROM lista WHERE id_lista='$lista' ORDER BY no_acta");
						while ($row=mysql_fetch_assoc($ver)) {
							$num++;
							echo "<tr class='success'>";
							echo "<td align='center'>".$num."</td>";
							echo "<td align='center'>".$row['no_acta']."</td>";
							echo "<td align='center'>".$row['clave_materia']."</td>";
							echo "<td align='center'>".$row['materia']."</td>";
							echo "<td align='center'>".$row['grupo']."</td>";
							echo "<td align='center'>".$row['no_emp']."</td>";
							echo "<td align='center'>".$row['empleado']."</td>";
							echo "</tr>";
						}
					?>
				</table>
			</div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>