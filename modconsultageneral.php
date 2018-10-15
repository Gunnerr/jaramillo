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
include ("connect_db.php");
$id2=$_REQUEST["catpersona"];
$id=$_POST['catpersona'];

  $semana=$_POST["catsemana"];
  $mes=$_POST["catmes"];
  $ano=$_POST["catano"];



if($semana==1){

$sql="SELECT * FROM checado WHERE cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$resul=mysql_query($sql);
 

} else if($semana==2){


$sql="SELECT * FROM checado WHERE cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$resul=mysql_query($sql);

}






if($semana==1){
$sql7="SELECT (sum(sueldo)+ sum(sueldoextra)) FROM checado WHERE cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$r7=mysql_query($sql7);} 

else if($semana==2){
$sql7="SELECT (sum(sueldo)+ sum(sueldoextra)) FROM checado WHERE cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$r7=mysql_query($sql7);}

?>




<body bgcolor=skyblue>


<table width="750" border="1" align="center" style="font-size:12px">
  <tr style="color: green" align="center">
    
  
    
    <td>SEMANA</td>
    <td>FECHA</td>
    <td>MES</td>
    <td>AÑO</td>
    <td>HORA EXTRA</td>
    <td width="100">ESTATUS</td>
    <td>SUELDO</td>
    <td>SUELDO EXTRAS</td>
    <td>PAGADO</td>


  <?php
  while ($row=mysql_fetch_array($resul)){
  ?>


  <tr style="color: black" align="center">

 
<td><?php echo utf8_encode($row[0]);    ?></td>
    <td><?php echo utf8_encode($row[1]);    ?></td>
    <td><?php echo utf8_encode($row[2]);    ?></td>
    <td><?php echo utf8_encode($row[3]);    ?></td>
    <td><?php echo utf8_encode($row[4]);    ?></td>
    <td><?php echo utf8_encode($row[5]);    ?></td>
    <td><?php echo utf8_encode($row[6]);    ?></td>
    <td><?php echo utf8_encode($row[7]);    ?></td>
    <td><?php echo utf8_encode($row[8]);    ?></td>
    <td><?php echo utf8_encode($row[9]);    ?></td>
    <td>$ <?php echo utf8_encode($row[10]);   ?></td>
    <td>$ <?php echo utf8_encode($row[11]);   ?></td>
    <td> <?php echo utf8_encode($row[12]);   ?></td>


  </tr>




  <?php } ?>







</table>










<form action="nominageneral.php" target="visualizacion">
</form>
<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><a href="nomina.html?idsalida=<?php echo $row[0]; ?>"> <input type=button value="SALIDA"></a></td>
  

</form>
</body>
</html>