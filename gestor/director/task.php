<?php include ("../bloqueDeSeguridad.php");?>
<?php
$idtask=$_POST['task'];
$estado1=$_POST['estado'];
$porcentaje=$_POST['porciento'];

$link = mysql_connect('localhost', 'root', 'int15BCD');
 mysql_select_db('gestor', $link);
 mysql_set_charset('utf8',$link);
 $query="UPDATE tarea SET estado='$estado1', porcentaje='$porcentaje' WHERE id_tarea=$idtask";
 $resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
 header ("Location: exitotarea.php"); 
?>