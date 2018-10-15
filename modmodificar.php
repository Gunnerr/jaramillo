<?phpç

extract($_GET);
	include ("connect_db.php");
	require ("connect_db.php");
	
	$id=$_REQUEST["id"];
	$curp=$_REQUEST["curp"];
	$nombre=$_REQUEST["nombre"];
	$apepat=$_REQUEST["apepat"];
	$apemat=$_REQUEST["apemat"];
	$genero=$_REQUEST["catgenero"];
	$domicilio=$_REQUEST["domicilio"];
    $email=$_REQUEST["email"];
	$telefono=$_REQUEST["telefono"];


	$curp=utf8_decode($curp);
	$nombre=utf8_decode($nombre);
	$apepat=utf8_decode($apepat);
	$apemat=utf8_decode($apemat);
	$genero=utf8_decode($genero);
	$domicilio=utf8_decode($domicilio);
	$email=utf8_decode($email);
	$telefono=utf8_decode($telefono);
	


	$sql="UPDATE empleado SET curp='$curp', nombre='$nombre', apepat='$apepat', apemat='$apemat', cvgenero='$genero', 
	domicilio='$domicilio', email='$email', telefono='$telefono' WHERE cvempleado='$id'";	
	
	
	if (mysql_query($sql)){header("location:empleados.html"); }
?>