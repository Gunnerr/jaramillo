<?php



	$nombre=$_POST['nombre'];
	$apepat=$_POST['apepat'];
	$apemat=$_POST['apemat'];
	$sexo=$_POST['cgenero'];
	$curp=$_POST['curp'];
	$n_control=$_POST['n_control'];
	$semestre=$_POST['csemestre'];
	$carrera=$_POST['ccarrera'];
	$colegio=$_POST['colegio'];
	$domicilio=$_POST['domicilio'];
	$colonia=$_POST['colonia'];
	$ciudad=$_POST['cciudad'];
	$cp=$_POST['cp'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];


	require("connect_db.php");
	$checkcurp=mysql_query("SELECT * FROM login WHERE nombre='$curp'");
	$check_curp=mysql_num_rows($checkcurp);

	if($pass==$rpass){
	if($check_curp>0){
				echo ' <script language="javascript">alert("Atencion, ya existe curp y numero de control designado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='registrar.php'</script>";
			}
			else

			{
				//require("connect_db.php");
				mysql_query("INSERT INTO login VALUES('','$nombre','$pass','soloadministrador','$curp','$n_control','$semestre','$carrera','$colegio','$apepat','$apemat','$sexo','$domicilio','$colonia','$ciudad','$cp','$telefono','$email','0','0')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado satisfactoriamente");</script> ';
				echo "<script>location.href='index.php'</script>";
				mysql_close($link);
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>