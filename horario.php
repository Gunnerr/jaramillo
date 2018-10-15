<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['nombre']) {header("Location:index.php");}
?>

<html lang="es">
<head><meta charset="utf-8"><title>COHOEM</title></head>
<body bgcolor=orange>

<center><div><h2 style="color:blue; ">HORARIO</h2>
<table border="0" align="center" valign="middle">
<tr><td rowspan=2>
<form action="asignar.php" method="post">
<table border="0">
<tr><td></td><td width=80 align=center><input type="submit" value="ASIGNAR"></td></tr>
</table></form></td></tr></table></div></center>

<center>
<form action="consultahorario.php" method="post">
<table border="0">
<tr><td></td><td width=80 align=center><input type="submit" value="CONSULTAR"></td></tr>
</table></form></center></center>

<center>
<form action="menu.php" method="post">
<table border="0">
<tr><td></td><td width=80 align=center><input type="submit" value="ATRAS"></td></tr>
</table></form></center></center>

</body>
</html>