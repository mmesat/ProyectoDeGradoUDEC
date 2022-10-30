<?php include ("../bloqueDeSeguridad.php");?>
<?php
$rol = $_SESSION['HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12'];
   
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('gestor', $link);
	$sql="SELECT id_proyecto FROM usuario WHERE id_rol= $rol";
	$rs = mysql_query ($sql,$link) or die( "Error en $query: " . mysql_error() );
	$cuadro = mysql_fetch_array($rs);
	$gen= $cuadro['id_proyecto'];	
?>

<?php
$numproject=$gen;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="jsgantt.css"/>
<script language="javascript" src="jsgantt.js"></script>
<script language="javascript" src="graphics.js"></script>
<style type="text/css">
<!--
.style1 {color: #0000FF}

.roundedCorner{display:block}
.roundedCorner *{
  display:block;
  height:1px;
  overflow:hidden;
  font-size:.01em;
  background:#0061ce}
.roundedCorner1{
  margin-left:3px;
  margin-right:3px;
  padding-left:1px;
  padding-right:1px;
  border-left:1px solid #91bbe9;
  border-right:1px solid #91bbe9;
  background:#3f88da}
.roundedCorner2{
  margin-left:1px;
  margin-right:1px;
  padding-right:1px;
  padding-left:1px;
  border-left:1px solid #e5effa;
  border-right:1px solid #e5effa;
  background:#307fd7}
.roundedCorner3{
  margin-left:1px;
  margin-right:1px;
  border-left:1px solid #307fd7;
  border-right:1px solid #307fd7;}
.roundedCorner4{
  border-left:1px solid #91bbe9;
  border-right:1px solid #91bbe9}
.roundedCorner5{
  border-left:1px solid #3f88da;
  border-right:1px solid #3f88da}
.roundedCornerfg{
  background:#0061ce;}


-->
</style>







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
					<h2>ESTADO DEL PROYECTO</h2>
					<div class="comments">
                    
					  <div class="commentbox_right"></div>
					</div>
                    
					<div class="contentbox_top"></div>
</div>

				<div class="post">
                
				  <div class="contentarea">
				         <div style="position:relative" class="gantt" id="GanttChartDIV"></div><script>


  // here's all the html code neccessary to display the chart object

  // Future idea would be to allow XML file name to be passed in and chart tasks built from file.

  var g = new JSGantt.GanttChart('g',document.getElementById('GanttChartDIV'), 'day');

	g.setShowRes(1); // Show/Hide Responsible (0/1)
	g.setShowDur(1); // Show/Hide Duration (0/1)
	g.setShowComp(1); // Show/Hide % Complete(0/1)
   g.setCaptionType('Resource');  // Set to Show Caption (None,Caption,Resource,Duration,Complete)


  //var gr = new Graphics();

  if( g ) {
	
	
    // Parameters             (pID, pName,                  pStart,      pEnd,        pColor,   pLink,          pMile, pRes,  pComp, pGroup, pParent, pOpen, pDepend, pCaption)
	
	 //You can also use the XML file parser 
	 //JSGantt.parseXML('project.xml',g)


   <?php
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('gestor', $link);
	$sql="SELECT nombre_proyecto FROM tarea WHERE id_proyecto= $numproject";
	$rs = mysql_query ($sql,$link) or die( "Error en $query: " . mysql_error() );
	$cuadricula = mysql_fetch_array($rs);
	$generarresultado= $cuadricula['nombre_proyecto'];	
?>
//document.write(variablejs);
   <?php
   echo"g.AddTaskItem(new JSGantt.TaskItem(1,   '".$generarresultado."',     '',          '',          'ff0000', '', 0, '',     0, 1, 0, 1));";
   ?>
   
    <?php
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('gestor', $link);
	$sql="SELECT nombre_tarea, nombre_usuario, porcentaje, fecha_final, fecha_inicial FROM tarea WHERE id_proyecto= $numproject";
	$resultado = mysql_query ($sql,$link) or die( "Error en $query: " . mysql_error() );	
?>
<?php while($renglon = mysql_fetch_array($resultado))
 {
	$generarlista= $renglon['nombre_tarea'];
	$generarlista2= $renglon['nombre_usuario'];
	$porcento=$renglon['porcentaje'];
	$fechain=$renglon['fecha_inicial'];
	$fechafin=$renglon['fecha_final'];

echo"g.AddTaskItem(new JSGantt.TaskItem(1000,'".$generarlista."',         '".$fechain."', '".$fechafin."', 'ff00ff','', 1, '".$generarlista2."',  ".$porcento.", 0, 1, 1));";

  }
  mysql_free_result($resultado);  
mysql_close($link);
 ?>

    g.Draw();	
    g.DrawDependencies();
	
  }

  else

  {

    alert("not defined");

  }

</script>
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