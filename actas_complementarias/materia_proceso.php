<?php  
	include("conex.php");

	$clave   = $_POST['clave'];
	$materia = $_POST['materia'];

	//print_r($_POST);
	
	$find = mysql_query("SELECT * FROM Materias WHERE clave=".$clave);
	while ($row=mysql_fetch_assoc($find)) {
		$c_materia=$row['clave'];
	}

	if ($c_materia == $clave) {
			header("Location:materia.php?msj=1");
		}
		else{
			header("Location:materia.php?msj=2");
		}

?>