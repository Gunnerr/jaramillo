<?php


    $curp=$_POST['curp'];
	$nombre=$_POST['nombre'];
	$apepat=$_POST['apepat'];
	$apemat=$_POST['apemat'];
	$sexo=$_POST['catgenero'];
	$domicilio=$_POST['domicilio'];
	$email=$_POST['email'];
	$telefono=$_POST['telefono'];
	

	require("connect_db.php");
	$checkcurp=mysql_query("SELECT * FROM empleado WHERE curp='$curp'");
	$check_curp=mysql_num_rows($checkcurp);

	
	if($check_curp>0){
				echo ' <script language="javascript">alert("Atencion, ya existe curp designado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='alta.php'</script>";
			}
			else

			{
				mysql_query("INSERT INTO empleado VALUES('','$curp','$nombre','$apepat','$apemat','$sexo','$domicilio','$email','$telefono')");
				echo ' <script language="javascript">alert("Usuario registrado satisfactoriamente");</script> ';
				echo "<script>location.href='empleados.html'</script>";
				mysql_close($link);
			}
			
		
?>