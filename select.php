<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ventana emergente con select</title>
	<script>
	//abro una nueva ventana con javascript
	
		function materia()
		{
		var id_carrera=document.getElementById("carrera").value;
		lista = window.open('materias.php?id='+id_carrera,'Materias','width=500, height=455, scrollbars=yes, menubar=no');

		}
	</script>
</head>
<body>
	<form action="" metod="POST" name="form1">
		<select name="carrera" id="carrera" onChange="materia()">
			<option value="">Seleccionar</option>
		<?
			include("conectar_db.php");

			$ver = mysql_query("SELECT * FROM Carrera");
			while ($row=mysql_fetch_assoc($ver)) {
				# code...
				echo "<option value='".$row['clave_carrera']."'>".$row['carrera']."</option>";
			}
		?>
		</select>
		<br><br>
		<input type="text" name="clave_materia" readonly="readonly" placeholder="Clave Materia" >
		<br>
		<input type="text" name="nombre_materia" readonly="readonly" placeholder="Materia" >
		<br>
		<input type="text" name="id_materia" readonly="readonly" placeholder="Id Materia" />
		<br>
		<br>
		<input type="reset" value="Reset">
	</form>
</body>
</html>