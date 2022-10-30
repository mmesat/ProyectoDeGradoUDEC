<?php include ("../bloqueDeSeguridad.php");?>
<?php $idtask=$_POST['task'];?>
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
					<h2>ACTUALIZAR DATOS</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top"></div>
</div>
				<div class="post">
				  <div class="contentarea">
				    <p>&nbsp;</p>
                    
				     <form action="task.php" method="post">
				       <p>
				         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="estado">Estado</label>
				         <select name="estado" id="estado">
				           <option value="ASIGNADO">ASIGNADO</option>
				           <option value="EN DESAROLLO">EN DESAROLLO</option>
				           <option value="FINALIZADO">FINALIZADO</option>
			             </select>
				       </p>
				       <p>&nbsp; </p>
				       <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="porciento">porcentaje</label>
                      <input type="text" name="porciento" id="porciento" />
                      <p>&nbsp; </p>
				         <input type="submit" name="VALIDAR" value="Actualizar estado" />
                        
				         <input type="hidden" name="task" value="<?php echo $idtask; ?>">
			           </p>
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