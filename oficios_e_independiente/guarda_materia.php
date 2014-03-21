<?php
include('conectar_db.php');

$clave = $_POST['clave'];
$materia = $_POST['materia'];
$carrera = $_POST['carrera'];
$plan = $_POST['plan'];
$etapa = $_POST['etapa'];


$alum=mysql_query("select clave from Materias where clave='$clave'"); 
if(mysql_num_rows($alum)>0) 
{ 
header("Location: index.php?mensaje=2");

} 

else
{

$sql = "INSERT INTO Materias (clave,materia,carrera,plann,etapa) VALUES ('$clave','$materia','$carrera','$plan','$etapa')";
mysql_query($sql);
header("Location: index.php?mensaje=1");
}


?>
