<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>
<html lang="es">
<head><meta charset="utf-8"><title>COHOEM</title> </head>

<?php
include ("connect_db.php"); 
$id=$_REQUEST["id"];  
$sql="select datospersonales.cvpersona, curp, nombre, cvapepat, cvapemat, cvgenero, telefono, email, 
empleado.estatus, cvempleado 
from datospersonales, empleado where datospersonales.cvpersona=empleado.cvpersona and cvempleado=$id";
$resul=mysql_query($sql);
?>

<body bgcolor=skyblue>
<blockquote><blockquote><blockquote>
              <center><h1><em><strong>"Asignar turno semanal al empleado" </strong></em></h1>
                                     </blockquote></blockquote></blockquote>

                      <table  border="1" align="center" style="font-size:12px">
<tr style="color: green" align="center">
  <td>Id Empleado</td>
  <td>Curp</td>
  <td width="200">Nombre Empleado</td>
  <td>Genero</td>
  <td>Telefono</td>
  <td>Email</td>
  <td>Estatus</td>
                                    </tr>
<?php
  while ($row=mysql_fetch_array($resul)){?> 
<tr>
  <td><?php echo $row[9];    ?></td>
  <td><?php echo utf8_encode($row[1]);    ?></td>
  <td><?php echo utf8_encode($row[2]);    ?> <?php 
  include("connect_db.php");
$sqlapepat="select C.dsapellido from datospersonales M, capellido C where M.cvapepat=C.cvapellido and '$row[3]'=M.cvapepat";
   $catapepat=mysql_query($sqlapepat);
   $rapepat=mysql_fetch_array($catapepat);
 echo $rapepat["dsapellido"]; ?> <?php 
  include("connect_db.php");
$sqlapemat="select C.dsapellido from datospersonales M, capellido C where M.cvapemat=C.cvapellido and '$row[4]'=M.cvapemat";
$catapemat=mysql_query($sqlapemat);
$rapemat=mysql_fetch_array($catapemat);
echo $rapemat["dsapellido"]; ?>
  </td>
  <td><?php 
  include("connect_db.php");
$sqlgenero="select C.dsgenero from datospersonales M, cgenero C where M.cvgenero=C.cvgenero and '$row[5]'=M.cvgenero";
 $ctgenero=mysql_query($sqlgenero);
 $rgenero=mysql_fetch_array($ctgenero);
 echo $rgenero["dsgenero"]; ?></td>
<td><?php echo utf8_encode($row[6]);    ?></td>
<td><?php echo utf8_encode($row[7]);    ?></td>
<td><?php echo utf8_encode($row[8]);    ?></td>
</tr>

  <?php } ?>
</table>
<br>

<form name="MttoPersona" method="post" action="modaltabd.php">

<blockquote><blockquote><blockquote>
<center><h3><em><strong>"Seleccione un turno por dia" </strong></em></h3>
</blockquote></blockquote></blockquote>
<table  border="1" align="center" style="font-size:12px">

<tr style="color: blue" align="center">
  <td>LUNES</td>  <td>vigencia</td> 
  <td>MARTES</td>  <td>  </td> 
  <td>MIERCOLES</td>
  <td>JUEVES</td>
  <td>VIERNES</td>
  <td>SABADO</td>
  <td>DOMINGO</td>
  <td>ASIGNAR</td>
</tr>

<tr>

<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select>
</td>

<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select></td>


<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select></td>


<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select>

</td>

<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select>

</td>


<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select>

</td>
<td><select name="catapepat" id="catapepat" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona tu apellido paterno"><option></option>
<?php   include("connect_db.php");    $catapepat=mysql_query("select * FROM capellido order by dsapellido ASC");
   while($resultado=mysql_fetch_array($catapepat)){?>
  <option value="<?php echo $resultado["cvapellido"]; ?>"> <?php echo $resultado["dsapellido"]; ?></option>
<?php } ?>}</select>

</td>

<td> 
<?php
  while ($row=mysql_fetch_array($resul)) {
?>
     <a href="modasignarturno.php?id=<?php echo $row[9]; ?>" onclick="return confirm('¿Estás seguro que desea guardar los datos?')"> <input type=button value="ASIGNAR"> </a>
<?php } ?>
</td> 
      
</tr>
</table>
<a href="asignarhorario.php"><center><input type=button value="CANCELAR"></center></a>

<form name="MttoPersona" method="post" action="modaltabd.php">

  <blockquote><blockquote><blockquote>
  <h1><em><strong>"Registro de datos personales" </strong></em></h1>
  </blockquote></blockquote></blockquote>

<table width="400" border="0" align="center" rules="rows">      
 

<tr><td> Lunes: </td><td><select name="lunes" id="lunes" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $lunes=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($lunes)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td> <td><input type="hola" name="hola"></td> 

<tr><td> Martes: </td><td><select name="martes" id="martes" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $martes=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($martes)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Miercoles: </td><td><select name="miercoles" id="miercoles" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $miercoles=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($miercoles)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Jueves: </td><td><select name="jueves" id="jueves" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $jueves=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($jueves)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Viernes: </td><td><select name="viernes" id="viernes" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $viernes=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($viernes)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Sabado: </td><td><select name="sabado" id="miercoles" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $sabado=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($sabado)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>

<tr><td> Domingo: </td><td><select name="domingo" id="domingo" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $domingo=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($domingo)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>



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

