
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

    <td width="100">ESTATUS</td>

    


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



  </tr>




  <?php
   } 

  ?>

</table>
  <TR></TR>


  <?php
  while ($row3=mysql_fetch_array($r3)){
  ?>


    






  










 


<form action="checada.php" target="visualizacion">
<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><input type=submit   name="submit"   id="submit" value="CANCELAR"></td></tr></table> 
</form>
</body>
</html>