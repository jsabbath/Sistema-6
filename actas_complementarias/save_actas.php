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

	//if ($noemp == null) {
		$save_detalles=mysql_query("INSERT INTO acta_detalles (no_acta,matricula,numero,letra,nombre_al)VALUES('$acta','$matricula','$calificacion','$nombre_calificacion','$alumno')");
	/*}
	else{
		$save_capturadas =mysql_query("INSERT INTO actas_capturadas (no_acta,clave_unidad,periodo,tipo,clave_carrera,clave_materia,etapa,plann,grupo,motivo,dia,mes,ano,noemp,nombre_emp,hora)VALUES('$acta','$unidad','$periodo','$tipo_examen','$carrera','$id_materia','$etapa','$plan','$grupo','$motivo','$dia','$mes','$ano','$noemp','$emp','$hora')");
	
		$save_detalles=mysql_query("INSERT INTO acta_detalles (no_acta,matricula,numero,letra,nombre_al)VALUES('$acta','$matricula','$calificacion','$nombre_calificacion','$alumno')");
	}*/
	

	//header("Location: acta.php?acta=".$acta);
?>
<form name="formulario" method="POST" action="actas.php">
    <input type="hidden" name="acta" value="<?php echo$acta; ?>">
</form>
<script type="text/javascript"> 
    document.formulario.submit();
</script>