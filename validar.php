<?php
@session_start();
require("connect_db.php");

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];



	$sql=mysql_query("SELECT * FROM login WHERE usuario='$usuario'");
	

	if($r=mysql_fetch_array($sql)){
		


		if($pass==$r['pass']){
			$_SESSION['usuario']=$r['usuario'];
			$_SESSION['pass']=$r['pass'];
			

			
			echo "<script>location.href='menu.html'</script>";
		
		}
else{
		echo '<script>alert("su nombre de usuario o password es invalido, verifique de nuevo")</script> ';
        echo "<script>location.href='login.html'</script>";
    }
		
	}



	else{
		echo '<script>alert("su nombre de usuario o password es invalido, verifique de nuevo")</script> ';
        echo "<script>location.href='login.html'</script>";
    }








?>
