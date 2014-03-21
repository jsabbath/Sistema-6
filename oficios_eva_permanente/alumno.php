<?php

		include('conectar_db.php');



		if(

			isset($_GET['matricula']) &&

			$_GET['matricula'] != null

		){

			$ver = mysql_query("SELECT concat(nombre,' ',paterno,' ',materno) as nombres FROM Alumnos_escolar WHERE matricula=".$_GET['matricula']);

				while ($row=mysql_fetch_assoc($ver)) {

					# code...

					$nombre = $row['nombres'];

				}

			?>

				<script type="text/javascript">

					window.parent.document.getElementById('nombre_alumno').value = '<?php echo $nombre; ?>'; // Aquí haces el echo del nombre con php, puse la cédula para que veas que funciona.

				</script>

			<?php

		}

	

	?>