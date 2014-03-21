<?php

include('conex.php');

$acta=$_GET['acta'];


$content = "
	<style>
	.oficio{
		font-size:14px;
	}
	table{
		margin-left:70px;
	}
	.table{
		border-collapse: collapse;
		margin-left:120px;
	}
	.table th{
		background-color:gray;
		color:white;
	}
	</style>
	<div class='oficio'>
	<table border='0'>
	<tr>
		<td width='600' height='25'><b>M.C. SANTIAGO PEREZ ALCALA</b></td>
	</tr>
	<tr>
		<td height='25'><b>FACULTAD DE CIENCIAS ADMINISTRATIVAS</b></td>
	</tr>
	<tr>
		<td height='25'><b>DIRECTOR</b></td>
	</tr>
	<tr>
		<td height='25'></td>
	</tr>
	<tr>
		<td align='center' height='25'>Por medio de la presente el (la) que suscribe, solicita autorizacion para la</td>
	</tr>";

	$ver=mysql_query("SELECT * FROM actas_capturadas WHERE no_acta=$acta");
	while ($row=mysql_fetch_row($ver)) {
		$tipo=$row[4];
		$clave=$row[6];
		$carrera=$row[5];
		$grupo=$row[9];
		$noemp=$row[14];
		$emp=$row[15];
	}
	if($carrera==3)
	{$ncarrera="LICENCIADO EN INFORMATICA";}
	if($carrera==5)
	{$ncarrera="LICENCIADO EN CONTABILIDAD";}
	if($carrera==1)
	{$ncarrera="CONTADOR PUBLICO";}
	if($carrera==2)
	{$ncarrera="LICENCIADO EN ADMINISTRACION DE EMPRESAS";}
	if($carrera==4)
	{$ncarrera="LICENCIADO EN NEGOCIOS INTERNACIONALES";}
	if($carrera==10)
	{$ncarrera="LICENCIADO EN MERCADOTECNIA";}
	if($carrera==9)
	{$ncarrera="LICENCIADO EN TURISMO";}
	if($carrera==11)
	{$ncarrera="LICENCIADO EN GESTION TURISTICA";}
	if($carrera==57)
	{$ncarrera="TRONCO COMUN";}
	if($carrera==90)
	{$ncarrera="POSGRADO";}
$content.="<tr>
		<td height='25'>Elaboracion de:&nbsp;<b>".$tipo."</b></td>
	</tr>";
	$ver2=mysql_query("SELECT * FROM Materias WHERE clave=$clave");
	while ($row=mysql_fetch_row($ver2)) {
		$materia=$row[2];
	}
$content.="<tr>
		<td height='25'>Materia:&nbsp;<b>".$materia."</b></td>
	</tr>
	<tr>
		<td height='25'>Clave:&nbsp;<b>".$clave."</b></td>
	</tr>
	<tr>
		<td height='25'>Carrera:&nbsp;<b>".$ncarrera."</b></td>
	</tr>
	<tr>
		<td height='50'>Grupo:&nbsp;<b>".$grupo."</b></td>
	</tr>
	<tr>
		<td align='center'>
			<table border='1' class='table'>
				<tr>
					<th align='center'>MATRICULA</th>
					<th align='center'>NOMBRE</th>
					<th align='center'>CALIFICACION</th>
				</tr>";
				$ver3=mysql_query("SELECT * FROM acta_detalles WHERE no_acta=$acta");
				while ($row=mysql_fetch_row($ver3)) {	
$content.="			<tr>
					<td align='center'>".$row[2]."</td>
					<td align='center'>".$row[5]."</td>
					<td align='center'>".$row[3]."</td>
					</tr>";
					}
$content.="	
			</table>
		</td>
	</tr>
	<tr>
		<td height='50'>Se anexa original</td>
	</tr>
	<tr>
		<td height='50'>Qudando en espera del benificio de su decision</td>
	</tr>
	<tr>
		<td height='0'></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td align='center' height='100'>Mexicali, B.C., a 17 de Diciembre del 2012</td>
	</tr>
	<tr>
		<td align='center' height='50'><b>".$emp."</b></td>
	</tr>
	<tr>
		<td align='center'>No. Empleado ".$noemp."</td>
	</tr>
	";

$content.="</table>
	</div>
";

require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Oficio.pdf');
?>