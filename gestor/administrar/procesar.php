<?php include ("../bloqueDeSeguridad.php");?>
<?php include ("../bloqueDeSeguridad2.php");?>
<?php
$user=$_POST['nombreuser'];
$name=$_POST['nombre'];
$lname=$_POST['apellido'];
$id=$_POST['CC'];
$pass=$_POST['password'];
$email=$_POST['mail'];
$id_rol=$_POST['rol'];
$phonenum=$_POST['phone'];
$dateborn=$_POST['date'];
$vinculacion=$_POST['projecxt'];
echo $phonenum;

$conn = mysql_connect("localhost","root","int15BCD"); 
mysql_select_db("gestor",$conn);
$contrasena = hash("sha512", $pass);
$sssql="SELECT usuario FROM `usuario` WHERE usuario= '$user'";$rs = mysql_query($sssql,$conn)or die( "Error en $sssql: " . mysql_error() ); 
if (mysql_num_rows($rs)!=0){
	header ("Location: errorusuario.php"); 
	}
else{

if ($id_rol==1){
	$ssql = "SELECT id_rol FROM `usuario` WHERE id_rol >=1000 and id_rol <2000";
	$rs = mysql_query($ssql,$conn)or die( "Error en $ssql: " . mysql_error() );  
 
	$id_rol=1000+(mysql_num_rows($rs));
	$nom_rol="administrador";
	}
if ($id_rol==2){
	$ssql = "SELECT id_rol FROM `usuario` WHERE id_rol >=2000 and id_rol <3000";
	$rs = mysql_query($ssql,$conn)or die( "Error en $ssql: " . mysql_error() );  
	$id_rol=2000+(mysql_num_rows($rs));
	$nom_rol="Director De proyecto";
	}
if ($id_rol==3){
	$ssql = "SELECT id_rol FROM `usuario` WHERE id_rol >=3000 and id_rol <4000";
	$rs = mysql_query($ssql,$conn)or die( "Error en $ssql: " . mysql_error() ); 
	$id_rol=3000+(mysql_num_rows($rs));
	$nom_rol="Estudiante";
	}
$telephono=$phonenum;   
$sql = "INSERT INTO usuario (id_usuario,usuario,correo,nombre,apellido,contrasena,id_rol,nombre_rol,fechanacimiento,telefono,id_proyecto) VALUES ($id,'$user','$email','$name','$lname','$contrasena',$id_rol,'$nom_rol','$dateborn','$telephono',$vinculacion)";
mysql_query($sql)or die( "Error en $sql: " . mysql_error() );
mysql_close($conn);
echo $phonenum;
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('gestor', $link);
	echo $vinculacion;
	$query="SELECT nombre_proyecto FROM proyecto WHERE id_proyecto=$vinculacion";
	$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
	$renglon = mysql_fetch_array($resultado);
	$valor=$renglon['nombre_proyecto'];
	mysql_close($link);
echo $valor;
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('escuela', $link);
	$query="SELECT cod_proyecto FROM proyecto WHERE nombre='$valor'";
	$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
	$renglon = mysql_fetch_array($resultado);
	$valor2=$renglon['cod_proyecto'];
	mysql_close($link);
if($id_rol>2999){
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('escuela', $link);
	$query="INSERT INTO autor 		(nombres,apellidos,fec_nac,no_documento,telefono,correo) VALUES ('$name','$lname','$dateborn',$id,$phonenum,'$email') ";
	$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
	mysql_close($link);
	
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('escuela', $link);
	$query="SELECT cod_autor FROM autor WHERE nombres='$name' AND apellidos ='$lname'";
	$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
	$renglon = mysql_fetch_array($resultado);
	$valor3=$renglon['cod_autor'];
	mysql_close($link);
	
	$link = mysql_connect('localhost', 'root', 'int15BCD');
	mysql_select_db('escuela', $link);
	$query="INSERT INTO proyecto_autor (cod_proyecto, cod_autor) VALUES ($valor2,$valor3)";
	$resultado = mysql_query($query)or die( "Error en $query: " . mysql_error() );
	mysql_close($link);
	
}
header ("Location: usuariocreado.php"); 
	
}
?>