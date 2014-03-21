<?php
		include('conectar_db.php');

		if(
			isset($_GET['noemp']) &&
			$_GET['noemp'] != null
		){
			$ver = mysql_query("SELECT concat(nombre,' ',paterno,' ',materno) as nombres FROM empleados WHERE no_empleado=".$_GET['noemp']);
				while ($row=mysql_fetch_assoc($ver)) {
					# code...
					$nombre = $row['nombres'];
				}
			?>
				<script type="text/javascript">
					window.parent.document.getElementById('nombre_maestro').value = '<?php echo $nombre; ?>'; // Aquí haces el echo del nombre con php, puse la cédula para que veas que funciona.
				</script>
			<?php
		}
?>