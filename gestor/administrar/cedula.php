<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad2.php");?>
<?php $id=$_POST['cedula'];?>

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
					<li><a href="createproject.php">Crear proyecto</a></li>
					<li><a href="createuser.php">Crear usuario</a></li>
					<li class="top">Administrativo</li>
					<li><a href="searchprojects.php">Examinar proyectos</a></li>
					<li><a href="permisos.php">Permisos</a></li>
				</ul>
			</div>
			<div id="right">
				<div class="post">
					<h2>DATOS DE USUARIO</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top"></div>
</div>
				<div class="post">
				  <div class="contentarea">
				    <p>estos son los datos actuales del usuario sleccionado</p>
                    <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 $query="SELECT nombre, apellido, id_usuario, correo, nombre_rol, fechanacimiento, telefono FROM usuario WHERE id_usuario =$id";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 if ($resultado)
 $renglon = mysql_fetch_array($resultado);
 
 $valor=$renglon['nombre'];
 $valor2=$renglon['apellido'];
 $numerito=$renglon['id_usuario'];
 $mail=$renglon['correo'];
 $rol=$renglon['nombre_rol'];
 $born=$renglon['fechanacimiento'];
 $phone=$renglon['telefono'];
mysql_free_result($resultado);  
mysql_close($link);
 ?>
				    <table width="777" height="84" border="1">
				      <tr>
				        <th width="97" scope="col">NOMBRE</th>
				        <th width="110" scope="col">APELLIDO</th>
				        <th width="103" scope="col">NUMERO CEDULA</th>
				        <th width="78" scope="col">E-MAIL</th>
				        <th width="136" scope="col">ROL QUE TIENE ACTUALMENTE</th>
				        <th width="104" scope="col">FECHA DE NACIMIENTO</th>
				        <th width="103" scope="col">NUMERO DE TELEFONO</th>
			          </tr>
				      <tr>
				        <td><?php echo $valor;?></td>
				        <td><?php echo $valor2;?></td>
				        <td><?php echo $numerito;?></td>
				        <td><?php echo $mail;?></td>
				        <td><?php echo $rol;?></td>
				        <td><?php echo $born;?></td>
				        <td><?php echo $phone;?></td>
			          </tr>
			        </table>
				    <p>&nbsp;</p>
				     <form action="cambio.php" method="post"><input type="submit" name="VALIDAR" value="Cambiar de rol" /><input type="hidden" name="persona" value="<?php echo $id; ?>">
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
