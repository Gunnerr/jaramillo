<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['nombre']) {header("Location:index.php");}
?>

<html lang="es">
<head><meta charset="utf-8"><title>COHOEM</title></head>

<?php
  $id=$_REQUEST["id"];
  include("connect_db.php");
  $sqldos="select * from empleado where cvempleado=$id";
  $resultados=mysql_query($sqldos);
  $row=mysql_fetch_array($resultados);
?>


<body bgcolor=skyblue>




<form name="frm_datos_grales" method="post" action="modmodificar.php">

  
  <table width="400" border="0" align="center" rules="rows">
      <tr>
      <td>Curp</td>
      <td><input type="text" name="curp" value="<?php echo utf8_encode($row[1]); ?>"></td>
      </tr>

      <tr>
      <td>Nombre </td>
      <td><input type="text" name="nombre" value="<?php echo utf8_encode($row[2]); ?>"></td>
      </tr>

      <tr>
      <td>Apellido paterno</td>
      <td><input type="text" name="apepat" value="<?php echo utf8_encode($row[3]); ?>"></td>
      </tr>

      <tr>
      <td>Apellido materno</td>
      <td><input type="text" name="apemat" value="<?php echo utf8_encode($row[4]); ?>"></td>
      </tr>


      <tr>
      <td>Genero</td>
      <td><select name="catgenero" id="catgenero"> <?php
      include("connect_db.php");
      $sqlgenero="select * from cgenero order by dsgenero ASC";
      $catgenero=mysql_query($sqlgenero); 
      while($rslgenero=mysql_fetch_array($catgenero)) { ?>
      <option value= " <?php echo $rslgenero["cvgenero"]; ?>" <?php if($row[5]==$rslgenero["cvgenero"]) { ?> 
      selected="selected" <?php } ?> > <?php echo $rslgenero["dsgenero"]; ?>
      </option> <?php } ?>
      </tr>

      <tr>
      <td>Domicilio</td>
      <td><input type="text" name="domicilio" value="<?php echo utf8_encode($row[6]); ?>"></td>
      </tr>

      <tr>
      <td>eMail</td>
      <td><input type="email" name="email" value="<?php echo utf8_encode($row[7]); ?>"></td>
      </tr>


      <tr>
      <td>Telefono</td>
      <td><input type="number" name="telefono" value="<?php echo utf8_encode($row[8]); ?>"></td>
      </tr>


      <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Enviar"></td>
      </tr>
   
      <a href="consultar.php"><center>CANCELAR</center></a>
</table>
</form>
</body>
</html>

