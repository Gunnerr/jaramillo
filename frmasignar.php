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
  $id=$_REQUEST["id"];
   include("connect_db.php");
  $sqldos="select * from empleado where cvempleado=$id";
  $resultados=mysql_query($sqldos);
?>


<body bgcolor="skyblue" style="background-attachment: fixed">


<form name="asignar" method="post" action="modasignar.php">

  <blockquote><blockquote><blockquote>
  <center><h1><em><strong>"Registro de empleados" </strong></em></h1>
  </blockquote></blockquote></blockquote>


<table width="200" border="1" align="center">
  <tr style="color: green" align="center">


    <td>Id</td>
    <td>Curp</td>
    <td>Nombre</td>
    <td>Apepat</td>
    <td>Apemat</td>

<?php
  while ($row=mysql_fetch_array($resultados))
  {
  ?>
  <tr>
    <td><?php echo             $row[0];    ?></td>

    <td><?php echo utf8_encode($row[1]);    ?></td>
    <td><?php echo utf8_encode($row[2]);    ?></td>
    <td><?php echo utf8_encode($row[3]);    ?></td>
    <td><?php echo utf8_encode($row[4]);    ?></td>


 </tr>
  <?php } ?>



</table>





<table width="400" border="0" align="center" rules="rows">    
    

 
<tr><td width="192"> </td> <td width="192">hora inicio</td> <td width="192">hora fin</td></tr>


<tr><td width="192"> Confirme Id: </td> <td width="192"><input type="number" name="id" ></td> <td width="192"></tr>

<tr><td width="192"> Lunes: </td> <td width="192"><input type="time" name="lini" ></td> <td width="192"><input type="time" name="lfin" ></td></tr>

<tr><td width="192"> Martes: </td> <td width="192"><input type="time" name="maini" ></td> <td width="192"><input type="time" name="mafin" ></td></tr>

<tr><td width="192"> Miercoles: </td> <td width="192"><input type="time" name="miini" ></td> <td width="192"><input type="time" name="mifin" ></td></tr>

<tr><td width="192"> Jueves: </td> <td width="192"><input type="time" name="jini" ></td> <td width="192"><input type="time" name="jfin" ></td></tr>

<tr><td width="192"> Viernes: </td> <td width="192"><input type="time" name="vini" ></td> <td width="192"><input type="time" name="vfin" ></td></tr>

<tr><td width="192"> Sabado: </td> <td width="192"><input type="time" name="sini" ></td> <td width="192"><input type="time" name="sfin" ></td></tr>

<tr><td width="192"> Domingo: </td> <td width="192"><input type="time" name="dini" ></td> <td width="192"><input type="time" name="dfin" ></td></tr>


     </table>
 
 <table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>




</tr></table>  

<td><input type=submit name="submit" id="submit" value="ASIGNAR" >  </td>

</form>

<form action="asignar.php" ><input type=submit value="Cancelar"></form>

</body>
</html>