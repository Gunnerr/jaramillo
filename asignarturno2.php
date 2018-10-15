<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>
<html lang="es">
<head>
</head>
<body bgcolor=skyblue>

<?php
extract($_GET);
include ("connect_db.php"); 
$id=$_REQUEST["id"];  
$sql="select datospersonales.cvpersona, curp, nombre, cvapepat, cvapemat, cvgenero, telefono, email, 
empleado.estatus, cvempleado 
from datospersonales, empleado where datospersonales.cvpersona=empleado.cvpersona and cvempleado=$id";
$resul=mysql_query($sql);
?>


<center><h2> Seleccion de turno y horario de empleados</h2></center>  
  

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
 {
?>
 
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


      



<blockquote><blockquote>
  <center><h5><em><strong>"HORARIO SEMANAL</strong></em></h5>
  </blockquote></blockquote>


<form name="frm_horario" method="post" action="modasignarturno2.php">

<table  border="1" align="center" style="font-size:12px">

<tr style="color: blue">
<td>Id Empleado</td><td><input type="number" name="cvempleado" value="<?php echo $id ?>" readonly="readonly"></td>

<tr style="color: blue" align="center">
<td> Lunes: </td><td><select name="lunes" id="lunes" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $lunes=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($lunes)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>



<tr style="color: blue" align="center">
<td> Martes: </td><td><select name="martes" id="martes" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $martes=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($martes)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>



<tr style="color: blue" align="center">
<td> Miercoles: </td><td><select name="miercoles" id="miercoles" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $miercoles=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($miercoles)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>



<tr style="color: blue" align="center">
<td> Jueves: </td><td><select name="jueves" id="jueves" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $jueves=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($jueves)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>



<tr style="color: blue" align="center">
<td> Viernes: </td><td><select name="viernes" id="viernes" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $viernes=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($viernes)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>



<tr style="color: blue" align="center">
<td> Sabado: </td><td><select name="sabado" id="sabado" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $sabado=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($sabado)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>



<tr style="color: blue" align="center">
<td> Domingo: </td><td><select name="domingo" id="domingo" class="form-control" required placeholder="Selecciona un turno"><option>Seleccione un turno</option>
<?php   include("connect_db.php");    $domingo=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($domingo)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>


<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><input type=submit   name="submit"   id="submit" value="ASIGNAR"></td></tr></table>   
 
</form>

<br>
<a href="asignarhorario.php"><center><input type=button value="CANCELAR"></center></a>





</body>
</html> 

