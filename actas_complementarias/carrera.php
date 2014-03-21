<?php
	if(!$row2['clave_carrera'])
	{
		include('conectar_db.php');
	}
	
	$sql = "SELECT * FROM Carrera ORDER BY uni";
	$ver = mysql_query("SELECT * FROM Carrera ORDER BY carrera");

	while ($row=mysql_fetch_assoc($ver)) 
	{
		//$uni = utf8_encode($row["clave_carrera"]);
		echo "<option value='".$row["clave_carrera"]."'";
		if ($row["clave_carrera"]==$row2["clave_carrera"]) 
			{
				echo " selected";
			}
		echo ">".$row["carrera"]."</option>";
	}
?>