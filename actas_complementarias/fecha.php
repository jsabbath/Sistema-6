<?php
	$fecha ="2013-09-02 14:00:00";
	$ciclo="2013-2";

	echo $fecha;
	echo "<br>";
	echo $ciclo;

echo "<br><br>";

$dia = mb_substr($fecha,0,4);
echo $dia."<br><br>";
  $mes = mb_substr($fecha,5,2);
  echo $mes."<br><br>";
  $ano = mb_substr($fecha,8,8);
  echo $ano."<br><br>";
  $hrs = mb_substr($ciclo,5,5);
  echo $hrs."<br><br>";
?>