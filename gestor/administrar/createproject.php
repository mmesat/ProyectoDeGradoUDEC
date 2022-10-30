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
        
        if( vacio(F.nombreproject.value) == false ) {
                alert("no puede dejar campos vacios.")
                return false
        } else {
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario
                //return false
        }
		if( vacio(F.prodecription.value) == false ) {
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
					<h2>Crear Proyecto</h2>
					<div class="comments">
					  <div class="commentbox_right"></div>
					</div>
					<div class="contentbox_top">
					  
					</div>
</div>
				<div class="post">
			  <div class="contentarea"><FORM NAME="formulario" METHOD="post" ACTION="procesarproyecto.php" onSubmit="return valida(this);">
					    <p>&nbsp;</p>
                        <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	Nombre proyecto&nbsp;</span>
					        <input type="text" name="nombreproject" id="nombreproject" />
				    <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descripcion </span>
				      <textarea name="prodecription" id="prodecription" cols="45" rows="5"></textarea>
			        </p>
			    <p>
					      <span class="xd"></span>
                     
                          
                          
					      <label for="grupoinv">Grupo de </label>
					      Investigacion
  <select name="grupoinv" id="grupoinv"style="width:550px">
				          <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 $query="SELECT nombre FROM grupo_inv WHERE sigla != '1'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $numoption=2;
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['nombre'];
 echo "<option value=".$numoption.">".$valor."</option>\n";
 $numoption++;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
 
                          </select>
					    </p>
					    <p>
					      <span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
					      <label for="program">Programa</label>
					      <select name="program" id="program"style="width:550px">
                          				          <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT nombre FROM programa WHERE sigla != '1'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $numoption=2;
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['nombre'];
 echo "<option value=".$numoption.">".$valor."</option>\n";
 $numoption++;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
				          </select>
                </p>
					    <p>
					      <span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; </span></label>
					      <label for="semillero">Semillero</label>
                          <select name="semillero" id="semillero"style="width:550px">
                                                    				          <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT nombre FROM semillero WHERE sigla != '1'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $numoption=2;
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['nombre'];
 echo "<option value=".$numoption.">".$valor."</option>\n";
 $numoption++;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
                          </select>
                        </p>
					    <p>
					      </label>
					      <label for="linea_inv">Linea de inv</label>estigacion
					      <select name="linea_inv" id="linea_inv"style="width:550px">          <?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT descripcion FROM linea_inv WHERE descripcion != '1'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $numoption=2;
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['descripcion'];
 echo "<option value=".$numoption.">".$valor."</option>\n";
 $numoption++;;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
				          </select>
					    </p>
					    <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eje tematico </span>
                          <select name="rol" id="rol"style="width:550px">
<?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT descripcion FROM eje_tematico WHERE descripcion != '1'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $numoption=2;
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['descripcion'];
 echo "<option value=".$numoption.">".$valor."</option>\n";
 $numoption++;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
  </select>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tipo </span><select name="caracter" id="caracter"style="width:550px">
					      
					      <option value="RESERVADO">RESERVADO</option>
 <option value="PUBLICO">PUBLICO</option>


  </select></p>
					    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha de inicio </label>
					      <input type="text" name="datebegin" id="datebegin" />
                (AAAA-MM-DD)</p>
					    <p><span class="xd">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Asignar director </span>
  <select name="director" id="director"style="width:550px">
<?php
 $link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('escuela', $link);
 mysql_set_charset('utf8',$link);
 $query="SELECT apellidos,nombres, cod_dir FROM director WHERE correo != '1'";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 $numoption=2;
 if ($resultado)
 while($renglon = mysql_fetch_array($resultado))
 {
 $valor=$renglon['apellidos'];
 $numoption=$renglon['cod_dir'];
 $namae=$renglon['nombres'];
 echo "<option value=".$numoption.">".$valor." ".$namae."</option>\n";
 $numoption++;
 }
mysql_free_result($resultado);  
mysql_close($link);
 ?>
  </select>
					    </p>
					    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nota: "no olvide crear los usuarios de los directores y asignarles el proyecto vigente."
					      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
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