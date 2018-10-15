0<!DOCTYPE html>
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
  $id=$_REQUEST["id"];
   include("connect_db.php");
  $sqldoss="select * from chorario INNER JOIN empleado ON chorario.cvempleado=empleado.cvempleado";
  $resultados=mysql_query($sqldoss);
?>


<body bgcolor="skyblue" style="background-attachment: fixed">



  <blockquote><blockquote><blockquote>
  <center><h1><em><strong>"Registro de empleados" </strong></em></h1>
  </blockquote></blockquote></blockquote>


<table width="200" border="1" align="center">
  <tr style="color: green" align="center">


   
    <td>Id</td>
    <td>Nombre</td>
    <td>Apepat</td>
    <td>Apemat</td>
    <td>Lunes</td>
    <td>Martes</td>
    <td>Miercoles</td>
    <td>Jueves</td>
    <td>Viernes</td>
    <td>Sabado</td>
    <td>Domingo</td>


<?php
  while ($row=mysql_fetch_array($resultados))
  {
  ?>
  <tr>
    <td><?php echo             $row[0];    ?></td>

    <td><?php echo utf8_encode($row[18]);    ?></td>
    <td><?php echo utf8_encode($row[19]);    ?></td>
    <td><?php echo utf8_encode($row[20]);    ?></td>
    <td><?php echo utf8_encode($row[1]);?>-<?php echo utf8_encode($row[2]);?> </td>
     <td><?php echo utf8_encode($row[3]);?>-<?php echo utf8_encode($row[4]);?> </td>
 <td><?php echo utf8_encode($row[5]);?>-<?php echo utf8_encode($row[6]);?> </td>
 <td><?php echo utf8_encode($row[7]);?>-<?php echo utf8_encode($row[8]);?> </td>
 <td><?php echo utf8_encode($row[9]);?>-<?php echo utf8_encode($row[10]);?> </td>
 <td><?php echo utf8_encode($row[11]);?>-<?php echo utf8_encode($row[12]);?> </td>
  <td><?php echo utf8_encode($row[13]);?>-<?php echo utf8_encode($row[14]);?> </td>


 </tr>
  <?php } ?>



</table>




<form action="consultara.php" ><input type=submit value="Cancelar"></form>

</body>
</html>














