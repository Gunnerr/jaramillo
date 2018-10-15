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
include ("connect_db.php");   
$sql="select * from empleado";
$resul=mysql_query($sql);
?>
<body bgcolor=orange>


<table width="200" border="1" align="center">
  <tr style="color: green" align="center">
    <td>Id</td>
    <td>Curp</td>
    <td>Nombre</td>
    <td>Apepat</td>
    <td>Apemat</td>
    <td>Genero</td>
    <td>Domicilio</td>
    <td>Email</td>
    <td>Telefono</td>
    <td>Modificar</td>
    <td>Eliminar</td>
  
  </tr>
  <?php
  while ($row=mysql_fetch_array($resul))
  {
  ?>
  <tr>
    <td><?php echo $row[0];    ?></td>

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
    <td><a href="modificar2.php?id=<?php echo $row[0]; ?>">Modificar </a></td>
    <td><a href="modbaja2.php?id=<? echo $row[0]?>" onclick="return confirm('¿Estás seguro que desea eliminar este registro?')">Eliminar</a>  </td>




  </tr>
  <?php } ?>
</table>
<a href="empleado.php"><center>Cancelar</center></a>

</body>
</html>