<?php
    //Inicializar una sesion de PHP
    include("sesion.php");
    include("conectar_db.php");

    $periodo = $_POST['periodo'];

    $busca=mysql_query("SELECT * FROM fecha ");
	while($row=mysql_fetch_assoc($busca)){
		$fecha = $row['fecha'];
	}
?>
<!DOCTYPE html>
<html lang="en">
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="logout.php">Cerrar</a></li>
              </ul>
            </li>
            <li class="dropdown">
		    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <b class="caret"></b></a>
				<ul class="dropdown-menu">
                  <li><a href="">Agregar Maestro</a></li>
                  <li><a href="">Agregar Alumno</a></li>
                  <li><a href="">Agregar Materia</a></li>
                  <li><a href="">Buscar Oficio</a></li>
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
	
</head>
<body>
	<div class="container">
		<iframe id="iframe" src="maestro.php" width="0" height="0" frameborder="0"></iframe>
		<iframe id="iframe2" src="alumno.php" width="0" height="0" frameborder="0"></iframe>
		<iframe id="iframe3" src="materias.php" width="0" height="0" frameborder="0"></iframe>

			<div class="jumbotron">
				<h3><span class="label label-info">Evaluacion Permanente <?echo $periodo;?></span></h3>
				<form action='pdf/index.php' method='POST' class="form-inline" target="_blank" role="form">
					<table class="table">
						<tr>
							<td >
								<div class="col-md-offset-2">
									<label for="Noemp">No. Empleado: </label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label for="nombre_maestro">Maestro: </label>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-lg-2 col-md-offset-2">
									<input id="Noemp" class="form-control" type="text" name='noemp' value="" onblur="Maestro(this.value);" required="required" autofocus="autofocus" /> 
								</div>
								<div class="col-lg-6">
									<input id="nombre_maestro" class="form-control" type="text" name='emp' value="" readonly="readonly" size="50" /> 
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-md-offset-2">
									<label for="matricula">Matricula: </label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label for="nombre_alumno">Nombre: </label>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-lg-2 col-md-offset-2">
									<input type="text" class="form-control" id="matricula" name="matricula" value="" onblur="Alumno(this.value);" required="required" />
								</div>
								
								<div class="col-lg-6">
									<input type="text" class="form-control" id="nombre_alumno" name="alumno" value="" readonly="readonly" size="50" />
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-md-offset-2">
									<label for="Clave_materia">Clave Materia: </label>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<label for="nombre_materia">Materia: </label>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-lg-2 col-md-offset-2">
									<input type="text" class="form-control" id="Clave_materia" name="clave_materia" value="" onblur="Materia(this.value);" required="required" />
								</div>
								
								<div class="col-lg-6">
									<input type="text" class="form-control" id="nombre_materia" name="materia" value="" readonly="readonly" size="50" />
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-md-offset-2">
									<label for="Grupo">Grupo: </label>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<div class="col-lg-2 col-md-offset-2">
								<input type="text" class="form-control" id="Grupo" name="grupo" required="required" />
								<input type="hidden" class="form-control" id="periodo" name="periodo" value="<?php echo$periodo;?>" />
								<input type="hidden" class="form-control" id="fecha" name="fecha" value="<?php echo$fecha;?>" />
							</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="reset" class="btn btn-danger col-md-offset-5"><img src="img/Delete.png" alt="reset" width="45"></button>
								<button class="btn btn-primary" ><img src="img/printer.png" alt="imprimir" width="45"></button>
								
							</td>
						</tr>
					</table>
				</form>
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