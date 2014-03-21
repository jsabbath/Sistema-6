<?php

$content = "
			<style>
			table {
		        border-collapse: collapse;
		    }
			</style>
				<table border='1' class='table'>
					<tr>
						<th align='center'>No.</th>
						<th align='center'>No. Acta</th>
						<th align='center'>Clave Materia</th>
						<th align='center'>Materia</th>
						<th align='center'>Grupo</th>
						<th align='center'>No. Empleado</th>
						<th align='center'>Maestro</th>
					</tr>";
					include('../conectar_db.php');
					$lista = $_POST['lista'];
					$num=0;
					$ver = mysql_query("SELECT * FROM lista WHERE id_lista='$lista' ORDER BY no_acta");
							while ($row=mysql_fetch_assoc($ver)) {
							$num++;
$content .= " 
					<tr>
						<td align='center'>".$num."</td>
						<td align='center'>".$row['no_acta']."</td>
						<td align='center'>".$row['clave_materia']."</td>
						<td align='center'>".$row['materia']."</td>
						<td align='center'>".$row['grupo']."</td>
						<td align='center'>".$row['no_emp']."</td>
						<td align='center'>".$row['empleado']."</td>
					</tr>";
				}
$content .= " 
				</table>
";

require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('lista_de_actas.pdf');
?>