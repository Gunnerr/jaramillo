<?php
@session_start();
require("MyConexion.php");

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
if($sql=mysql_query("SELECT * FROM login WHERE usuario='$usuario' AND pass='$pass'")){
	$r=mysql_fetch_assoc($sql);
	$_SESSION['usuario']=$r['usuario'];
	$_SESSION['pass']=$r['pass'];
	echo "<script>location.href='menu.html'</script>";
}else{
	echo '<script>alert("su nombre de usuario o password es invalido, verifique de nuevo")</script> ';
    echo "<script>location.href='login.html'</script>";
}