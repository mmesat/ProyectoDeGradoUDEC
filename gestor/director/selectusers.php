<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad3.php");?>
<?php $rol = $_SESSION['HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12'];?>
<?php $numproyecto= $_POST['proyecto'];?>
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
					<li><a href="searchprojects.php">Examinar proyectos</a></li>
					<li><a href="homework.php">Asignar tareas</a></li>
				</ul>
			</div>
			<div id="right">
				<div class="post">
					<h2>Seleccione usuario a asignar tarea</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top"></div>
</div>
				<div class="post">
				  <div class="contentarea">
				    <p>&nbsp;</p>
				    <p>Usuario:</p>
				    <form id="form1" name="form1" method="post" action="asigntask.php">
				      <p>&nbsp;</p>

                      <p>
                        <select name="user" id="user"style="width:550px">
                          <?php
						  	
 							$link = mysql_connect('localhost', 'root', 'int15BCD');
 							mysql_select_db('gestor', $link);
 							$query="SELECT nombre, apellido, id_usuario FROM usuario WHERE id_proyecto = $numproyecto AND id_rol >= 3000";
 							$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );


							 if ($resultado)
 								while($renglon = mysql_fetch_array($resultado))
 								{
 									$valor=$renglon['nombre'];
									$valor2=$renglon['apellido'];
									$valor3=$renglon['id_usuario'];
 									echo "<option value=".$valor3.">".$valor." " .$valor2."</option>\n";
 								}
							mysql_free_result($resultado);  
							mysql_close($link);
 							?>
                          
                          
                        </select>
                      </p>
                      <input type="submit" name="VALIDAR" value="Enviar" />
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