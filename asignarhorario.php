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
include ("connect_db.php");   
$sql="select datospersonales.cvpersona, curp, nombre, cvapepat, cvapemat, cvgenero, telefono, email, empleado.estatus, cvempleado from datospersonales, empleado where datospersonales.cvpersona=empleado.cvpersona";
$resul=mysql_query($sql);
?>
<body bgcolor=skyblue>

 <blockquote><blockquote><blockquote>
  <center><h1><em><strong>"Asignar turno a un empleado" </strong></em></h1>
  </blockquote></blockquote></blockquote>

<table width="200" border="1" align="center" style="font-size:12px">
  <tr style="color: green" align="center">
    <td>Id Empleado</td>
    <td>Curp</td>
    <td>Nombre</td>
    <td>Apepat</td>
    <td>Apemat</td>
    <td>Genero</td>
    <td>Telefono</td>
    <td>Email</td>
    <td>Estatus</td>
    <td>Asignar Horario</td>
  
  </tr>
  <?php

  {
  ?>
  <tr>
    <td><?php echo $row[9];    ?></td>

    <td><?php echo utf8_encode($row[1]);    ?></td>
    <td><?php echo utf8_encode($row[2]);    ?></td>


<td><?php 
      include("connect_db.php");
      $sqlapepat="select C.dsapellido from datospersonales M, capellido C where M.cvapepat=C.cvapellido and '$row[3]'=M.cvapepat";
      $catapepat=mysql_query($sqlapepat);
      $rapepat=mysql_fetch_array($catapepat);
      echo $rapepat["dsapellido"]; ?></td>

<td><?php 
      include("connect_db.php");
      $sqlapemat="select C.dsapellido from datospersonales M, capellido C where M.cvapemat=C.cvapellido and '$row[4]'=M.cvapemat";
      $catapemat=mysql_query($sqlapemat);
      $rapemat=mysql_fetch_array($catapemat);
      echo $rapemat["dsapellido"]; ?></td>



<td><?php 
      include("connect_db.php");
      $sqlgenero="select C.dsgenero from datospersonales M, cgenero C where M.cvgenero=C.cvgenero and '$row[5]'=M.cvgenero";
      $ctgenero=mysql_query($sqlgenero);
      $rgenero=mysql_fetch_array($ctgenero);
      echo $rgenero["dsgenero"]; ?></td>


    <td><?php echo utf8_encode($row[6]);    ?></td>
    <td><?php echo utf8_encode($row[7]);    ?></td>
    <td><?php echo utf8_encode($row[8]);    ?></td>
   





   
    <td><a href="modasignarturno1.php?id=<?php echo $row[9]; ?>"> <input type=button value="ASIGNAR"> </a></td>
    



  </tr>
  <?php } ?>
</table>


<a href="horarios.html"><center><input type=button value="CANCELAR"></center></a>

</body>
</html>























