<?php
//Inicializar una sesion de PHP
session_start();

//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['uid'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la 
    //pantalla de login, enviando un codigo de error
?>
        <form name="formulario" method="post" action="../login.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript"> 
            document.formulario.submit();
        </script>
<?php
}

    //Conectar BD
    include("conectar_db.php");

    //Sacar datos del usuario que ha iniciado sesion
    $sql = "SELECT  nombre,paterno,tx_TipoUsuario,id_usuario
            FROM users
            LEFT JOIN tipoUsuario
            ON users.id_TipoUsuario = tipoUsuario.id_TipoUsuario
            WHERE id_usuario = '".$_SESSION['uid']."'";         
    $result = mysql_query($sql); 

    $nombreUsuario = "";

    //Formar el nombre completo del usuario
    if( $fila = mysql_fetch_array($result) )
        $Usuario = $fila['nombre']." ".$fila['paterno'];
    
//Cerrrar conexion a la BD
mysql_close($conexio);
?>