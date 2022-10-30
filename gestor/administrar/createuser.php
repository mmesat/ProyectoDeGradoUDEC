<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad2.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Gestor de proyectos</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<style type="text/css">
#container #content #right .post .contentbox_top #form1 p label {
	font-weight: bold;
}
</style>
<script language="javascript" type="text/javascript">
//Validacion de campos de texto no vacios by Mauricio Escobar
//
//Iván Nieto Pérez
//Este script y otros muchos pueden
//descarse on-line de forma gratuita
//en El Código: www.elcodigo.com


//*********************************************************************************
// Function que valida que un campo contenga un string y no solamente un " "
// Es tipico que al validar un string se diga
//    if(campo == "") ? alert(Error)
// Si el campo contiene " " entonces la validacion anterior no funciona
//*********************************************************************************

//busca caracteres que no sean espacio en blanco en una cadena
function vacio(q) {
        for ( i = 0; i < q.length; i++ ) {
                if ( q.charAt(i) != " " ) {
                        return true
                }
        }
        return false
}

//valida que el campo no este vacio y no tenga solo espacios en blanco
function valida(F) {
        
        if( vacio(F.nombreuser.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return false
        }
		if( vacio(F.nombre.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return true
        }
				if( vacio(F.apellido.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return true
        }
						if( vacio(F.CC.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return true
        }
								if( vacio(F.password.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return true
        }
        								if( vacio(F.mail.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return true
        }
		        if( vacio(F.date.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return false
        }
		        if( vacio(F.phone.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return false
        }
}




</script>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
		
				</ul>
			</div>
			<div id="right">
				<div class="post">
					<h2>Crear Usuario</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top">
					  
					</div>
</div>
				<div class="post">
			  <div class="contentarea"><FORM NAME="formulario" METHOD="post" ACTION="procesar.php" onSubmit="return valida(this);">
					    <p>&nbsp;</p>
                        <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre de usuario&nbsp;</span>
					      <input type="text" name="nombreuser" id="nombreuser" />
				    <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombre &nbsp;</span>
				      <input type="text" name="nombre" id="nombre" />
			        </p>
					    <p>
					      <label for="apellido"><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;apellido&nbsp;</span></label>
					      <input type="text" name="apellido" id="apellido" />
					    </p>
					    <p>
					      <label for="apellido2"><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC o TI o CE</span></label>
					      <input type="text" name="CC" id="CC" />
                        </p>
					    <p>
					      <label for="apellido3"><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contraseña de ingreso&nbsp;</span></label>
                          <input type="text" name="password" id="password" />
                        </p>
					    <p>
					      <label for="apellido4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correo Electronico&nbsp;</label><input type="text" name="mail" id="mail" />
					    </p>
					    <p>
					      <label for="apellido5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de nacimiento &nbsp;</label>
					      <input type="text" name="date" id="date" />
                        (AAAA-MM-DD)</p>
					    <p>
					      <label for="apellido6">Numero de telefono principal&nbsp;</label>
                          <input type="text" name="phone" id="phone" />
                        </p>
					    <p>	
					      <label for="projecxt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vincular a un proyecto</label>
					      <select name="projecxt" id="projecxt"> <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 $query="SELECT nombre_proyecto, id_proyecto FROM proyecto";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['nombre_proyecto'];
 $numerito=$renglon['id_proyecto'];
 echo "<option value=".$numerito.">".$valor."</option>\n";
 $numerito++;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
				          </select>
					    </p>
					    <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rol&nbsp;</span>
  <select name="rol">
    <option value="1">Administrador</option>
    <option value="2">Director De proyecto</option>
    <option value="3">Estudiante</option>
  </select>
			        </p>
					    <p>
					     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="VALIDAR" value="Enviar" />
				        </p>
				  </FORM>
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