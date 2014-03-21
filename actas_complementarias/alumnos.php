<?php 
	$msj=$_GET['msj']; 
	if ($msj == 1) {
		$msj="<div class='alert alert-danger'>El Alumno ya Existe</div>";
	}
	if ($msj == 2) {
		$msj="<div class='alert alert-success'>Se Agrego Exitosamente al Alumno</div>";
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Alumno</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript">
		function Alumno(Matricula){
	        document.getElementById('iframe1').src= 'c_alumno.php?matricula=' + Matricula;
	    }
    </script>
</head>
<body>
	<div class="well">
		<form action="agregar_alumno.php" id="form" method="POST">
			<table border="0" class="table">
				<tr>
					<td align="center" colspan="2"><img src="img/user.png" width="40" alt="Alumno"></td>
				</tr>
				<tr>
					<td align="center"><label for="matricula">Matricula:</label></td>
					<td align="center"><input type="text" id="matricula" onblur="Alumno(this.value);" class="form-control" name="matricula" placeholder="Matricula" required></td>
				</tr>
				<tr>
					<td align="center"><label for="nombre">Nombre:</label></td>
					<td align="center"><input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required></td>
				</tr>
				<tr>
					<td align="center"><label for="paterno">Paterno:</label></td>
					<td align="center"><input type="text" id="paterno" name="paterno" class="form-control" placeholder="Apellido Paterno" required></td>
				</tr>
				<tr>
					<td align="center"><label for="materno">Materno:</label></td>
					<td align="center"><input type="text" id="materno" name="materno" class="form-control" placeholder="Apellido Materno" required></td>
				</tr>
				<tr>
					<td align="center"><label for="carrera">Carrera:</label></td>
					<td align="center">
						<select name="carrera" class="form-control" id="carrera" required>
							<option value="">- -Selecciona Carrera- -</option>
							<?php include('carrera.php'); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2"><button id="submit" class="btn btn-primary">Aceptar</button></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><?php echo $msj; ?></div></td>
				</tr>
			</table>
			
		</form>
	</div>

	<iframe id="iframe1" src="c_alumno.php" width="0" height="0" frameborder="0"></iframe>
</body>
</html>
