<?php  
	include('conectar_db.php');

	$acta = $_POST['acta'];
	$tipo_examen = $_POST['tipo_examen'];
	$unidad = $_POST['unidad'];
	$fecha = $_POST['fecha'];
	$noemp = $_POST['noemp'];
	$emp = $_POST['emp'];
	$carrera = $_POST['carrera'];
	$id_materia = $_POST['id_materia'];
	$nombre_materia = $_POST['nombre_materia'];
	$plan = $_POST['plan'];
	$etapa = $_POST['etapa'];
	$grupo = $_POST['grupo'];
	$periodo = $_POST['periodo'];
	$motivo = $_POST['motivo'];
	$matricula = $_POST['matricula'];
	$alumno = $_POST['alumno'];
	$calificacion = $_POST['calificacion'];
	$nombre_calificacion = $_POST['nombre_calificacion'];
	$ano = mb_substr($fecha,0,4);
  	$mes = mb_substr($fecha,5,2);
  	$dia = mb_substr($fecha,8,8);
	$hora = date("h:i:s");

	if ($matricula == null) {
		$modif_capturadas =mysql_query("UPDATE actas_capturadas SET clave_unidad='$unidad', periodo='$periodo', tipo='$tipo_examen', clave_carrera='$carrera', clave_materia='$id_materia', etapa='$etapa', plann='$plan', grupo='$grupo', motivo='$motivo', dia='$dia', mes='$mes', ano='$ano', noemp='$noemp', nombre_emp='$emp', hora='$hora' WHERE no_acta=".$acta);
	}
	else{
		$modif_capturadas =mysql_query("UPDATE actas_capturadas SET clave_unidad='$unidad', periodo='$periodo', tipo='$tipo_examen', clave_carrera='$carrera', clave_materia='$id_materia', etapa='$etapa', plann='$plan', grupo='$grupo', motivo='$motivo', dia='$dia', mes='$mes', ano='$ano', noemp='$noemp', nombre_emp='$emp', hora='$hora' WHERE no_acta=".$acta);
	
		//$modif_detalles=mysql_query("UPDATE acta_detalles SET matricula='$matricula', numero='$calificacion', letra='$nombre_calificacion', nombre_al='$alumno' WHERE no_acta=".$acta);
		$insert_detalles=mysql_query("INSERT INTO acta_detalles (no_acta,matricula,numero,letra,nombre_al)VALUES('$acta','$matricula','$calificacion','$nombre_calificacion','$alumno')");
	}
	

	//header("Location: acta.php?acta=".$acta);
?>
<form name="formulario" method="POST" action="m_acta.php">
    <input type="hidden" name="m_acta" value="<?php echo$acta; ?>">
</form>
<script type="text/javascript"> 
    document.formulario.submit();
</script>