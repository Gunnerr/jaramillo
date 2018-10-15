<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>

<html lang="es">
<head><meta charset="utf-8"><title>JARAMILLO</title></head>




<body bgcolor=skyblue>


<?php

extract($_GET);
require("connect_db.php");
  $id=$_REQUEST["id"];
   
  
  $sqldos="select * from datospersonales where cvpersona=$id";
  $resultados=mysql_query($sqldos);
  $row=mysql_fetch_array($resultados);
?>


<form name="frm_datos_grales" method="post" action="modaltaempleados.php">

  
  <table width="400" border="0" align="center" rules="rows">
      <tr>
      <td>Curp: </td>
      <td><input type="text" name="curp" value="<?php echo utf8_encode($row[1]); ?>"></td>
      </tr>

      <tr>
      <td>Nombre: </td>
      <td><input type="text" name="nombre" value="<?php echo utf8_encode($row[2]); ?>"></td>
      </tr>

    

      <td>Apellido paterno: </td>
      <td><select name="catapepat" id="catapepat"> <?php
      include("connect_db.php");
      $sqlapepat="select * from capellido order by dsapellido ASC";
      $catapepat=mysql_query($sqlapepat); 
      while($rslapepat=mysql_fetch_array($catapepat)) { ?>
      <option value= " <?php echo $rslapepat["cvapellido"]; ?>" <?php if($row[3]==$rslapepat["cvapellido"]) { ?> 
      selected="selected" <?php } ?> > <?php echo $rslapepat["dsapellido"]; ?>
      </option> <?php } ?>
      </tr>

     <td>Apellido materno: </td>
      <td><select name="catapemat" id="catapemat"> <?php
      include("connect_db.php");
      $sqlapemat="select * from capellido order by dsapellido ASC";
      $catapemat=mysql_query($sqlapemat); 
      while($rslapemat=mysql_fetch_array($catapemat)) { ?>
      <option value= " <?php echo $rslapemat["cvapellido"]; ?>" <?php if($row[4]==$rslapemat["cvapellido"]) { ?> 
      selected="selected" <?php } ?> > <?php echo $rslapemat["dsapellido"]; ?>
      </option> <?php } ?>
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
      <td>Telefono</td>
      <td><input type="number" name="telefono" value="<?php echo utf8_encode($row[6]); ?>"></td>
      </tr>
      <tr>
      <td>eMail</td>
      <td><input type="email" name="email" value="<?php echo utf8_encode($row[7]); ?>"></td>
      </tr>


    


      <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="CONTRATAR"></td>
      </tr>
   
      <a href="modaltaempleado.php"><center>CANCELAR</center></a>
</table>
</form>
</body>
</html>

