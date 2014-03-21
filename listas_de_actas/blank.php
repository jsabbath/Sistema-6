<?php
	include('conectar_db.php');

	$busqueda=$_GET['busqueda'];
	$opcion=$_GET['opcion'];

	switch ($opcion) {
		case 1:
			echo "Entro esto: ".$busqueda;
			break;

		case 2:
			echo "Entro esto: ".$busqueda;
			break;
		case 3:
			echo "Entro esto: ".$busqueda;
			break;

		case 4:
			echo "Entro esto: ".$busqueda;
			break;
		case 5:
			echo "Entro esto: ".$busqueda;
			break;
		
		default:
			echo "HOLA MUNDO" .$busqueda;
			break;
	}
?>