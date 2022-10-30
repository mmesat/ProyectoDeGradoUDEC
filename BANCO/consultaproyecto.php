<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/html40/loose.dtd">
<html>
  <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="CIETIC01">
    <meta name="generator" content="SWiSH Max3 (2009.11.30) www.swishzone.com">
    <meta name="description" content="">
    <meta name="keywords" content="loading, proyectos">
    <!-- text used in the movie -->
    <!-- loading, proyectos -->
    <!-- Creado con SWiSH Max - Flash con sencillez - www.swishzone.com -->

<style type="text/css">
/*<![CDATA[*/
html, body
{
	margin: 0;
	padding: 0;
	height: 100%;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
object
{
    vertical-align: top;
}
/*]]>*/
#letrero {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
	text-align: center;
}
.cuadro {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	text-align: center;
	font-weight: bold;
}
.regreso {
	font-size: 18px;
	font-weight: bold;
}
</style>
  </head>
  <body bgcolor="#FFFFFF">
    <center>
      <object
        classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
        codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,79,0"
        id="index"
        width="800" height="275"
      >
        <param name="movie" value="index.swf">
        <param name="bgcolor" value="#FFFFFF">
        <param name="quality" value="high">
        <param name="seamlesstabbing" value="false">
        <param name="allowscriptaccess" value="samedomain">
        <embed
          type="application/x-shockwave-flash"
          pluginspage="http://www.adobe.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"
          name="index"
          width="800" height="275"
          src="index.swf"
          bgcolor="#FFFFFF"
          quality="high"
          seamlesstabbing="false"
          allowscriptaccess="samedomain"
        >
          <noembed>
          </noembed>
        </embed>
      </object>
    </center>
    
    
   <p>
      <?php 
   $link1=mysql_connect("localhost","root","int15BCD");
   mysql_select_db("escuela",$link1);
   $sql1="SELECT DISTINCT A.nombre, B.nombres, B.apellidos FROM proyecto A, autor B, proyecto_autor C WHERE A.cod_proyecto= C.cod_proyecto AND B.cod_autor= C.cod_autor AND tipo LIKE 'publico'";
   
   $result1=mysql_query($sql1,$link1);
	
 echo"<table width='935' height='71' border='2' align='center'>";
  echo"<tr>";
   echo" <td width='471'><span class='cuadro'><div align='center'>NOMBRE DEL PROYECTO</div></span></td>";
echo"<td width='446'><span class='cuadro'>";
echo"<div align='center'>AUTOR(ES)</div></span></td>";
echo"</tr>";

	
	while ($fila=mysql_fetch_row($result1)){
		echo"<tr>";	
		echo"<td>".$fila[0]."</td>";
echo"<td>".$fila[1]." ".$fila[2]."</td>";
echo"</tr>";
	//echo $fila[0]." ".$fila[1]." ".$fila[2]."<br>";
	}
   

	
  


echo"</table>";

   
   
   
   
   
   
   
   ?>
</p>
   <p>&nbsp;</p>
   <blockquote><blockquote><blockquote><p><a href="index.php" class="regreso">Volver</a></p></blockquote></blockquote></blockquote>

 

   
</body>
</html>
