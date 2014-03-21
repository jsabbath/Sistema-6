<?php

		include('conectar_db.php');



		if(

			isset($_GET['calificacion']) &&

			$_GET['calificacion'] != null

		){

			$ver = mysql_query("SELECT * FROM calificaciones WHERE numero=".$_GET['calificacion']);

				while ($row=mysql_fetch_assoc($ver)) {

					# code...

					$nombre = $row['nombre'];

				}

			?>

				<script type="text/javascript">

					window.parent.document.getElementById('nombre_calificacion').value = '<?php echo $nombre; ?>'; // Aquí haces el echo del nombre con php, puse la cédula para que veas que funciona.

				</script>

			<?php

		}

	

	?>