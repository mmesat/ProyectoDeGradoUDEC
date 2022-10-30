<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad3.php");?>
<?php $rol = $_SESSION['HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12'];?>
<?php $personatarea= $_POST['user'];?>
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
					<h2>Asigne la tarea correspondiente</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top"></div>
</div>
				<div class="post">
				  <div class="contentarea">
				    <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="procesartarea.php">
				      <p>&nbsp;</p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarea a desarrollar
  <input name="taskassing" type="text" />
                      </p>
                      <p>
                        <label for="Descripcion">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripcion</label>
                        <label for="descripcion"></label>
                        <textarea name="descripcion" id="descripcion" cols="45" rows="5"></textarea>
                      </p>
                      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha inicial 
                        <label for="fechaini"></label>
                        <input type="text" name="fechaini" id="fechaini" />
                      (MM/DD/AAAA)</p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha final
                        <label for="fechafin"></label>
                      <input type="text" name="fechafin" id="fechaini" />
                      (MM/DD/AAAA)
                      <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="estado">Estado</label>
                        <select name="estado" id="estado">
                          <option value="ASIGNADO">ASIGNADO</option>
                          <option value="EN DESAROLLO">EN DESAROLLO</option>
                          <option value="FINALIZADO">FINALIZADO</option>
                        </select>
                      </p>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="tipo">Tipo</label>
                        <select name="tipo" id="tipo">
                          <option value="DESAROLLO">DESAROLLO</option>
                          <option value="DOCUEMENTACION">DOCUMENTACION</option>
                          <option value="CORRECION DE ERRORES">CORRECION DE ERRORES</option>
                        </select>
                      <p>
                      
                        <br>
                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adjuntar archivo (opcional)<input type="file" id="archivo" name="archivo"/>
                      </p>
                      <p>
                      <input type="hidden" name="person" value="<?php echo $personatarea;?>" />
                        <input type="submit" name="VALIDAR" value="Enviar" />
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