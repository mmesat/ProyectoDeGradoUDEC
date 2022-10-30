<?php
$id=$_POST['persona'];
$rol=$_POST['roles'];
$id_pro=$_POST['project'];

	$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
		$ssql = "INSERT INTO director (id_director) VALUES ($id)";
	$rs = mysql_query($ssql,$link)or die( "Error en $ssql: " . mysql_error() );  
	mysql_close($link);
	$link = mysql_connect('localhost', 'root', '');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
		$ssql = "UPDATE proyecto SET id_director=$id WHERE id_proyecto=$id_pro";
	$rs = mysql_query($ssql,$link)or die( "Error en $ssql: " . mysql_error() );  
	mysql_close($link);
	header ("Location: exitorol.php");
?>