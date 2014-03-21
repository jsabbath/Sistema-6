<?php
	if(!$row2['periodo'])
	{
		include('conectar_db.php');
	}
	
	$sql = "SELECT * FROM universidad ORDER BY uni";
	$ver = mysql_query("SELECT * FROM periodo ORDER BY periodo");

	while ($row=mysql_fetch_assoc($ver)) 
	{
		//$uni = utf8_encode($row["uni"]);
		echo "<option value='".$row["periodo"]."'";
		if ($row["periodo"]==$row2["periodo"])
			{
				echo " selected";
			}
		echo ">".$row["periodo"]."</option>";
	}
?>