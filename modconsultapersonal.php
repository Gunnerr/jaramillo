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
$quincena=$_REQUEST["catquincena"];
$mes=$_REQUEST["catmes"];
$ano=$_REQUEST["catano"];

$id=$_POST['catpersona'];
$quincena=$_POST["catquincena"];
$mes=$_POST["catmes"];
$ano=$_POST["catano"];



if($quincena==1){
$sql2="SELECT * FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$result=mysql_query($sql2);} 

else if($quincena==2){
$sql1="SELECT * FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$result=mysql_query($sql1);}



if($quincena==1){
$sql3="SELECT sum(sueldo) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$r3=mysql_query($sql3);} 

else if($quincena==2){
$sql3="SELECT sum(sueldo) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$r3=mysql_query($sql3);}

if($quincena==1){
$sql4="SELECT sum(hextra) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$r4=mysql_query($sql4);} 

else if($quincena==2){
$sql4="SELECT sum(hextra) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$r4=mysql_query($sql4);}


if($quincena==1){
$sql5="SELECT sum(sueldoextra) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$r5=mysql_query($sql5);} 

else if($quincena==2){
$sql5="SELECT sum(sueldoextra) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$r5=mysql_query($sql5);}


if($quincena==1){
$sql6="SELECT (sum(sueldo)+ sum(sueldoextra)) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=1 and fecha<=15";
$r6=mysql_query($sql6);} 

else if($quincena==2){
$sql6="SELECT (sum(sueldo)+ sum(sueldoextra)) FROM checado WHERE cvhorario='$id2' and cvmes='$mes' and ano='$ano' and fecha>=16 and fecha<=31";
$r6=mysql_query($sql6);}








?>




<body bgcolor=skyblue>


<table width="750" border="1" align="center" style="font-size:12px">
  <tr style="color: green" align="center">
    
    <td>CV CHECADO</td>
    <td>CV HORARIO</td>
    <td>DIA</td>
    <td>FECHA</td>
    <td>MES</td>
    <td>AÑO</td>
    <td>HORA ENTRADA</td>
    <td>HORA SALIDA</td>
    <td>HORA EXTRA</td>
    <td width="100">ESTATUS</td>
    <td>SUELDO</td>
    <td>SUELDO EXTRAS</td>


  <?php
  while ($row=mysql_fetch_array($result)){
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


  </tr>




  <?php
   } 

  ?>

</table>
  <TR></TR>


  <?php
  while ($row3=mysql_fetch_array($r3)){
  ?>

<tr><td width="192"> Sueldo Preeliminar: </td> <td width="192"><input type="text" name="sueldo" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" value=" $ <?php echo $row3[0]; ?>.00"></td>          </tr>

  <?php
   } 
  ?>

    



  <?php
  while ($row4=mysql_fetch_array($r4)){
  ?>
<tr><td width="192"> Horas Extras: </td> <td width="192"><input type="text" name="hextras" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" value=" <?php echo $row4[0]; ?>"></td>          </tr>
 <?php
   } 
  ?>




  <?php
  while ($row5=mysql_fetch_array($r5)){
  ?>


<tr><td width="192"> Sueldo Extra: </td> <td width="192"><input type="text" name="sextra" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" value=" $ <?php echo $row5[0]; ?>.00"></td></tr>


 <?php
   } 
  ?>



  <?php
  while ($row6=mysql_fetch_array($r6)){
  ?>


<tr><td width="192"> Sueldo Quincenal Final: </td> <td width="192"><input type="text" name="sextra" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" value=" $ <?php echo $row6[0]; ?>.00"></td></tr>


 <?php
   } 
  ?>





</form>


 <td><input type=submit   name="submit"   id="submit" value="PAGAR"></td></tr></table> 
</form>

<form action="modulopagar.php" target="visualizacion">

<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>

 <td><a href="nomina.html?idsalida=<?php echo $row[0]; ?>"> <input type=button value="SALIDA"></a></td>
  
</form>
</body>
</html>