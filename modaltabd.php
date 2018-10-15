<?php


    $curp=$_POST['curp'];
	$nombre=$_POST['nombre'];
	$apepat=$_POST['catapepat'];
	$apemat=$_POST['catapemat'];
	$sexo=$_POST['catgenero'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	
	

	require("connect_db.php");
	$checkcurp=mysql_query("SELECT * FROM datospersonales WHERE curp='$curp'");
	$check_curp=mysql_num_rows($checkcurp);

	
	if($check_curp>0){
				echo ' <script language="javascript">alert("Atencion, ya existe curp designado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='altabd.php'</script>";
			}
			else

			{
				mysql_query("INSERT INTO datospersonales VALUES('','$curp','$nombre','$apepat','$apemat','$sexo','$telefono','$email')");
				
				echo ' <script language="javascript">alert("Usuario registrado satisfactoriamente");</script> ';
				echo "<script>location.href='altabddireccion.php'</script>";
				mysql_close($link);
			}
			
		
?>