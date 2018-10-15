<?php
	include ("connect_db.php");

	$id=$_POST["id"];
	$lini=$_POST["lini"];
	$lfin=$_POST["lfin"];
	$maini=$_POST["maini"];
	$mafin=$_POST["mafin"];
	$miini=$_POST["miini"];
	$mifin=$_POST["mifin"];
    $jini=$_POST["jini"];
	$jfin=$_POST["jfin"];
	$vini=$_POST["vini"];
    $vfin=$_POST["vfin"];
    $sini=$_POST["sini"];
    $sfin=$_POST["sfin"];
    $dini=$_POST["dini"];
    $dfin=$_POST["dfin"];

    
   
	require("connect_db.php");
	$checkcurp=mysql_query("SELECT * FROM chorario WHERE cvempleado='$id'");
	$check_curp=mysql_num_rows($checkcurp);

	
	if($check_curp>0){
	echo ' <script language="javascript">alert("Atencion, ya se ha asignado un horario para este empleado");</script> ';
	echo "<script>location.href='asignar.php'</script>";
	}
	else{


    mysql_query("INSERT INTO chorario (cvhorario, lini, lfin, maini, mafin, miini, mifin, jini,jfin,vini,vfin, sini, sfin, dini, dfin, cvempleado) VALUES('null', '$lini','$lfin','$maini','$mafin','$miini','$mifin','$jini','$jfin','$vini','$vfin','$sini','$sfin','$dini','$dfin','$id')");
	echo ' <script language="javascript">alert("horario registrado satisfactoriamente");</script> ';
	echo "<script>location.href='asignar.php'</script>";
	mysql_close($link);}
?>