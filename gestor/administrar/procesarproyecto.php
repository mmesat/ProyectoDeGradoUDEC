<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad2.php");?>
<?php
$proyecto=$_POST['nombreproject'];
$descripcion=$_POST['prodecription'];
$grupo=$_POST['grupoinv'];
$programa=$_POST['program'];
$semilla=$_POST['semillero'];
$linea=$_POST['linea_inv'];
$eje=$_POST['rol'];
$tipo=$_POST['caracter'];
$coddirector=$_POST['director'];
$fechainicio=$_POST['datebegin'];
$fechafin="pendiente";
$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT documento FROM director WHERE cod_dir = $coddirector";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
$renglon = mysql_fetch_array($resultado);
$codigonuevodirectorrelacion=$renglon['documento'];
mysql_free_result($resultado); 
mysql_close($link);

$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT * FROM director WHERE id_director = $codigonuevodirectorrelacion";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
if (mysql_num_rows($resultado)==0){
	mysql_free_result($resultado); 
	mysql_close($link);
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('gestor', $link);
	$query="INSERT INTO director (id_director) VALUES ($codigonuevodirectorrelacion) ";
 	$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
	//mysql_free_result($resultado);  
	mysql_close($link);
}
$link = mysql_connect('localhost', 'root', 'int15BCD');
mysql_select_db('gestor', $link);
$query="INSERT INTO proyecto (descripcion,tipo,nombre_proyecto,cod_programa,cod_linea_inv,cod_grupo_inv,cod_eje_tema,id_director) VALUES ('$descripcion','$tipo','$proyecto',$programa,$linea,$semilla,$eje,$codigonuevodirectorrelacion) ";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
//mysql_free_result($resultado);  
mysql_close($link);
$link = mysql_connect('localhost', 'root', 'int15BCD');
mysql_select_db('escuela', $link);
$query="INSERT INTO proyecto (nombre,cod_programa,cod_linea_inv,cod_grupo_inv,fecha_ini,fecha_fin,cod_dir,tipo,cod_eje_tema) VALUES ('$proyecto',$programa,$linea,$semilla,'$fechainicio','$fechafin',$coddirector,'$tipo',$eje) ";
$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
mysql_close($link);
header ("Location: proyectocreado.php"); 
?>