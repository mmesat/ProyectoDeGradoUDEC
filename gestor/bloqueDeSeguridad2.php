<?
 //Inicio la sesión
 //session_start();
 //COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
 if ($_SESSION["HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12"] > 1999 ) {
 //si no existe, va a la página de autenticacion
 header("Location: ../main.php");
 //salimos de este script
 exit();
 }
 ?>