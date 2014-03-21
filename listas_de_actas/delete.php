<?php
		include('conectar_db.php');
		$periodo = $_POST['periodo'];
		$tipo = $_POST['tipo'];
		$examen = $_POST['examen'];
		$fecha = date("d")."/".date("m")."/".date("Y");
		$lista = $_POST['lista'];

		if (isset($lista)) {

			$noacta=$_POST['Noacta'];
			$clave_materia=$_POST['clave_materia'];
			$materia=$_POST['materia'];
			$grupo=$_POST['grupo'];
			$noemp=$_POST['noemp'];
			$emp=$_POST['emp'];

			//echo $noacta." ".$clave_materia." ".$materia." ".$grupo." ".$noemp." ".$emp;

			$save = mysql_query("DELETE FROM lista WHERE id_lista='$lista' AND periodo='$periodo' AND tipo_lista='$tipo' AND tipo_examen='$examen' AND fecha='$fecha' AND 
				no_acta='$noacta' AND clave_materia='$clave_materia' AND materia='$materia' AND grupo='$grupo' AND no_emp='$noemp' AND empleado='$emp' ");

			header("Location:lista.php?periodo=".$periodo."&tipo=".$tipo."&examen=".$examen."&lista=".$lista);
		}
		
?>