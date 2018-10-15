<!DOCTYPE html>
<html><head><meta charset="utf-8"><link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
<title>..::SISBE::..</title></head>


<body bgcolor="orange" style="background-attachment: fixed">

<center><div class="tit"><h2 style="color:skyblue; "> Registrar Usuario </h2>

<center><div class="registro">



<form method="post" action="index.php."><input type="submit" name="submit" class="btn btn-danger" value="Cancelar"></form>


<form method="post" action="registro.php">
<fieldset>
<table width="400" border="0" align="center" rules="">


<div class="form-group">
<tr><td> Nombre(s): </td></b>
<td><input type="text" name="nombre"  onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu(s) nombre(s)" /></td>
</tr></div>


<div class="form-group">
<tr><td> Apellido Paterno: </td></b>
<td><input type="text" name="apepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu Primer Apellido" /></td></tr>
</div>


<div class="form-group">
<tr><td> Apellido Materno:</td></b>
<td><input type="text" name="apemat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu Segundo Apellido" /></td></tr>
</div>


<div class="form-group">
<tr><td> Sexo: </td><td>
<select name="cgenero" id="cgenero"><option>Selecciona tu sexo </option>
<?php   
include("connect_db.php");
$cgenero=mysql_query("select * FROM cgenero order by dsgenero ASC");
while($resultado=mysql_fetch_array($cgenero)){?>
<option value="<?php echo $resultado["cvgenero"]; ?>"> <?php echo $resultado["dsgenero"]; ?></option>
<?php } ?>}</select></td></tr> 
</div>


<div class="form-group">
<tr><td> CURP: </td></b>
<td><input type="text" name="curp" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa tu CURP" /></td></tr></div>

<div class="form-group">
<tr><td> Numero de Control: </td></b>
<td><input type="number" name="n_control"  class="form-control" required placeholder="Ingresa tu número de control" /></td></tr>
</div>


<div class="form-group">
<tr><td> Semestre: </td><td>
<select name="csemestre" id="csemestre"><option>Selecciona tu semestre </option>
<?php   
include("connect_db.php");
$cgenero=mysql_query("select * FROM csemestre order by cvsemestre ASC");
while($resultado=mysql_fetch_array($cgenero)){?>
<option value="<?php echo $resultado["cvsemestre"]; ?>"> <?php echo $resultado["dssemestre"]; ?></option>
<?php } ?>}</select></td></tr> 
</div>


<div class="form-group">
<tr><td> Carrera: </td><td>
<select name="ccarrera" id="ccarrera"><option>Selecciona tu carrera </option>
<?php   
include("connect_db.php");
$ccarrera=mysql_query("select * FROM ccarrera order by dscarrera ASC");
while($resultado=mysql_fetch_array($ccarrera)){?>
<option value="<?php echo $resultado["dscarrera"]; ?>"> <?php echo $resultado["dscarrera"]; ?></option>
<?php } ?>}</select></td></tr> 
</div>


<div class="form-group">
<tr><td> Colegio: </td></b>
<td><input type="text" name="colegio" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" value="TECNM COMITAN" placeholder="TECNM COMITAN" /></td></tr>
</div>

<div class="form-group">
<tr><td> Domicilio: </td></b>
<td><input type="text" name="domicilio" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Ingresa tu domicilio" /></td></tr>
</div>

<div class="form-group">
<tr><td> Colonia: </td></b>
<td><input type="text" name="colonia" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Ingresa tu colonia" /></td></tr>
</div>


<div class="form-group">
<tr><td> Ciudad: </td><td>
<select name="cciudad" id="cciudad"><option>Selecciona tu ciudad </option>
<?php   
include("connect_db.php");
$cgenero=mysql_query("select * FROM cciudad order by dsciudad ASC");
while($resultado=mysql_fetch_array($cgenero)){?>
<option value="<?php echo $resultado["dsciudad"]; ?>"> <?php echo $resultado["dsciudad"]; ?></option>
<?php } ?>}</select></td></tr> 
</div>

<div class="form-group">
<tr><td> Codigo Postal: </td></b>
<td><input type="number" name="cp" class="form-control" placeholder="Ingresa tu codigo postal" /></td></tr>
</div>

<div class="form-group">
<tr><td> Telefono: </td></b>
<td><input type="tel" name="telefono" class="form-control" placeholder="Ingresa tu telefono a 10 digitos" /></td></tr>
</div>

<div class="form-group">
<tr><td> Email: </td></b>
<td><input type="email" name="email" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Ingresa un email valido" /></td></tr>
</div>


<div class="form-group">
<tr><td> Password: </td>
<td><input type="password" name="pass" class="form-control"  placeholder="Ingresa tu nueva contraseña" /></td></tr>
</div>

<div class="form-group">
<tr><td>Repite tu contraseña</td>
<td><input type="password" name="rpass" class="form-control" required placeholder="Repite tu contraseña" /></td></tr>
</div>
      
</div>

   <tr>
   	<td></td>
   	<td><input class="btn btn-primary" type="submit" name="submit "value="Registrarse"></td>
   </tr>

</fieldset>
</table>
</form>
<form method="post" action="index.php."><input type="submit" name="submit" class="btn btn-danger" value="Cancelar"></form>
</div>




<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

</td>
</tr>
</table>
</div></center></div></center>

	
</body>
</html>