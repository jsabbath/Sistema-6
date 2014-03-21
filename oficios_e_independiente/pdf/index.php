<?php
$noemp = $_POST['noemp'];
$emp = $_POST['emp'];
$matricula = $_POST['matricula'];
$nombre_alumno = $_POST['alumno'];
$idmateria = $_POST['clave_materia'];
$materia = $_POST['materia'];
$grupo = $_POST['grupo'];
$periodo = $_POST['periodo'];
$fecha = $_POST['fecha'];

$content = " <table border='0' class='table'>
					<tr>
						<td align='center' height='50'><b>FACULTAD DE CIENCIAS ADMINISTRATIVAS</b></td>
					</tr>
					<tr>
						<td height='50'>Maestro(a):<b> ".$noemp." ".$emp."</b></td>
					</tr>
					<tr>
						<td height='50'><b>PRESENTE</b></td>
					</tr>
					<tr>
						<td height='50'>Por este conducto me permito saludarle y al mismo tiempo comunicarle que el alumno:</td>
					</tr>
					<tr>
						<td align='center' height='50'><b>".$matricula." ".$nombre_alumno."</b></td>
					</tr>
					<tr>
						<td align='justify'>Ha sido autorizado para tomar la modalidad de EXAMEN DE ESTUDIOS INDEPENDIENTE - de acuardo
						con Art. 73 del estatuto de Universidad Autonoma de Baja California - siendo asignado a clase de:</td>
					</tr>
					<tr>
						<td align='center' height='50'><b>".$idmateria." ".$materia."</b></td>
					</tr>
					<tr>
						<td align='center' height='50'><b>GRUPO ".$grupo."</b></td>
					</tr>
					<tr>
						<td align='justify'>Asi se leinforma que el estudiante tomara su clase durante el ciclo escolar ".$periodo." con
						las mismas obligaciones de los estudiantes asignados de manera regular. Usted debera tomar
						nota de la calificaciones derante el curso de semestre - en este proceso el alumno no aparecera
						en lista de segunda emision no asi en acta de evaluacion de ordinario, ni tiene derecho de
						solicitar examen extraordinario-. La captura de calificacion se realizara en periodo de captura de
						actas de REGULARIZACION en lugar, fecha y horario establecidos por la direccion. Se le
						recuerda ademas que estas calificaciones son susceptibles de la aplicacion del Art. 89 del
						estatuto escolar de la UABC</td>
					</tr>
					<tr>
						<td height='50'>Sin otro particular por el momento, quedo de usted</td>
					</tr>
					<tr>
						<td height='230'></td>
					</tr>
					<tr>
						<td align='center' height='50'><b>ATENTAMENTE</b></td>
					</tr>
					<tr>
						<td align='center' height='50'><b>POR LA REALIZACION PLENA DEL HOMBRE</b></td>
					</tr>
					<tr>
						<td align='center'><b>mexicali, B.C. ".$fecha."</b></td>
					</tr>
					<tr>
						<td height='10'></td>
					</tr>
					<tr>
						<td align='center'><b>M.C. Santiago Perez Alcala</b></td>
					</tr>
					<tr>
						<td align='center'><b>DIRECTOR</b></td>
					</tr>
				</table>";

require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
$html2pdf = new HTML2PDF('P','A4','fr');
$html2pdf->WriteHTML($content);
$html2pdf->Output('estudios_independientes.pdf');
?>