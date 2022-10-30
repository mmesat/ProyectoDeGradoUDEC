<?php include ("../bloqueDeSeguridad.php");?>
<?php $idtask=$_POST['proyecto'];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Gestor de proyectos</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>&nbsp;&nbsp;GESTOR DE PROYECTOS CIETI ESCOM</h1>
			<div id="headerlinks"><a href="salir.php">Cerrar Sesion</a></div>
		</div>
		<div id="content">
			<div id="content_top"></div>
			<div id="left">
				<ul class="navi">
					<li class="top">Menu principal</li>
					<li><a href="admincount.php">Administrar cuenta</a></li>
					<li class="top">Administrativo</li>
					<li><a href="chooseproject.php">Estado del proyecto</a></li>
					<li><a href="homework.php">Tareas</a></li>
				</ul>
			</div>
			<div id="right">
				<div class="post">
					<h2>DATOS DE LA TAREA</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top"></div>
</div>
				<div class="post">
				  <div class="contentarea">
				    <p>estos son los datos actuales dela tarea</p>
                    <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 $query="SELECT nombre_tarea, porcentaje, fecha_inicial, fecha_final, descripcion, estado, tipo FROM tarea WHERE id_tarea =$idtask";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 if ($resultado)
 $renglon = mysql_fetch_array($resultado);
 
 $valor=$renglon['nombre_tarea'];
 $valor2=$renglon['porcentaje'];
 $numerito=$renglon['fecha_inicial'];
 $mail=$renglon['fecha_final'];
 $rol=$renglon['descripcion'];
 $born=$renglon['estado'];
 $phone=$renglon['tipo'];
mysql_free_result($resultado);  
mysql_close($link);
 ?>
				    <table width="767" height="84" border="1">
				      <tr>
				        <th width="73" scope="col">NOMBRE TAREA</th>
				        <th width="88" scope="col">PORCENTAJE DE DESARROLLO</th>
				        <th width="98" scope="col">FICHA INICIAL</th>
				        <th width="85" scope="col">FECHA FINAL</th>
				        <th width="91" scope="col">DESCRIPCION</th>

				        <th width="100" scope="col">ESTADO</th>
				        <th width="80" scope="col">TIPO</th>				        <th width="90" scope="col">ARCHIVO ADJUNTO</th>
			          </tr>
				      <tr>
				        <td><?php echo $valor;?></td>
				        <td><?php echo $valor2;?></td>
				        <td><?php echo $numerito;?></td>
				        <td><?php echo $mail;?></td>
				        <td><?php echo $rol;?></td>

				        <td><?php echo $born;?></td>
				        <td><?php echo $phone;?></td>
                        				        <td><?php
//NOS CONECAMOS A LA BASE DE DATOS
//REMPLAZEN SUS VALOS POR LOS MIOS
mysql_connect("localhost","root","int15BCD") or die("No se pudo conectar a la base de datos");

//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR CAMBIEN EL VALOR POR LA SUYA
mysql_select_db("gestor");

//CONSTRUIMOS EL QUERY PARA OBTENER LOS ARCHIVOS
$qry="select * from tbl_documentos AS docs WHERE id_tarea = $idtask";

//EJECUTAMOS LA CONSULTA
$res=mysql_query($qry) or die("Query: $qry ".mysql_error());

//RECORREMOS LA CONSULTA
while ($obj=mysql_fetch_object($res)) {
	//SI EL TIPO DE DOCUMENTO ES UMAGEN LA MOSTRAMOS SI NO SOLO HACEMOS EL LINK
	//switch ($obj->display){
		//case "image":
			echo "<div>
					<a href='getfile.php?id_tarea={$obj->id_tarea}'>
						<img src='getfile.php?id_tarea={$obj->id_tarea}' alt='$obj->nombre_archivo' />
					</a>
				</div><hr />";
			//break;
		//case "file":
			//echo "<div>
				//	<a href='getfile.php?id_tarea={$obj->id_tarea}'>$obj->nombre_archivo</a>
				//</div><hr />";
			//break;			
	//}
	
}

//CERRAMOS LA CONEXION
mysql_close();
?></td>
			          </tr>
			        </table>
			       <p>&nbsp;</p>
				     <form action="update.php" method="post"><input type="submit" name="VALIDAR" value="Actualizar estado" /><input type="hidden" name="task" value="<?php echo $idtask; ?>">
                     </form>

				    <p>&nbsp;</p>
				  </div>
				</div>
			</div>
			<div id="footer">
			&copy; Copyright 2011 Escom</div>
		</div>
		<div id="bottom"></div>
	</div>
</body>
</html>
