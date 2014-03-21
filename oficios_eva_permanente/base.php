<?php
include('conectar_db.php');

$noemp = $_POST['noemp'];
$emp = $_POST['emp'];
$matricula = $_POST['matricula'];
$nombre_alumno = $_POST['alumno'];
$idmateria = $_POST['clave_materia'];
$materia = $_POST['materia'];
$grupo = $_POST['grupo'];
$periodo = $_POST['periodo'];
$sql = "INSERT INTO eva_permanente (no_empleado,empleado,matricula,nombre_alumno,clave_materia,materia,grupo,periodo) VALUES ('$noemp','$emp','$matricula','$nombre_alumno','$idmateria','$materia','$grupo','$periodo');";
mysql_query($sql);
header("Location: http://facultaddecienciasadministrativas.com/sistema/oficios_eva_permanente/pdf/index.php?noemp=$noemp&emp=$emp&matricula=$matricula&alumno=$nombre_alumno&idmateria=$idmateria&materia=$materia&grupo=$grupo&periodo=$periodo");

?>