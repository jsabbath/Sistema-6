<?php
include('conectar_db.php');

$periodo = $_POST['periodo'];
$matricula = $_POST['matricula'];



$per=mysql_query("select periodo,matricula from estudios_independientes where periodo='$periodo' and matricula='$matricula'"); 
if(mysql_num_rows($per)>0) 
{ 
  
	  $ofi=mysql_query("select * from estudios_independientes where periodo='$periodo' and matricula='$matricula'"); 
while($row=mysql_fetch_assoc($ofi))
{
	$noemp = $row['no_empleado'];
	$emp= $row['empleado'];
	$matricula = $row['matricula'];
	$nombre_alumno = $row['nombre_alumno'];
	$clave_materia = $row['clave_materia'];
	$materia = $row['materia'];
	$grupo = $row['grupo'];
	$periodo = $row['periodo'];
       $men=3;
header("Location: index.php?noemp=$noemp&emp=$emp&matricula=$matricula&alumno=$nombre_alumno&idmateria=$idmateria&materia=$materia&grupo=$grupo&periodo=$periodo&mensaje=$men");


}

} 
else
{
header("Location: index.php?mensaje=4");
}




?>
