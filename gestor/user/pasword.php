<?php include ("../bloqueDeSeguridad.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$numerorolbd= $_SESSION['HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12'];
$psdwordantiguo=$_POST['lastpasw'];
$psdwordnuevo=$_POST['newpaswd'];
$contrasenanueva = hash("sha512", $psdwordnuevo);
$contrasenantigua = hash("sha512", $psdwordantiguo);
$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT * FROM usuario WHERE contrasena = \"$contrasenantigua\"";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
if (mysql_num_rows($resultado)==0){
	mysql_close($link);
	header ("Location: errorcontrasena.php"); 
}
else{
	
	$sql = "UPDATE usuario SET contrasena='$contrasenanueva' WHERE id_rol=$numerorolbd";
	$rs = mysql_query($sql)or die( "Error en $query: " . mysql_error() );
	mysql_close($link);
	header ("Location: exitocontrasena.php"); 
}

?>
</body>
</html>