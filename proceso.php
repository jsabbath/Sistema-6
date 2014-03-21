<?php
	include('conectar_db.php');

 	$nombre = $_POST['nombre'];
 	$paterno = $_POST['paterno'];
 	$materno = $_POST['materno'];
 	$email = $_POST['email'];
 	$user = $_POST['user'];
 	$password = $_POST['password'];
 	$tipo = $_POST['tipo'];
 	$fecha = date("Y-m-d");

 	$pass = md5($password);

	$save = mysql_query("INSERT INTO users (nombre,paterno,materno,correo,username,password,id_TipoUsuario,dt_registro) VALUES ('$nombre','$paterno','$materno','$email','$user','$pass','$tipo','$fecha')");

	
		header("Location: login2.php");
	
?>