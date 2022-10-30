<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACTUALIZAR</title>
<style type="text/css">
.volver {
	font-family: "Comic Sans MS", cursive;
	font-weight: bold;
	font-size: 16px;
	color: #00F;
}
</style>
</head>

<body>

<p>
  <?php

	//base de datos del gestor
	
	$link1=mysql_connect("localhost","root","int15BCD");
	mysql_select_db("gestor",$link1);
	$sql1="SELECT A.nombre_proyecto, A.nombre_usuarios, B.nombre_rol FROM proyecto A, usuario B WHERE A.nombre_usuarios = B.nombre";
	
	$result1=mysql_query($sql1,$link1);
	while ($fila=mysql_fetch_row($result1)){
	echo $fila[0]." ".$fila[1]." ".$fila[2]."<br>";
	}
	
	
		//base de datos del banco
	$link=mysql_connect("10.0.0.112","erika","erika");
	mysql_select_db("escuela",$link);
	$sql="select * from semillero";
	
	$result=mysql_query($sql,$link);
	echo "Consulta del Banco de Proyectos"."<br>";
	while ($fila=mysql_fetch_row($result)){
	echo $fila[0]." ".$fila[1]."<br>";
	}

?>
  
  
</p>
<p>&nbsp;</p>
<p class="volver"><a href="index.php">Volver</a></p>
</body>
</html>