<?php
	if(!$row2['tipo'])
	{
		include('conectar_db.php');
	}
	
	//$sql = "SELECT * FROM universidad ORDER BY uni";
	$ver = mysql_query("SELECT * FROM examen ORDER BY examen");

	while ($row=mysql_fetch_assoc($ver)) 
	{
		//$uni = utf8_encode($row["uni"]);
		echo "<option value='".$row["examen"]."'";
		if ($row["examen"]==$row2["tipo"])
			{
				echo " selected";
			}
		echo ">".$row["examen"]."</option>";
	}
?>