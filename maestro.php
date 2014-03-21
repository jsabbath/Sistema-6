<script language="javascript" >

function devolverValor() {

opener.document.forms["form1"].maestro.value = document.forms["formHijo"].campo.value;
opener.document.forms["form1"].noemp.value = document.forms["formHijo"].campo2.value;
window.close();
}
</script>
<?php
	$noEmp = $_GET['noEmp'];

	if ($noEmp == 18044) {
		echo "
		<form name='formHijo'>
		<input type='text' name='campo2' readonly='readonly' size='5' value='18044' /><input type='text' name='campo' readonly='readonly' value='Oscar Manuel Madrigal Lizarraga' /> <input type='button' value='Aceptar' onclick='Javascript:devolverValor();' />
		</form>" ;
	}

?>