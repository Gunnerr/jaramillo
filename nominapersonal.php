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


<form name="MttoPersona" method="post" action="modconsultapersonal.php">

<blockquote><blockquote><blockquote><center><h1><em><strong>"Generar Salario de un empleado en especifico" </strong></em></h1></blockquote></blockquote></blockquote>



<table width="400" border="0" align="center" rules="rows"> 
<tr><td></td><td> Semanal: </td><td><select name="catquincena" id="catquincena" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona la semana" onchange="catmes.disabled=false"><option>Selecciona una Semanal</option>
<?php   include("connect_db.php");    $catsemana=mysql_query("select * FROM csemana order by dssemana ASC");
   while($resultado=mysql_fetch_array($catsemana)){?>
  <option value="<?php echo $resultado["cvsemana"]; ?>"> <?php echo $resultado["dssemana"]; ?></option>
<?php } ?>}</select></td>
<td></td><td></td><td></td><td></td><td></td><td></td> 

<td> Mes: </td><td><select name="catmes" id="catmes" disabled="true" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido materno" onchange="catano.disabled=false"><option>Selecciona un Mes</option>
<?php   include("connect_db.php");    $catmes=mysql_query("select * FROM cmes order by cvmes ASC");
   while($resultado=mysql_fetch_array($catmes)){?>
  <option value="<?php echo $resultado["cvmes"]; ?>"> <?php echo $resultado["dsmes"]; ?></option>
<?php } ?>}</select></td>
<td></td><td></td><td></td><td></td><td></td><td></td>

<td> Año: </td><td><select name="catano" id="catano" disabled="true" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu genero" onchange="catpersona.disabled=false"><option>Selecciona un Año</option>
<?php   include("connect_db.php");    $catano=mysql_query("select * FROM cano order by cvano ASC");
   while($resultado=mysql_fetch_array($catano)){?>
  <option value="<?php echo $resultado["cvano"]; ?>"> <?php echo $resultado["dsano"]; ?></option>
<?php } ?>}</select></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type=submit  disabled="true" name="submit"   id="submit" value="GENERAR"></td></tr>
</table>
   


<table width="400" border="0" align="center" rules="rows">       
<tr><td> Empleado: </td><td><select name="catpersona" id="catpersona" disabled="true" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="" onchange="submit.disabled=false"><option> Ahora Selecciona un Empleado</option>
<?php   include("connect_db.php");    $catpersona=mysql_query("select datospersonales.curp, nombre, telefono, email, 
empleado.cvpersona, estatus,
horario.cvempleado, cvhorario
from datospersonales, empleado, horario 
where datospersonales.cvpersona=empleado.cvpersona 
and empleado.cvempleado=horario.cvempleado order by cvempleado");
   while($resultado=mysql_fetch_array($catpersona)){?>
  <option value="<?php echo $resultado["cvhorario"]; ?>"> <?php echo $resultado["curp"]; ?> -- <?php echo $resultado["nombre"]; ?> -- <?php echo $resultado["telefono"]; ?> -- <?php echo $resultado["email"]; ?> -- <?php echo $resultado["estatus"]; ?> </option>
<?php } ?>}</select></td></tr>
 </table>




</form>
<br>

<form action="nomina.html" target="visualizacion">
<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 
 <td><input type=submit   name="submit"   id="submit" value="CANCELAR"></td></tr></table> 
</form>

</body>
</html>