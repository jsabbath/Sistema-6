
<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<div class="table-responsive">
	<table class="table">
		<tr class='active'>
			<th>No. Lista</th>
			<th>No. Acta</th>
			<th>Clave Materia</th>
			<th>Materia</th>
			<th>Grupo</th>
			<th>No. Empleado</th>
			<th>Maestro</th>
		</tr>

		<?php
			include('conectar_db.php');
			$lista = $_POST['lista'];
			$num = 0;
			$ver = mysql_query("SELECT * FROM lista WHERE id_lista='$lista' ORDER BY no_acta");
			while ($row=mysql_fetch_assoc($ver)) {
				$num++;
				echo "<tr class='success'>";
				echo "<td align='center'>".$num."</td>";
				echo "<td align='center'>".$row['no_acta']."</td>";
				echo "<td align='center'>".$row['clave_materia']."</td>";
				echo "<td align='center'>".$row['materia']."</td>";
				echo "<td align='center'>".$row['grupo']."</td>";
				echo "<td align='center'>".$row['no_emp']."</td>";
				echo "<td align='center'>".$row['empleado']."</td>";
				echo "</tr>";
			}
		?>
	</table>
</div>