<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>Control Escolar</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<form action='guarda_materia.php' method='POST' class="form-inline" role"form">
<fieldset>

<!-- Form Name -->
<legend>Agregar Materia</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="clave">Clave:</label>
  <div class="controls">
    <input id="clave" name="clave" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="materia">Materia:</label>
  <div class="controls">
    <input id="materia" name="materia" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>
<div>
 			<tr>
                      	<td>
                      		<label>       Carrera: </label>
						<select name= 'carrera' class="selectpicker">
                                           <option value='1'>CONTADOR PUBLICO</option>
                                           <option value='2'>LICENCIADO EN ADMINISTRACION DE EMPRESAS</option>
         					 <option value='3'>INFORMATICA</option>
         					 <option value='4'>NEGOCIOS INTERNACIONALES</option>
         					 <option value='5'>CONTADURIA</option>
         					 <option value='9'>TURISMO</option>
         					 <option value='10'>MERCADOTECNIA</option>
					        <option value='57'>TRONCO COMUN</option>
					        <option value='61'>TRONCO COMUN, TURISMO Y MERCADOTECNIA</option>
	  					 <option value='11'>LICENCIADO EN GESTION TURISTICA</option>
                                          </select>
                           </td>
                      </tr>
</div>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="plan">Plan:</label>
  <div class="controls">
    <input id="plan" name="plan" type="text" placeholder="" class="input-xlarge" required="">
    
  </div>
</div>


<div>
                   <tr>
                      	<td>
                      		<label>       Etapa: </label>
						<select name= 'etapa' class="selectpicker">
                                          <option value='1'>BASICA</option>
                                          <option value='2'>DISCIPLINARIA</option>
                                          <option value='3'>TERMINAL</option>
                                          </select>
                           </td>
                      </tr>
</div>




<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="guardar"></label>
  <div class="controls">
    <button type="submit" name="Guardar" class="btn btn-primary">Guardar</button>
    <button type="reset" name="Cancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
</body>