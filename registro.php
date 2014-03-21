<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<?php
		$error=$_GET['error'];

		if ($error == 1) {
			echo "Error en el guardado!!!";
		}
	?>
	<form action="proceso.php" method="POST">
		<label for="nombre">Nombre:</label>
			<br>
			<input type="text" id="nombre" name="nombre" placeholder="Nombre">
		
		<br>
		<label for="paterno">Apellido Paterno:</label>
			<br>
			<input type="text" id="paterno" name="paterno" placeholder="Paterno">
		
		<br>
		<label for="materno">Apellido Materno:</label>
			<br>
			<input type="text" id="materno" name="materno" placeholder="Materno">
		
		<br>
		<label for="email">Correo:</label>
			<br>
			<input type="text" id="email" name="email" placeholder="Email">
		
		<br>
		<label for="user">Username:</label>
			<br>
			<input type="text" id="user" name="user" placeholder="User">
		
		<br>
		<label for="password">Password:</label>
			<br>
			<input type="password" id="password" name="password" placeholder="Password">
		
		<br>
		<label for="tipo">Tipo de Usuario:</label>
			<br>
			<select name="tipo" id="tipo">
				<option value="">----------</option>
				<option value="1">Administrador</option>
				<option value="2">Usuario</option>
			</select>
		
		<br>
		<br>
		<input type="submit" value="Aceptar">
	</form>
</body>
</html>