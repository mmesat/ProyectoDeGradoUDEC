<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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



<div style="position:relative" class="gantt" id="GanttChartDIV"></div>

 <?php
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('gestor', $link);
	$sql="SELECT nombre_tarea FROM tarea WHERE nombre_proyecto= 'proyecto prueba'";
	$resultado = mysql_query ($sql,$link) or die( "Error en $query: " . mysql_error() );		
?>
<script>


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



//document.write(variablejs);
   g.AddTaskItem(new JSGantt.TaskItem(1,   'gestor',     '',          '',          'ff0000', 'http://help.com', 0, 'Brian',     0, 1, 0, 1));
<?php while($renglon = mysql_fetch_array($resultado))
 {
	$generarlista= $renglon['nombre_tarea'];

echo"g.AddTaskItem(new JSGantt.TaskItem(1000,'".$generarlista."',         '1/1/2011', '12/31/2011', 'ff00ff','', 1, 'jose',  100, 0, 1, 1));";

  }
 ?>

    g.Draw();	
    g.DrawDependencies();
	
  }

  else

  {

    alert("not defined");

  }

</script>


</head>
<body>


</body>
</html>