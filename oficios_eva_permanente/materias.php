<?php
		include('conectar_db.php');

		if(
			isset($_GET['clave_materia']) &&
			$_GET['clave_materia'] != null
		){
			$ver = mysql_query("SELECT * FROM Materias WHERE clave=".$_GET['clave_materia']);
				while ($row=mysql_fetch_assoc($ver)) {
					# code...
					$nombre = $row['materia'];
				}
			?>
				<script type="text/javascript">
					window.parent.document.getElementById('nombre_materia').value = '<?php echo $nombre; ?>'; // Aquí haces el echo del nombre con php, puse la cédula para que veas que funciona.
				</script>
			<?php
		}
	
	?>