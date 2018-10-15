<?php
	
    extract($_POST);
	require ("connect_db.php");

	$id=$_REQUEST["id"];
	$curp=$_REQUEST["curp"];
	$nombre=$_REQUEST["nombre"];
	$apepat=$_REQUEST["catapepat"];
	$apemat=$_REQUEST["catapemat"];
	$genero=$_REQUEST["catgenero"];
	$telefono=$_REQUEST["telefono"];
    $email=$_REQUEST["email"];
	


	$curp=utf8_decode($curp);
	$nombre=utf8_decode($nombre);
	$apepat=utf8_decode($apepat);
	$apemat=utf8_decode($apemat);
	$genero=utf8_decode($genero);
	$telefono=utf8_decode($telefono);
	$email=utf8_decode($email);


	$sql="update datospersonales set curp='$curp', nombre='$nombre', cvapepat='$apepat', cvapemat='$apemat', cvgenero='$genero', 
	telefono='$telefono', email='$email' where cvpersona='$id'";	
	
	
	if (mysql_query($sql)){header("location:consultarbd.php"); }
?>