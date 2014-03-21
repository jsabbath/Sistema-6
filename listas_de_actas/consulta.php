<?php

$numero=$_POST['numero'];
$opcion=$_POST['busqueda'];
$periodo=$_POST['periodo'];
	
	switch ($numero) {
		case 1:
			$buscar= $opcion;
			header("Location: busqueda.php?busqueda=$buscar&opcion=$numero&periodo=$periodo");
			break;
		
		case 2:
			$buscar= $opcion;
			header("Location: busqueda.php?busqueda=$buscar&opcion=$numero&periodo=$periodo");
			break;

		case 3:
			$buscar= $opcion;
			header("Location: busqueda.php?busqueda=$buscar&opcion=$numero&periodo=$periodo");
			break;

		case 4:
			$buscar= $opcion;
			header("Location: busqueda.php?busqueda=$buscar&opcion=$numero&periodo=$periodo");
			break;

		case 5:
			$buscar= $opcion;
			header("Location: busqueda.php?busqueda=$buscar&opcion=$numero&periodo=$periodo");
			break;

		default:
			$buscar= $opcion;
			header("Location: busqueda.php?busqueda=$buscar&opcion=$numero&periodo=$periodo");
			break;
	}
?>