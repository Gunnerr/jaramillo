<?php
$id=$_REQUEST["id"];
include ("connect_db.php");
$sql="delete from empleado where cvempleado='$id'";
if (mysql_query($sql))
{
	header("location:consultabaja.php");
}

?>