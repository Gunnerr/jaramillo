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

<form name="MttoPersona" method="post" action="modaltabddireccion.php">

  <blockquote><blockquote><blockquote>
  <center><h1><em><strong>"Ahora registra tu domicilio" </strong></em></h1>
  </blockquote></blockquote></blockquote>

<table width="400" border="0" align="center" rules="rows">    
    
 
 <tr><td> Persona: </td><td><select name="catpersona" id="catpersona" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona la persona para agregar domicilio"><option></option>
<?php   include("connect_db.php");    $catpersona=mysql_query("select * FROM datospersonales order by cvpersona ASC");
   while($resultado=mysql_fetch_array($catpersona)){?>
  <option value="<?php echo $resultado["cvpersona"]; ?>"> <?php echo $resultado["curp"]; ?></option>
<?php } ?>}</select></td>




<tr><td>Calle: </td><td><input type="text" name="calle" id="calle" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu calle"></td></tr>

<tr><td>Numero Exterior: </td><td><input type="number" name="numeroext" id="numeroext" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa el numero de casa"></td></tr>


<tr><td>Numero Interior: </td><td><input type="number" name="numeroint" id="numeroint" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa el numero de casa interior"></td></tr>

<tr><td>Colonia: </td><td><input type="text" name="colonia" id="colonia" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa el nombre de tu barrio"></td></tr>


<tr><td> Ciudad: </td><td><select name="catciudad" id="catciudad" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu ciudad"><option></option>
<?php   include("connect_db.php");    $catciudad=mysql_query("select * FROM cciudad order by dsciudad ASC");
   while($resultado=mysql_fetch_array($catciudad)){?>
  <option value="<?php echo $resultado["cvciudad"]; ?>"> <?php echo $resultado["dsciudad"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Estado: </td><td><select name="catestado" id="catestado" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu estado"><option></option>
<?php   include("connect_db.php");    $catestado=mysql_query("select * FROM cestado order by dsestado ASC");
   while($resultado=mysql_fetch_array($catestado)){?>
  <option value="<?php echo $resultado["cvestado"]; ?>"> <?php echo $resultado["dsestado"]; ?></option>
<?php } ?>}</select></td>

<tr><td>Codigo Postal: </td><td><input type="number" name="cp" id="cp" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu codigo postal"></td></tr>

     </table>
 
 <table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><input type=submit   name="submit"   id="submit" value="GUARDAR"></td></tr></table>    


</form>

<form action="altabd.php" target="visualizacion"><input type=submit value="Cancelar"></form>

</body>
</html>