<?php
include('conectar_db.php');

$noemp = $_POST['noemp'];
$emp = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$nuevo_usuario=mysql_query("select no_empleado from empleados where no_empleado='$noemp'"); 
if(mysql_num_rows($nuevo_usuario)>0) 
{ 
header("Location: index.php?mensaje=2");

} 

else
{

$sql = "INSERT INTO empleados (no_empleado,nombre,paterno,materno) VALUES ('$noemp','$emp','$paterno','$materno')";
mysql_query($sql);
header("Location: index.php?mensaje=1");
}


?>
