<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prueba php</title>
</head>

<body>
<?php
$conn = mysql_connect("localhost","root","int15BCD");
mysql_select_db("escuela",$conn); 
$ssql = "SELECT * FROM linea_inv";
$rs = mysql_query($ssql,$conn)or die( "Error en $ssql: " . mysql_error() ); 
$row = mysql_fetch_array($rs);
echo $row['cod_linea_inv'];
echo "<br>";
mysql_free_result($rs); 
mysql_close($conn);

$conn = mysql_connect("localhost","root","int15BCD");
mysql_select_db("gestor",$conn); 
$ssql = "SELECT * FROM usuario";
$rs = mysql_query($ssql,$conn)or die( "Error en $ssql: " . mysql_error() ); 
$row = mysql_fetch_array($rs);
echo $row['contrasena'];
mysql_free_result($rs); 
mysql_close($conn);
?>
</body>
</html>