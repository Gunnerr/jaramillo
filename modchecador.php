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
$sql="select * from horario where cvempleado='$id'";
$resul=mysql_query($sql);
?>




<body bgcolor=skyblue>


<table width="200" border="1" align="center" style="font-size:12px">
  <tr style="color: green" align="center">
    <td>LUNES</td>
    <td>MARTES</td>
    <td>MIERCOLES</td>
    <td>JUEVES</td>
    <td>VIERNES</td>
    <td>SABADO</td>
    <td>DOMINGO</td>
    <td>ENTRADA</td>
    <td>SALIDA</td>
  </tr>

  <?php
  while ($row=mysql_fetch_array($resul)){
  ?>


  <tr>


      <td><?php 
      include("connect_db.php");
      $lunes="select C.dsturno from horario M, cturno C where M.lunes=C.cvturno and '$row[2]'=M.lunes";
      $clunes=mysql_query($lunes);
      $rlunes=mysql_fetch_array($clunes);
      echo $rlunes["dsturno"]; ?></td>


      <td><?php 
      include("connect_db.php");
      $martes="select C.dsturno from horario M, cturno C where M.martes=C.cvturno and '$row[3]'=M.martes";
      $cmartes=mysql_query($martes);
      $rmartes=mysql_fetch_array($cmartes);
      echo $rmartes["dsturno"]; ?></td>


      <td><?php 
      include("connect_db.php");
      $miercoles="select C.dsturno from horario M, cturno C where M.miercoles=C.cvturno and '$row[4]'=M.miercoles";
      $cmiercoles=mysql_query($miercoles);
      $rmiercoles=mysql_fetch_array($cmiercoles);
      echo $rmiercoles["dsturno"]; ?></td>


      <td><?php 
      include("connect_db.php");
      $jueves="select C.dsturno from horario M, cturno C where M.jueves=C.cvturno and '$row[5]'=M.jueves";
      $cjueves=mysql_query($jueves);
      $rjueves=mysql_fetch_array($cjueves);
      echo $rjueves["dsturno"]; ?></td>


      <td><?php 
      include("connect_db.php");
      $viernes="select C.dsturno from horario M, cturno C where M.viernes=C.cvturno and '$row[6]'=M.viernes";
      $cviernes=mysql_query($viernes);
      $rviernes=mysql_fetch_array($cviernes);
      echo $rviernes["dsturno"]; ?></td>

      <td><?php 
      include("connect_db.php");
      $sabado="select C.dsturno from horario M, cturno C where M.sabado=C.cvturno and '$row[7]'=M.sabado";
      $csabado=mysql_query($sabado);
      $rsabado=mysql_fetch_array($csabado);
      echo $rsabado["dsturno"]; ?></td>


      <td><?php 
      include("connect_db.php");
      $domingo="select C.dsturno from horario M, cturno C where M.domingo=C.cvturno and '$row[8]'=M.domingo";
      $cdomingo=mysql_query($domingo);
      $rdomingo=mysql_fetch_array($cdomingo);
      echo $rdomingo["dsturno"]; ?></td>


    <td><a href="checarentrada.php?identrada=<?php echo $row[0];?>"> <input type=button value="ENTRADA"></a></td>
    <td><a href="checarsalida.php?idsalida=<?php echo $row[0]; ?>"> <input type=button value="SALIDA"></a></td>
    



  </tr>
  <?php } ?>
</table>

</body>
</html>