<?php

$conexion=mysql_connect("localhost","root","ej086a*");
if(!$conexion)
	echo utf8_decode("Error de conexión");

$base=mysql_select_db("abarrote");
if(!$base)
	echo "Error al seleccionar la base de datos";
?>