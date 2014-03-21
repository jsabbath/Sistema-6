<?php
	if(!$row2['motivo'])
	{
		include('conectar_db.php');
	}
	
	//$sql = "SELECT * FROM universidad ORDER BY uni";
	$ver = mysql_query("SELECT * FROM motivo ORDER BY motivo");

	while ($row=mysql_fetch_assoc($ver)) 
	{
		//$uni = utf8_encode($row["uni"]);
		echo "<option value='".$row["motivo"]."'";
		if ($row["motivo"]==$row2["motivo"])
			{
				echo " selected";
			}
		echo ">".$row["motivo"]."</option>";
	}
?>