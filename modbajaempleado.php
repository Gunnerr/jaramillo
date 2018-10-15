<?php
$id=$_REQUEST["id"];
include ("connect_db.php");
$sql="delete from empleado where cvpersona='$id'";
if (mysql_query($sql))
{
	header("location:bajaempleado.php");
}

?>