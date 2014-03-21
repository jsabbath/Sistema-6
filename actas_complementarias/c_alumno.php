<?php
		include('conectar_db.php');

		if(isset($_GET['matricula']) &&	$_GET['matricula'] != null){

			$ver = mysql_query("SELECT * FROM Alumnos_escolar WHERE matricula=".$_GET['matricula']);

				while ($row=mysql_fetch_assoc($ver)) {

					$nombre  = $row['nombre'];
					$paterno = $row['paterno'];
					$materno = $row['materno'];
			?>
				<script type="text/javascript">
					window.parent.document.getElementById('nombre').value = '<?php echo $row["nombre"]; ?>';
					window.parent.document.getElementById('paterno').value = '<?php echo $row["paterno"]; ?>';
					window.parent.document.getElementById('materno').value = '<?php echo $row["materno"]; ?>';
					window.parent.document.getElementById('carrera').value = '<?php echo $row["clave_carrera"]; ?>';
				</script>
			<?php
			}

		}
?>