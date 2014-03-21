<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.png">

    <title>.:: Login ::.</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    <!--
    jQuery(document).ready(function($) {
      $("#frmlogin").validate();
        $("#usuario").focus();
    });
    // -->
    </script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="frmlogin" name="frmlogin" method="POST" action="validarUsuario.php">
        <h2 class="form-signin-heading">Iniciar sesi&oacute;n</h2>
        <input type="text" name="usuario" class="form-control" placeholder="Username" autofocus required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>
      </form>

    </div> <!-- /container -->
    <?php
  
  //Mostrar errores de validacion de usuario, en caso de que lleguen
  
    if( isset( $_POST['msg_error'] ) )
    {
      switch( $_POST['msg_error'] )
      {
        case 1:
      ?>
      <script type="text/javascript"> 
        //jAlert("El usuario o password son incorrectos.", "Seguridad");
        alert("El usuario o password son incorrectos.", "Seguridad");
        $("#password").focus();
      </script>
      <?php
        break;      
        case 2:
      ?>
      <script type="text/javascript"> 
        //jAlert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.", "Seguridad");
        alert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.", "Seguridad");
      </script>
      <?php   
        break;
      }   //Fin switch
    }

    //Mostrar mensajes del estado del registro
    
    if( isset( $_POST['status_registro'] ) )
    {
      switch( $_POST['status_registro'] )
      {
        case 1:
        if( $_POST['i_EmailEnviado'] ==1) {
        ?>
          <script type="text/javascript"> 
            //jAlert("Gracias, ha sido registrado exitosamente.\n Se le ha enviado un correo electronico de bienvenida, \npor favor, NO LO CONTESTE pues solo es informativo.", 'Registro');
            alert("Gracias, ha sido registrado exitosamente.\n Se le ha enviado un correo electronico de bienvenida, \npor favor, NO LO CONTESTE pues solo es informativo.", 'Registro');
          </script>
          <?php
        } else {
          ?>
          <script type="text/javascript"> 
            //jAlert("Gracias, ha sido registrado exitosamente.\n No se le ha podido enviar correo electronico de bienvenida, \nsin embargo, ya puede utilizar su datos de acceso para registrarse..", 'Registro');
            alert("Gracias, ha sido registrado exitosamente.\n No se le ha podido enviar correo electronico de bienvenida, \nsin embargo, ya puede utilizar su datos de acceso para registrarse..", 'Registro');
          </script>
        <?php
        }

          break;      
        
        default:
      ?>
        <script type="text/javascript"> 
          //jAlert("Temporalmente NO se ha podido registrar, intente de nuevo mas tarde.", "Registro");
          alert("Temporalmente NO se ha podido registrar, intente de nuevo mas tarde.", "Registro");
        </script>
      <?php   
      }   //Fin switch
    }
  ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>