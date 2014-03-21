<?php
include('conectar_db.php');

$matri = $_POST['matricula'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$carrera = $_POST['carrera'];
$etapa = $_POST['etapa'];
$tipo = $_POST['tipo'];


$alum=mysql_query("select matricula from Alumnos_escolar where matricula='$matri'"); 
if(mysql_num_rows($alum)>0) 
{ 
header("Location: index.php?mensaje=2");

} 

else
{

$sql = "INSERT INTO Alumnos_escolar (matricula,nombre,paterno,materno,carrera,etapa,tipo) VALUES ('$matri','$nombre','$paterno','$materno','$carrera','$etapa','$tipo')";
mysql_query($sql);
header("Location: index.php?mensaje=1");
}


?>
