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


extract($_GET);
require("connect_db.php");
$id=$_REQUEST["catpersona"];  
$sql="SELECT * FROM datospersonales WHERE cvpersona='$id'";
$resul=mysql_query($sql);
?>
<body bgcolor=skyblue>


<table width="200" border="1" align="center" style="font-size:12px">
  <tr style="color: green" align="center">
    <td>Id</td>
    <td>Curp</td>
    <td>Nombre</td>
    <td>Apepat</td>
    <td>Apemat</td>
    <td>Genero</td>
    <td>Telefono</td>
    <td>Email</td>
  
    <td>CONTRATAR</td>
  
  </tr>

  <?php
  while ($row=mysql_fetch_array($resul)){
  ?>


  <tr>
    <td><?php echo $row[0];    ?></td>

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


   
    <td><a href="modaltaempleados.php?id=<?php echo $row[0]; ?>"> <input type=button value="CONTRATAR"></a></td>
    



  </tr>
  <?php } ?>
</table>

</body>
</html>