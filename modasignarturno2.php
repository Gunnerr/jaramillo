<?php
	include ("connect_db.php");

extract($_GET);

    $id=$_POST["id"];
	$cvempleado=$_POST["cvempleado"];
	$lunes=$_POST["lunes"];
	$martes=$_POST["martes"];
	$miercoles=$_POST["miercoles"];
	$jueves=$_POST["jueves"];
	$viernes=$_POST["viernes"];
	$sabado=$_POST["sabado"];
    $domingo=$_POST["domingo"];
	

    
   
	require("connect_db.php");
	$checkcurp=mysql_query("SELECT * FROM horario WHERE cvempleado='$cvempleado'");
	$check_curp=mysql_num_rows($checkcurp);

	
	if($check_curp>0){
	echo ' <script language="javascript">alert("Atencion, ya se ha asignado un horario para este empleado");</script> ';
	echo "<script>location.href='asignarturno2.php'</script>";
	}
	else{


    mysql_query("INSERT INTO horario  VALUES ('', '$cvempleado','$lunes','$martes','$miercoles','$jueves','$viernes','$sabado','$domingo')");
	echo ' <script language="javascript">alert("horario registrado satisfactoriamente");</script> ';
	echo "<script>location.href='asignarhorario.php'</script>";
	mysql_close($link);}
?>

