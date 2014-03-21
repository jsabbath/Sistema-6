<?php  
	include("conex.php");

	$noemp   = $_POST['noemp'];
	$nombre  = $_POST['nombre'];
	$paterno = $_POST['paterno'];
	$materno = $_POST['materno'];

	//print_r($_POST);
	
	$find = mysql_query("SELECT * FROM empleados WHERE no_empleado=".$noemp);
	while ($row=mysql_fetch_assoc($find)) {
		$noemp2=$row['no_empleado'];
	}

	if ($noemp2 == $noemp) {
			header("Location:maestros.php?msj=1");
		}
		else{
			header("Location:maestros.php?msj=2");
		}

?>