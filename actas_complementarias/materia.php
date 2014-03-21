<?php 
	$msj=$_GET['msj']; 
	if ($msj == 1) {
		$msj="<div class='alert alert-danger'>La Materia ya Existe</div>";
	}
	if ($msj == 2) {
		$msj="<div class='alert alert-success'>Se Agrego Exitosamente la Materia</div>";
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar Alumno</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript">
	    function Materia(clave){
	        document.getElementById('iframe2').src= 'c_materia.php?clave=' + clave;
	    }
    </script>
</head>
<body>
	<div class="well">
		<form action="materia_proceso.php" id="form" method="POST">
			<table border="0" class="table">
				<tr>
					<td align="center" colspan="2"><img src="img/user.png" width="40" alt="Alumno"></td>
				</tr>
				<tr>
					<td align="center"><label for="clave">Clave Materia:</label></td>
					<td align="center"><input type="text" id="clave" onblur="Materia(this.value);" class="form-control" name="clave" placeholder="Clave Materia" required></td>
				</tr>
				<tr>
					<td align="center"><label for="materia">Materia:</label></td>
					<td align="center"><input type="text" id="materia" name="materia" class="form-control" placeholder="Materia" required></td>
				</tr>
				<tr>
					<td align="center"><label for="carrera">Carrera:</label></td>
					<td align="center">
						<select name="carrera" id="carrera" class="form-control">
							<option value="">- -Selecciona Carrera- -</option>
							<?php include('carrera.php'); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"><label for="plan">Plan:</label></td>
					<td align="center"><input type="text" name="plan" class="form-control" id="plan" placeholder="Plan"></td>
				</tr>
				<tr>
					<td align="center"><label for="etapa">Etapa:</label></td>
					<td align="center"><input type="text" name="etapa" class="form-control" id="etapa" placeholder="Etapa"></td>
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

	<iframe id="iframe2" src="c_materia.php" width="0" height="0" frameborder="0"></iframe>
</body>
</html>
