<?php
$id=$_GET['persona'];
$rol=$_GET['roles'];
	$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
		$ssql = "UPDATE proyecto SET id_director=0 WHERE id_director=$id";
	$rs = mysql_query($ssql,$link)or die( "Error en $ssql: " . mysql_error() );  
	mysql_close($link);
		$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
		$ssql = "DELETE FROM director WHERE id_director=$id";
	$rs = mysql_query($ssql,$link)or die( "Error en $ssql: " . mysql_error() );  
	mysql_close($link);


if ($rol==1){
	$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
		$ssql = "SELECT id_rol FROM `usuario` WHERE id_rol >=1000 and id_rol <2000";
	$rs = mysql_query($ssql,$link)or die( "Error en $ssql: " . mysql_error() );  
	$id_rol=1000+(mysql_num_rows($rs));
	$nom_rol="administrador";
	mysql_free_result($rs);
	mysql_close($link);
}

if ($rol=="3"){
	$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
		$ssql = "SELECT id_rol FROM `usuario` WHERE id_rol >=3000";
	$rs = mysql_query($ssql,$link)or die( "Error en $ssql: " . mysql_error() );  
	$id_rol=3000+(mysql_num_rows($rs));
	$nom_rol="ESTUDIANTE";
	mysql_free_result($rs);
	mysql_close($link);
}
$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
	$sql = "UPDATE usuario SET nombre_rol='$nom_rol', id_rol=$id_rol WHERE id_usuario=$id";
	$rs = mysql_query($sql,$link)or die( "Error en $sql: " . mysql_error() );
	mysql_close($link);
	header ("Location: exitorol.php");
?>