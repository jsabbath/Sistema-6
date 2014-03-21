<?php
		include('conectar_db.php');
		$periodo = $_POST['periodo'];
		$tipo = $_POST['tipo'];
		$examen = $_POST['examen'];
		$fecha = date("d")."/".date("m")."/".date("Y");
		$hora = date("H:i:s");
		$lista = $_POST['lista'];

		if (isset($lista)) {

			$noacta=$_POST['Noacta'];
			$clave_materia=$_POST['clave_materia'];
			$materia=$_POST['materia'];
			$grupo=$_POST['grupo'];
			$noemp=$_POST['noemp'];
			$emp=$_POST['emp'];

			//echo $noacta." ".$clave_materia." ".$materia." ".$grupo." ".$noemp." ".$emp;

			$save = mysql_query("INSERT INTO lista (id_lista,periodo,tipo_lista,tipo_examen,fecha,hora,
				no_acta,clave_materia,materia,grupo,no_emp,empleado) VALUES ('$lista','$periodo','$tipo','$examen',
				'$fecha','$hora','$noacta','$clave_materia','$materia','$grupo','$noemp','$emp')");

			header("Location:lista.php?periodo=".$periodo."&tipo=".$tipo."&examen=".$examen."&lista=".$lista);
		}
		
?>