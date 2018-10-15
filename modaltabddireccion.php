<?php


     $cvpersona=$_POST['catpersona'];
	$calle=$_POST['calle'];
	$numeroext=$_POST['numeroext'];
	$numeroint=$_POST['numeroint'];
	$colonia=$_POST['colonia'];
	$ciudad=$_POST['catciudad'];
	$estado=$_POST['catestado'];
	$cp=$_POST['cp'];
	

	require("connect_db.php");
	$checkcurp=mysql_query("SELECT * FROM direccion WHERE calle='$calle'");
	$check_curp=mysql_num_rows($checkcurp);

	
	if($check_curp>0){
				echo ' <script language="javascript">alert("Atencion, ya existe un usuario registrado, verifique sus datos");</script> ';
				echo "<script>location.href='altabddireccion.php'</script>";
			}
			else

			{
				mysql_query("INSERT INTO direccion VALUES('','$cvpersona','$calle','$numeroext','$numeroint','$colonia','$ciudad','$estado','$cp')");
				echo ' <script language="javascript">alert("Usuario registrado satisfactoriamente");</script> ';
				echo "<script>location.href='menubd.html'</script>";
				mysql_close($link);
			}
			
		
?>