
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

<form name="MttoPersona" method="post" action="modconsultageneral.php">

<blockquote><blockquote><blockquote><center><h1><em><strong>Historial </strong></em></h1></blockquote></blockquote></blockquote>



<table width="400" border="0" align="center" rules="rows"> 
<tr><td></td><td> Quincena: </td><td><select name="catquincena" id="catquincena" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona la quincena" onchange="catmes.disabled=false"><option>Selecciona una Quincena</option>
<?php   include("connect_db.php");    $catquincena=mysql_query("select * FROM cquincena order by dsquincena ASC");
   while($resultado=mysql_fetch_array($catquincena)){?>
  <option value="<?php echo $resultado["cvquincena"]; ?>"> <?php echo $resultado["dsquincena"]; ?></option>
<?php } ?>}</select></td>
<td></td><td></td><td></td><td></td><td></td><td></td> 

<td> Mes: </td><td><select name="catmes" id="catmes" disabled="true" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido materno" onchange="catano.disabled=false"><option>Selecciona un Mes</option>
<?php   include("connect_db.php");    $catmes=mysql_query("select * FROM cmes order by cvmes ASC");
   while($resultado=mysql_fetch_array($catmes)){?>
  <option value="<?php echo $resultado["cvmes"]; ?>"> <?php echo $resultado["dsmes"]; ?></option>
<?php } ?>}</select></td>
<td></td><td></td><td></td><td></td><td></td><td></td>

<td> Año: </td><td><select name="catano" id="catano" disabled="true" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu genero" onchange="submit.disabled=false"><option>Selecciona un Año</option>
<?php   include("connect_db.php");    $catano=mysql_query("select * FROM cano order by cvano ASC");
   while($resultado=mysql_fetch_array($catano)){?>
  <option value="<?php echo $resultado["cvano"]; ?>"> <?php echo $resultado["dsano"]; ?></option>
<?php } ?>}</select></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><input type=submit  disabled="true" name="submit"   id="submit" value="GENERAR"></td></tr>
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