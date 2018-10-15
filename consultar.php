<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>

<html lang="es">
<head>
<meta charset="utf-8">
<title>COHOEM</title>   
</head>

<?php
  $b = 0;
  include("connect_db.php");  if(!empty($_REQUEST["Buscar"])){
    $nombre=$_REQUEST["Buscar"];
    $sql="select distinct * from empleados where nombre like '%$nombre%'";
    $resultado=mysql_query($sql);
    $b=1;}
?>

<body bgcolor=skyblue>



<form name="modbaja" method="post" action="#"> <p>&nbsp;</p>


<table width="444" border="0" align="center">
 <tr>
  <td width="122">nombre a buscar:</td>
  <td width="152"><input type="text" name="Buscar" id="textfield"></td>
  <td width="156"><input type="submit" name="submit" id="submit" value="Buscar"></td>
 </tr>
</table>
</form>
<a href="empleados.html"><center><input type=submit value="Cancelar"></center></a>
</body>
</html>


