<?php
		include('conectar_db.php');

		if(isset($_GET['matricula']) &&	$_GET['matricula'] != null){

			$ver = mysql_query("SELECT concat(nombre,' ',paterno,' ',materno) as nombres FROM Alumnos_escolar WHERE matricula=".$_GET['matricula']);

				while ($row=mysql_fetch_assoc($ver)) {

					$nombres = $row['nombres'];

				}

			?>
				<script type="text/javascript">
					window.parent.document.getElementById('alumno').value = '<?php echo $nombres; ?>'; // Aquí haces el echo del nombre con php, puse la cédula para que veas que funciona.
				</script>
			<?php

		}

	

	?>