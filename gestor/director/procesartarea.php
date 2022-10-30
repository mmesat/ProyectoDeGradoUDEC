<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad3.php");?>
<?php 
$nombretarea=$_POST['taskassing'];
$description=$_POST['descripcion'];
$fechastart=$_POST['fechaini'];
$fechaend=$_POST['fechafin'];
$idusuario=$_POST['person'];
$state=$_POST['estado'];
$type=$_POST['tipo'];
function filesize_format($bytes, $format = '', $force = ''){
	$bytes=(float)$bytes;
	if ($bytes <1024){
		$numero=number_format($bytes, 0, '.', ',');
		return array($numero,"B");
	}
	if ($bytes <1048576){
		$numero=number_format($bytes/1024, 2, '.', ',');
		return array($numero,"KBs");
	}
	if ($bytes>= 1048576){
		$numero=number_format($bytes/1048576, 2, '.', ',');
		return array($numero,"MB");
	}
}
$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT nombre,apellido,id_proyecto FROM usuario WHERE id_usuario = $idusuario";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $renglon = mysql_fetch_array($resultado);

 $valor=$renglon['nombre'];
 $valor2=$renglon['apellido'];
 $valor3=$renglon['id_proyecto'];
  	mysql_free_result($resultado); 
	 $query="SELECT nombre_proyecto FROM proyecto WHERE id_proyecto = $valor3";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $renglon = mysql_fetch_array($resultado);
	$valor4=$renglon['nombre_proyecto'];
	mysql_free_result($resultado); 
	mysql_close($link);
 


$link = mysql_connect('localhost', 'root', 'int15BCD');
mysql_select_db('gestor', $link);
$query="INSERT INTO tarea (nombre_tarea,nombre_usuario,id_usuario,nombre_proyecto,id_proyecto,fecha_final,fecha_inicial,descripcion,estado,tipo) VALUES ('$nombretarea','$valor $valor2','$idusuario','$valor4','$valor3','$fechaend','$fechastart','$description','$state','$type')";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
mysql_close($link);

$link = mysql_connect('localhost', 'root', 'int15BCD');
mysql_select_db('gestor', $link);
$query="SELECT id_tarea FROM tarea WHERE nombre_tarea='$nombretarea' AND nombre_usuario='$valor $valor2' AND id_usuario=$idusuario AND nombre_proyecto='$valor4' AND id_proyecto=$valor3 AND fecha_final='$fechaend' AND fecha_inicial='$fechastart' AND descripcion='$description' AND estado='$state' AND tipo='$type'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $renglon = mysql_fetch_array($resultado);
 $idtarea=$renglon['id_tarea'];
mysql_free_result($resultado);
  
mysql_close($link);

if(sizeof($_FILES)>0){
	$archivo = $_FILES["archivo"]["tmp_name"];
	//echo $archivo;
	//Definimos un array para almacenar el tamaño del archivo
	$tamanio=array();
	//OBTENEMOS EL TAMAÑO DEL ARCHIVO
	$tamanio = $_FILES["archivo"]["size"];
	//OBTENEMOS EL NOMBRE REAL DEL ARCHIVO AQUI SI SERIA foto.jpg
	$nombre_archivo = $_FILES["archivo"]["name"];
	//PARA HACERNOS LA VIDA MAS FACIL EXTRAEMOS LOS DATOS DEL REQUEST
	extract($_REQUEST);
	if ( $archivo != NULL ){
		//ABRIMOS EL ARCHIVO EN MODO SOLO LECTURA
		// VERIFICAMOS EL TAÑANO DEL ARCHIVO
		$fp = fopen($archivo, "rb");
		//LEEMOS EL CONTENIDO DEL ARCHIVO
		$contenido = fread($fp, $tamanio);
		//CON LA FUNCION addslashes AGREGAMOS UN \ A CADA COMILLA SIMPLE ' PORQUE DE OTRA MANERA
		//NOS MARCARIA ERROR A LA HORA DE REALIZAR EL INSERT EN NUESTRA TABLA
		$contenido = addslashes($contenido);
		//CERRAMOS EL ARCHIVO
		fclose($fp);
		// VERIFICAMOS EL TAÑANO DEL ARCHIVO
		if ($tamanio <1048576){
			//HACEMOS LA CONVERSION PARA PODER GUARDAR SI EL TAMAÑO ESTA EN b ó MB
			$tamanio=filesize_format($tamanio);
		}
		
		//CREAMOS NUESTRO INSERT
		$qry = "INSERT INTO tbl_documentos ( nombre_archivo, contenido, tamanio,tamanio_unidad, id_tarea ) VALUES
		('$nombre_archivo','$contenido','{$tamanio[0]}','{$tamanio[1]}',$idtarea)";
		
		//NOS CONECAMOS A LA BASE DE DATOS
		//REMPLAZEN SUS VALOS POR LOS MIOS
		mysql_connect("localhost","root","int15BCD") or die("No se pudo conectar a la base de datos");
	
		//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR CAMBIEN EL VALOR POR LA SUYA
		mysql_select_db("gestor");
	
		//EJECUTAMOS LA CONSULTA
		mysql_query($qry) or die("Query: $qry <br />Error: ".mysql_error());
		
		//CERRAMOS LA CONEXION
		mysql_close();
		//NOTIFICAMOS AL USUARIO QUE EL ARCHVO SE HA ENVIADO O REDIRIGIMOS A OTRO LADO ETC.
	//echo "Archivo Agregado Correctamente<br>";
	//echo '<a href="form.html">Subir Otro Archivo</a><br > ';
	header ("Location: exitotareaarchivo.php");

	}else{
		//echo "No fue posible subir el archivo";
		//echo '<a href="form.html">Subir Otro Archivo</a><br > ';
		header ("Location: exitotarea.php");
		
	
}
}
else{
	header ("Location: exitotareaerrorarchivo.php");
}


?>
</body>
</html>