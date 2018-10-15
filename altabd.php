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
<body bgcolor="skyblue" style="background-attachment: fixed">

<form name="MttoPersona" method="post" action="modaltabd.php">

  <blockquote><blockquote><blockquote>
  <center><h1><em><strong>"Registro de datos personales" </strong></em></h1>
  </blockquote></blockquote></blockquote>

<table width="400" border="0" align="center" rules="rows">    
    
 

<tr><td width="192"> Curp: </td> <td width="192"><input type="text" name="curp" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa una curp valida"></td></tr>


<tr><td width="192"> Nombre(s): </td> <td width="192"><input type="text" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu(s) nombre(s)"></td></tr>


<tr><td> Apellido Paterno: </td><td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Apellido Materno: </td><td><select name="catapemat" id="catapemat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido materno"><option></option>
<?php   include("connect_db.php");    $catapemat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapemat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select></td>


<tr><td> Genero: </td><td><select name="catgenero" id="catgenero" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu genero"><option></option>
<?php   include("connect_db.php");    $catgenero=mysql_query("select * FROM cgenero order by dsgenero ASC");
   while($resultado=mysql_fetch_array($catgenero)){?>
  <option value="<?php echo $resultado["cvgenero"]; ?>"> <?php echo $resultado["dsgenero"]; ?></option>
<?php } ?>}</select></td>
 

<tr><td>Telefono: </td><td><input type="number"    name="telefono" id="tel" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu telefono">   </td></tr>


<div class="form-group">

<tr><td> Email: </td></b>
<td><input type="email" name="email" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa un email valido" /></td></tr>
</div> 
 



     </table>
 
 <table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><input type=submit   name="submit"   id="submit" value="GUARDAR"></td></tr></table>    


</form>


<form action="menubd.html" target="visualizacion">
<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><input type=submit   name="submit"   id="submit" value="CANCELAR"></td></tr></table> 
</form>

</body>
</html>