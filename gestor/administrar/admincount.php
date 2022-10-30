<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad2.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Gestor de proyectos</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<style type="text/css">
#d {
	font-weight: bold;
}
#d {
	font-weight: bold;
}
#d {
	font-weight: bold;
}
</style>
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
					<h2>Administrar cuenta</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top"></div>
</div>
			  <div class="post">
				  <div class="contentarea">
                    <p id="d">Cambio contraseña</p>
                    <form id="form1" name="form1" method="post" action="pasword.php">
                      <p>Contraseña Anterior
                        <input type="text" name="lastpasw" id="lastpasw" />
                      </p>
                      <p>Contraseña nueva&nbsp;&nbsp;&nbsp;
                        <input type="text" name="newpaswd" id="newpaswd" />
                      </p>
                      <p><input type="submit" name="VALIDAR" value="Enviar" />&nbsp;</p>
                    </form>
                    
                    <p id="d">Cambio correo</p>
                    <form id="form2" name="form2" method="post" action="cambioemail.php">
                      <p>Correo Anterior&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="lastmail" id="lastmail" />
                      </p>
                      <p>Correo nuevo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="newmail" id="newmail" />
                      </p>
                      <p><input type="submit" name="VALIDAR" value="Enviar" />&nbsp;</p>
                    </form>
                    <p id="d">Cambio Telefono</p>
                    <form id="form2" name="form2" method="post" action="cambiophone.php">
                      </p>
                      <p>Telefono nuevo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="newphone" id="newphone" />
                      </p>
                      <p><input type="submit" name="VALIDAR" value="Enviar" />&nbsp;</p>
                    </form>
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