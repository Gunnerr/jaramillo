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
$sql="select * from checado where cvhorario='$id' order by fecha asc";
$sql2="select * from horario where cvhorario='$id'";

$resul=mysql_query($sql);
?>
<body bgcolor=skyblue>



<table width="1250" border="1" align="center" style="font-size:12px">
  <tr style="color: green" align="center">
    
  
   
    <td>FECHA</td>
    <td>DIA</td>
   
    <td>MARCAS<BR>HORARIO</td>
    
    <td>FOLIO EMPLEADO</td>
    <td width="100">INCIDENCIA</td>


  <?php
  while ($row=mysql_fetch_array($resul)){
  ?>


  <tr style="color: black" align="center">

 

 
    
<td><?php echo utf8_encode($row[3]);?>-<?php echo utf8_encode($row[4]);?>-<?php echo utf8_encode($row[5]);?></td>
<td><?php 
      include("connect_db.php");
      $dia="select * from cdia where '$row[2]'=cvdia";
      $cdia=mysql_query($dia);
      $rdia=mysql_fetch_array($cdia);
      echo $rdia["dsdia"]; ?></td>
<td style="font-size:10px"><?php echo utf8_encode($row[6]);?> - <?php echo utf8_encode($row[7]);?><BR>
<?php 
      include("connect_db.php");
      $lunes="select * from cturno where cvturno='1'";
      $clunes=mysql_query($lunes);
      $rlunes=mysql_fetch_array($clunes);
      echo $rlunes["horaini"]; ?>-<?php 
      include("connect_db.php");
      $lunes="select * from cturno where cvturno='1'";
      $clunes=mysql_query($lunes);
      $rlunes=mysql_fetch_array($clunes);
      echo $rlunes["horafin"]; ?></td>
<td><?php echo utf8_encode($row[1]);?></td>
<td><?php echo utf8_encode($row[8]);?></td>
  

  </tr>



  <?php
   } 

  ?>

</table>
  


 





 

</body>
</html>