<?php
	//Definir datos de conexion con el servidor MySQL
	$elUsr = "root";
	$elPw  = "";
	$elServer ="localhost";
	$laBd = "sistema_ce";
	
	//Conectar
	$conexio = mysql_connect($elServer, $elUsr , $elPw) or die (mysql_error());
	
	//Seleccionar la BD a utilizar
	mysql_select_db($laBd, $conexio ) or die (mysql_error());

?>
