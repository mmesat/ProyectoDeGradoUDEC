<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prueba 1</title>

</head>

<body>

<?php


////////////////////ESTO VA EN LA MAIN///////////////
		//////CONSULTAR BASE DE DATOS DEL GESTOR////
	
	$link1=mysql_connect("localhost","root","int15BCD");
	mysql_select_db("gestor",$link1);
	$sql1="SELECT * from proyecto";
	

	$result1=mysql_query($sql1,$link1);
	while ($fila=mysql_fetch_row($result1)){
		
		echo"<tr>";	
		echo"<td>".$fila[0]." "."</td>";
		echo"<td>".$fila[1]." ".$fila[2]." ".$fila[3]." ".$fila[4]." ".$fila[5]." ".$fila[6]." ".$fila[7]."</td>";
		echo"</tr>";
	}
	
	$sql2="SELECT B.nombre FROM proyecto A, usuario B, usuarioproyecto C WHERE A.id_proyecto = C.id_proyecto AND B.id_usuario = C.id_usuario ";
	
	
	$result2=mysql_query($sql2,$link1);
	
	while ($fila1=mysql_fetch_row($result2)){
		
		echo"<tr>";	
		echo"<td>".$fila1[0]." "."</td>";
		//echo"<td>".$fila1[1]." ".$fila1[2]." "."</td>";
		echo"</tr>";
	}


	/*$numero = mysql_num_rows($result1);
	$numero2 = mysql_num_rows($result2);

	 /////////////CONSULTA LA BASE DE DATOS DEL BANCO DE PROYECTOS ACTUALMENTE ESTAN EN EL MISMO LOCALHOST//////////////
	 
	 
	mysql_select_db("escuela",$link1);
	
		while ($fila=mysql_fetch_row($result1)){
			for($i=0;$i<$numero-1;$i++){
				$palabra[$i]=$fila[0];
						
						//////////Insertar el nombre del proyecto  del gestor al banco de proyectos en una tabla alterna que será consultada para agregar a los 						proyectos//////////////////
						$sql="insert into proyecto values ('$palabra[$i]')";
						mysql_query($sql,$link1)or die("error");	
						
				
			}
			
		}
		
		
			
		while ($fila2=mysql_fetch_row($result2)){
			for($j=0;$j<$numero2-2;$j++){
				$palabra2[$j]=$fila2[0];
				$palabra3[$j]=$fila2[1];
						//echo $palabra2[$j]. " ". $palabra3[$j]." "."<br>";
						
						//////////Insertar el nombre y apellido de los usuarios  del gestor al banco de proyectos en una tabla alterna que será consultada para agregar a los autores posteriormente//////////////////
						$sql="insert into nombres_autores values ('$palabra2[$j]','$palabra3[$j]')";
						mysql_query($sql,$link1)or die("error");	
			}
			
		}
		
		*/


?>

</body>
</html>