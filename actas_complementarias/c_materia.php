<?php
		include('conectar_db.php');

		if(isset($_GET['clave']) &&	$_GET['clave'] != null){

			$ver = mysql_query("SELECT * FROM Materias WHERE clave=".$_GET['clave']);

				while ($row=mysql_fetch_assoc($ver)) {

					$materia  = $row['materia'];
					$carrera = $row['clave_carrera'];
					$plan  = $row['plann'];
					$etapa  = $row['etapa'];
				

			?>
				<script type="text/javascript">
					window.parent.document.getElementById('materia').value = '<?php echo $row["materia"]; ?>';
					window.parent.document.getElementById('carrera').value = '<?php echo $row["clave_carrera"]; ?>';
					window.parent.document.getElementById('plan').value = '<?php echo $row["plann"]; ?>';
					window.parent.document.getElementById('etapa').value = '<?php echo $row["etapa"]; ?>';
				</script>
			<?php
			}

		}
?>