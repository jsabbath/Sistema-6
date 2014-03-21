<?php  
	include("conex.php");

	$matri   = $_POST['matricula'];
	$nombre  = $_POST['nombre'];
	$paterno = $_POST['paterno'];
	$materno = $_POST['materno'];
	$carrera = $_POST['carrera'];

	//print_r($_POST);
	
	$find = mysql_query("SELECT * FROM Alumnos_escolar WHERE matricula=".$matri);
	while ($row=mysql_fetch_assoc($find)) {
		$matricula=$row['matricula'];
	}

	if ($matricula == $matri) {
			header("Location:alumnos.php?msj=1");
		}
		else{
			header("Location:alumnos.php?msj=2");
		}

?>