<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['nombre']) {header("Location:index.php");}
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
    $sql="select distinct * from empleado where nombre like '%$nombre%'";
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



<table width="429" border="1" align="center">

 <tr> <td colspan="15" align="center"><a href="consultabaja.php"> Consultar Todos </a></td>  </tr>


 <tr>
  <td width="96" align="center">Id</td>
  <td width="96" align="center">Curp</td>
  <td width="96" align="center">Nombre</td>
  <td width="47" align="center">ApePat</td>
  <td width="96" align="center">ApeMat</td>
  <td width="96" align="center">Sexo</td>
  <td width="96" align="center">Domicilio</td>
  <td width="96" align="center">eMail</td>
  <td width="96" align="center">Telefono</td>
  <td width="75" align="center">Eliminar</td>
 </tr>
  

<?php
if ($b==1){

echo utf8_encode("<br><br><center>N&uacute;mero de registros encontrados: "); 
echo $cont=mysql_num_rows($resultado);
echo "</center>";

while ($row=mysql_fetch_array($resultado)){
      
?>
<tr>
 <td><?php echo utf8_encode($row[0]);    ?></td>
 <td><?php echo utf8_encode($row[1]);    ?></td>
 <td><?php echo utf8_encode($row[2]);    ?></td>
 <td><?php echo utf8_encode($row[3]);    ?></td>
 <td><?php echo utf8_encode($row[4]);    ?></td>


 <td><?php 
      include("connect_db.php");
      $sqlgenero="select C.dsgenero from empleado M, cgenero C where M.cvgenero=C.cvgenero and '$row[5]'=M.cvgenero";
      $ctgenero=mysql_query($sqlgenero);
      $rgenero=mysql_fetch_array($ctgenero);
      echo $rgenero["dsgenero"]; ?></td>
   
 <td><?php echo utf8_encode($row[6]);    ?></td>
 <td><?php echo utf8_encode($row[7]);    ?></td>
 <td><?php echo utf8_encode($row[8]);    ?></td>


</tr>

<?php 
    }}
?>

</table>
<a href="empleados.html"><center>CANCELAR</center></a>
</form>
</body>
</html>


