<?php
	if(!$row2['clave_unidad'])
	{
		include('conectar_db.php');
	}
	
	$sql = "SELECT * FROM universidad ORDER BY uni";
	$ver = mysql_query("SELECT * FROM universidad ORDER BY uni");

	while ($row=mysql_fetch_assoc($ver)) 
	{
		//$uni = utf8_encode($row["uni"]);
		echo "<option value='".$row["id_uni"]."'";
		if ($row["id_uni"]==$row2["clave_unidad"])
			{
				echo " selected";
			}
		echo ">".$row["uni"]."</option>";
	}
?>