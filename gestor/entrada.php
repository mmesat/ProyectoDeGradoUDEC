<? 
$user=$_POST['nombre'];
$pasword= $_POST['contrasena'];
//conecto con la base de datos 
$conn = mysql_connect("localhost","root","int15BCD"); 
//selecciono la BBDD 
mysql_select_db("gestor",$conn); 
$contrasena = hash("sha512", $pasword);
//Sentencia SQL para buscar un usuario con esos datos 
$ssql = "SELECT * FROM usuario WHERE usuario='$user' and contrasena='$contrasena'";
 
//Ejecuto la sentencia 
$rs = mysql_query($ssql,$conn)or die( "Error en $ssql: " . mysql_error() ); 
$consultaid="SELECT id_usuario FROM `usuario` WHERE usuario='$user' AND contrasena ='$contrasena'";
$consultaidrol="SELECT id_rol FROM `usuario` WHERE usuario='$user' AND contrasena ='$contrasena'";
//vemos si el usuario y contraseña es váildo 
//si la ejecución de la sentencia SQL nos da algún resultado 
$idconsul = mysql_query($consultaid,$conn)or die( "Error en $ssql: " . mysql_error() ); 
$rolconsul = mysql_query($consultaidrol,$conn)or die( "Error en $ssql: " . mysql_error() ); 

//es que si que existe esa conbinación usuario/contraseña 
$row = mysql_fetch_array($rs);
$rowid = mysql_fetch_array($idconsul);
$rowrol = mysql_fetch_array($rolconsul);
echo $rowrol;
echo "hola";
if ((mysql_num_rows($rs)!=0)&&((($row['id_rol']) >= 1000)&&($row['id_rol']) < 2000)){
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
	session_start();
	
 	$_SESSION["HjkrTS3986Yg444aASds"]= "hai";
	$_SESSION["identificacionusuario"]=$rowid['id_usuario'];
	$_SESSION["HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12"]=$rowrol['id_rol'];
    header ("Location: administrar/index.php"); 
}
else { 
	if ((mysql_num_rows($rs)!=0)&&((($row['id_rol']) >= 2000)&&($row['id_rol']) < 3000)){
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
    session_start(); 
 	$_SESSION["HjkrTS3986Yg444aASds"]= "hai";
	$_SESSION["identificacionusuario"]=$rowid['id_usuario'];
	$_SESSION["HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12"]=$rowrol['id_rol'];
    header ("Location: director/index.php"); 
}
    else{
		if ((mysql_num_rows($rs)!=0)&&((($row['id_rol']) >= 3000)&&($row['id_rol']) < 4000)){
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
    session_start(); 
 	$_SESSION["HjkrTS3986Yg444aASds"]= "hai";
	$_SESSION["identificacionusuario"]=$rowid['id_usuario'];
	$_SESSION["HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12"]=$rowrol['id_rol'];
    echo $_SESSION["HjkrTS3986Yg444aASdsHjkrTS3986Yg444aASds12"];
	echo $row['id_usuario'];
	header ("Location: user/index.php"); 
		}//si no existe le mando otra vez a la portada 
 
 else{   header("Location: main.php?errorusuario=si"); 
	}
	}
} 

mysql_free_result($rs); 
mysql_close($conn);
?> 
</head>

<body>
</body>
</html>