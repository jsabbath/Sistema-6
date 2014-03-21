<?php  

include('conex.php');

$acta=$_GET['acta'];

$ver=mysql_query("SELECT * FROM actas_capturadas WHERE no_acta=".$acta);
while ($row=mysql_fetch_assoc($ver)) {
	$tipo=$row['tipo'];
	$unidad=$row['clave_unidad'];
	$clave_carrera=$row['clave_carrera'];
	$plann=$row['plann'];
	$clave_materia=$row['clave_materia'];
	$etapa=$row['etapa'];
	$grupo=$row['grupo'];
	$periodo=$row['periodo'];
	$motivo=$row['motivo'];
	$noemp=$row['noemp'];
	$maestro=$row['nombre_emp'];
}

$content= "<table border='1'>
	<tr>
		<td width='740' height='25' align='center' colspan='5'>".$tipo."</td>
	</tr>
	<tr>
		<td align='right' colspan='5'>07-01-14</td>
	</tr>
	<tr>
		<td>".$unidad."</td>";
	if ($unidad == 90) {
		$nomunidad="FACULTAD DE CIENCIAS ADMINISTRATIVAS";
	}
	if ($unidad == 91) {
		$nomunidad="FACULTAD DE CIENCIAS ADMINISTRATIVAS (Ciudad Morelos)";
	}
	if ($unidad == 92) {
		$nomunidad="FACULTAD DE CIENCIAS ADMINISTRATIVAS (San Felipe)";
	}
$content.="<td>".$nomunidad."</td>
		<td>".$clave_carrera."</td>";
	if($clave_carrera==3){$carrera="LICENCIADO EN INFORMATICA";}
	if($clave_carrera==5){$carrera="LICENCIADO EN CONTABILIDAD";}
	if($clave_carrera==1){$carrera="CONTADOR PUBLICO";}
	if($clave_carrera==2){$carrera="LICENCIADO EN ADMINISTRACION DE EMPRESAS";}
	if($clave_carrera==4){$carrera="LICENCIADO EN NEGOCIOS INTERNACIONALES";}
	if($clave_carrera==10){$carrera="LICENCIADO EN MERCADOTECNIA";}
	if($clave_carrera==9){$carrera="LICENCIADO EN TURISMO";}
	if($clave_carrera==11){$carrera="LICENCIADO EN GESTION TURISTICA";}
	if($clave_carrera==57){$carrera="TRONCO COMUN";}
	if($clave_carrera==90){$carrera="POSGRADO";}
$content.="<td colspan='1'>".$carrera."</td>
		<td>".$plann."</td>
	</tr>
	<tr>
		<td colspan='5'>
			<table border='1'>
				<tr>
					<td width='50'>".$clave_materia."</td>";
				$ver2=mysql_query("SELECT * FROM Materias WHERE clave=".$clave_materia);
			while ($row=mysql_fetch_assoc($ver2)) {
				$materia=$row['materia'];
			}	
			$content.="	<td width='300'>".$materia."</td>
					<td width='100'>".$etapa."</td>
					<td width='50'>".$grupo."</td>";
			$ciclo = mb_substr($periodo,5,5);
				if ($ciclo==1) {
					$ciclo="FEB-JUN";
				}
				if ($ciclo==2) {
					$ciclo="AGO-DIC";
				}
			$content.="<td width='100'>".$ciclo."</td>
					<td width='50'>".$periodo."</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td height='25' colspan='5'></td>
	</tr>
	";
	$num=0;
	$ver3=mysql_query("SELECT * FROM acta_detalles WHERE no_acta=".$acta);
	while ($row=mysql_fetch_assoc($ver3)) {
		$num++;
$content.="<tr>
		<td align='center' height='25'>".$num."</td>
		<td align='center' height='25'>".$row['nombre_al']."</td>
		<td align='center' height='25'>".$row['matricula']."</td>
		<td align='center' height='25'>".$row['numero']."</td>
		<td align='center' height='25'>".$row['letra']."</td>
	</tr>
";
}
$content.="
		
		<tr>
			<td align='left' height='25' colspan='5'>Motivo: ".$motivo."</td>
		</tr>
		<tr>
			<td align='left' height='25' >".$noemp."</td>
			<td align='left' height='25' colspan='5'>".$maestro."</td>
		</tr>
		<tr>
			<td align='left' height='25' colspan='5'>Numero de Acta Complementaria: ".$acta."</td>
		</tr>
	</table>";

require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('Oficio.pdf');

?>
