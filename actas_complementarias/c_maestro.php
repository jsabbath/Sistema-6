<?php
		include('conectar_db.php');

		if(isset($_GET['noemp']) &&	$_GET['noemp'] != null){

			$ver = mysql_query("SELECT * FROM empleados WHERE no_empleado=".$_GET['noemp']);

				while ($row=mysql_fetch_assoc($ver)) {

					$nombre  = $row['nombre'];
					$paterno = $row['paterno'];
					$materno = $row['materno'];
				}

			?>
				<script type="text/javascript">
					window.parent.document.getElementById('nombre').value = '<?php echo $nombre; ?>';
					window.parent.document.getElementById('paterno').value = '<?php echo $paterno; ?>';
					window.parent.document.getElementById('materno').value = '<?php echo $materno; ?>';
				</script>
			<?php

		}
?>