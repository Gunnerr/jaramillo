<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>

<html lang="es">
<head><meta charset="utf-8"><title>COHOEM</title></head>




<body bgcolor=skyblue>


<?php

extract($_GET);
require_once("connect_db.php");
  $id=$_REQUEST['id'];
  
  $sqldos="select datospersonales.cvpersona, curp, nombre, cvapepat, cvapemat, cvgenero, telefono, email, 
direccion.calle, numeroext, numeroint, colonia, cvciudad,cvestado, cp 
from datospersonales, direccion 
where 
datospersonales.cvpersona=direccion.cvpersona and datospersonales.cvpersona='$id'";
  $resultados=mysql_query($sqldos);
 


$_SESSION["curp"]=$row["curp"];
$_SESSION["nombre"]=$row["nombre"];
$_SESSION["catapepat"]=$row["cvapepat"];
$_SESSION["catapemat"]=$row["cvapemat"];
$_SESSION["catgenero"]=$row["cvgenero"];
$_SESSION["telefono"]=$row["telefono"];
$_SESSION["email"]=$row["email"];




?>


<form name="frm_datos_grales" method="post" action="modmodificarbd.php">

  
  <table width="400" border="0" align="center" rules="rows">
      <tr>
      <td>Curp: </td>
      <td><input type="text" name="curp" value="<?php echo utf8_encode($_SESSION["curp"]); ?>"></td>
      </tr>

      <tr>
      <td>Nombre: </td>
      <td><input type="text" name="nombre" value="<?php echo utf8_encode($_SESSION["nombre"]); ?>"></td>
      </tr>

    

      <td>Apellido paterno: </td>
      <td><select name="catapepat" id="catapepat"> <?php
      include("connect_db.php");
      $sqlapepat="select * from capellido order by dsapellido ASC";
      $catapepat=mysql_query($sqlapepat); 
      while($rslapepat=mysql_fetch_array($catapepat)) { ?>
      <option value=<?php echo $rslapepat["cvapellido"]; ?> <?php if($_SESSION["catapepat"]==$rslapepat["cvapellido"]) { ?> 
      selected="selected" <?php } ?> > <?php echo $rslapepat["dsapellido"]; ?>
      </option> <?php } ?>
      </tr>

     <td>Apellido materno: </td>
      <td><select name="catapemat" id="catapemat"> <?php
      include("connect_db.php");
      $sqlapemat="select * from capellido order by dsapellido ASC";
      $catapemat=mysql_query($sqlapemat); 
      while($rslapemat=mysql_fetch_array($catapemat)) { ?>
      <option value= " <?php echo $rslapemat["cvapellido"]; ?>" <?php if($_SESSION["catapemat"]==$rslapemat["cvapellido"]) { ?> 
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
      <option value= " <?php echo $rslgenero["cvgenero"]; ?>" <?php if($_SESSION["catgenero"]==$rslgenero["cvgenero"]) { ?> 
      selected="selected" <?php } ?> > <?php echo $rslgenero["dsgenero"]; ?>
      </option> <?php } ?>
      </tr>

     
       <tr>
      <td>Telefono</td>
      <td><input type="number" name="telefono" value="<?php echo utf8_encode($_SESSION["telefono"]); ?>"></td>
      </tr>
      <tr>
      <td>eMail</td>
      <td><input type="email" name="email" value="<?php echo utf8_encode($_SESSION["email"]); ?>"></td>
      </tr>




      <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Enviar"></td>
      </tr>
   
      
</table>
</form>
<a href="consultarbd.php"><center><input type=button value="CANCELAR"></center></a>
</body>
</html>

