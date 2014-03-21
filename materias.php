<!doctype html>
<html lang="es">
<head>
	<link rel='stylesheet' href='css/bootstrap-theme.css'>
	<link rel='stylesheet' href='css/bootstrap-theme.min.css'>
	<link rel='stylesheet' href='css/bootstrap.css'>
	<link rel='stylesheet' href='css/bootstrap.min.css'>

	<script language="javascript" >

	function devolverValor() {

	//opener.document.forms["form1"].id_materia.value = document.forms["formHijo"].idmateria.value;
	//opener.document.forms["form1"].clave_materia.value = document.forms["formHijo"].clave.value;
	//opener.document.forms["form1"].nombre_materia.value = document.forms["formHijo"].materia.value
	//opener.document.forms["form1"].nombre_materia.value = document.getElementById("materia").value;
	//opener.document.forms["form1"].id_materia.value = document.getElementById("idmateria").value;
	//opener.document.forms["form1"].clave_materia.value = document.getElementById("clave").value;
	//window.close();
	}

	function escoge(id,materia,clave) {
        if (window.opener && !window.opener.closed){ 
           window.opener.document.form1.clave_materia.value = id;
           window.opener.document.form1.nombre_materia.value = materia;
           window.opener.document.form1.id_materia.value = clave;
           }
        window.close();

    }
	</script>
</head>
<body>
	<!--<div class="table-responsive">-->
		<table border="1" class="table table-condensed table-responsive table-striped table-hover">
			<tr bgcolor="#cccccc">
				<th>ID</th>
				<th>Materia</th>
				<th>Id Materia</th>
			</tr>
		<?php
		include("conectar_db.php");

		$id = $_GET['id'];

		$ver = mysql_query("SELECT distinct id,clave,materia FROM Materias WHERE carrera='$id' ORDER BY materia");
		while ($row=mysql_fetch_assoc($ver)) {
			# code...
		?>
			
			<tr>
				<td align="center"><a href="javascript&#058;escoge('<? echo $row['id']; ?>','<? echo $row['materia']; ?>','<? echo $row['clave']; ?>')"><? echo $row['id']; ?></a></td>
				<td align="center"><a href="javascript&#058;escoge('<? echo $row['id']; ?>','<? echo $row['materia']; ?>','<? echo $row['clave']; ?>')"><? echo $row['materia']; ?></a></td>
				<td align="center"><a href="javascript&#058;escoge('<? echo $row['id']; ?>','<? echo $row['materia']; ?>','<? echo $row['clave']; ?>')"><? echo $row['clave'] ?></a></td>
			</tr>
			
		<?php
			}
		?>
		</table>
	<!--</div>-->
</body>
</html>

