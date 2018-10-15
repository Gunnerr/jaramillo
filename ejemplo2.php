<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>
<html lang="es">

<head>
<script>
var mostrarValor = function(a){document.getElementById('lunes').value=a;}
var mostrarValor2 = function(b){document.getElementById('martes').value=b;}
var mostrarValor3 = function(c){document.getElementById('miercoles').value=c;}
var mostrarValor4 = function(d){document.getElementById('jueves').value=d;}
var mostrarValor5 = function(e){document.getElementById('viernes').value=e;}
var mostrarValor6 = function(f){document.getElementById('sabado').value=f;}
var mostrarValor7 = function(g){document.getElementById('domingo').value=g;}

</script>
</head>


<body bgcolor=skyblue>








<form name="MttoPersona" method="post" action="modasignarturno2.php">




<table  border="1" align="center" style="font-size:12px">
<blockquote><blockquote>
  <center><h5><em><strong>"HORARIO </strong></em></h5>
  </blockquote></blockquote>
<tr style="color: green" align="center">
    <td>LUNES</td>
    <td>MARTES</td>
    <td>MIERCOLES</td>
    <td>JUEVES</td>
    <td>VIERNES</td>
    <td>SABADO</td>
    <td>DOMINGO</td>  
  </tr>

<tr style="color: blue" align="center">

<td><input type="text" name="lunes" id="lunes" value="" /></td>
<td><input type="text" name="martes" id="martes" value1="" /></td> 
<td><input type="text" name="miercoles" id="miercoles" value1="" /></td>
<td><input type="text" name="jueves" id="jueves" value1="" /></td>
<td><input type="text" name="viernes" id="viernes" value="" /></td>
<td><input type="text" name="sabado" id="sabado" value="" /></td>
<td><input type="text" name="domingo" id="domingo" value7="<?php echo $resultado7["cvturno"]; ?>" /></td>
</tr>

</table>
<br>

<table  border="1" align="center" style="font-size:12px">

<tr style="color: blue" align="center">
<td> Lunes: </td><td><select name="lunes1" id="lunes1" onchange="mostrarValor(this.value);" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $lunes=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado1=mysql_fetch_array($lunes)){?>
  <option value="<?php echo $resultado1["cvturno"]; ?>" >
  "<?php echo $resultado1["horaini"]; ?> - <?php echo $resultado1["horafin"]; ?>" <?php echo $resultado1["dsturno"]; ?> </option>
<?php } ?>}</select></td>


<tr style="color: blue" align="center">
<td> Martes: </td><td><select name="martes1" id="martes1" onchange="mostrarValor2(this.value);" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $martes=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado2=mysql_fetch_array($martes)){?>
  <option value="<?php echo $resultado2["horaini"]; ?> - <?php echo $resultado2["horafin"]; ?>"> <?php echo $resultado2["dsturno"]; ?> </option>
<?php } ?>}</select></td>
</td>

</tr>


<tr style="color: blue" align="center">
<td> Miercoles: </td><td><select name="miercoles1" id="miercoles1" onchange="mostrarValor3(this.value);" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $miercoles=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado3=mysql_fetch_array($miercoles)){?>
  <option value="<?php echo $resultado3["horaini"]; ?> - <?php echo $resultado3["horafin"]; ?>"> <?php echo $resultado3["dsturno"]; ?></option>
<?php } ?>}</select></td>
</td>





<tr style="color: blue" align="center">
<td> Jueves: </td><td><select name="jueves1" id="jueves1" onchange="mostrarValor4(this.value);" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $jueves=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado4=mysql_fetch_array($jueves)){?>
  <option value="<?php echo $resultado4["horaini"]; ?> - <?php echo $resultado4["horafin"]; ?>"> <?php echo $resultado4["dsturno"]; ?></option>
<?php } ?>}</select></td>
</td>





<tr style="color: blue" align="center">
<td> Viernes: </td><td><select name="viernes1" id="viernes1" onchange="mostrarValor5(this.value);" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $viernes=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado5=mysql_fetch_array($viernes)){?>
  <option value="<?php echo $resultado5["horaini"]; ?> - <?php echo $resultado5["horafin"]; ?>"> <?php echo $resultado5["dsturno"]; ?></option>
<?php } ?>}</select></td>
</td>




<tr style="color: blue" align="center">
<td> Sabado: </td><td><select name="sabado1" id="sabado1" onchange="mostrarValor6(this.value);" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $sabado=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado6=mysql_fetch_array($sabado)){?>
  <option value="<?php echo $resultado6["horaini"]; ?> - <?php echo $resultado6["horafin"]; ?>"> <?php echo $resultado6["dsturno"]; ?></option>
<?php } ?>}</select></td>
</td>





<tr style="color: blue" align="center">
<td> Domingo: </td><td><select name="domingo1" id="domingo1" onchange="mostrarValor7(this.value); " onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $domingo=mysql_query("select * FROM cturno order by cvturno ASC");
   while($resultado7=mysql_fetch_array($domingo)){?>
  <option resultado7="hola"  
          value="<?php echo $resultado7["horaini"]; ?> - <?php echo $resultado7["horafin"]; ?>" > 
          <?php echo $resultado7["dsturno"]; ?>
          </option>
<?php } ?>}</select></td>
</td>





<table width="400" border="0" align="center" rules="rows"><tr>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
 <td><input type=submit   name="submit"   id="submit" value="GUARDAR"></td></tr></table>   
 
</form>








</body>
</html> 

