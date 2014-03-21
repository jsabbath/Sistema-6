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
<form action='guarda_maestro.php' method='POST' class="form-inline" role="form">
<fieldset>

<!-- Form Name -->
<legend>Agregar Maestro</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="noemp">No. Empleado:</label>
  <div class="controls">
    <input id="noemp" name="noemp" type="text" placeholder="placeholder" class="input-small" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombre">Nombre:</label>
  <div class="controls">
    <input id="nombre" name="nombre" type="text" placeholder="placeholder" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="paterno">Apellido Paterno:</label>
  <div class="controls">
    <input id="paterno" name="paterno" type="text" placeholder="placeholder" class="input-large" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="materno">Apellido Materno:</label>
  <div class="controls">
    <input id="materno" name="materno" type="text" placeholder="placeholder" class="input-large" required="">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="guardar"></label>
  <div class="controls">
    <button type="submit" name="Guardar" class="btn btn-primary" >Guardar</button>
    <button type="reset" name="Cancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>
</body>
