<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>
<html lang="es">

<head>

<script>

function mostrarInfo(cod){

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("datos").innerHTML=xmlhttp.responseText;
}else{ 
document.getElementById("datos").innerHTML='Cargando...';
}
}
xmlhttp.open("post","modchecador.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("catpersona="+cod);
}

</script>

</head>
<body bgcolor=skyblue>





<form name="catpersona" method="post" action="#">

<table width="400" border="0" align="center" rules="rows">    

<tr><td> Empleado </td><td><select name="catpersona" id="catpersona" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="" onchange="mostrarInfo(this.value)"><option></option>
<?php   include("connect_db.php");    $catpersona=mysql_query("select datospersonales.curp, nombre, telefono, email, empleado.cvpersona, estatus, horario.cvempleado from datospersonales, empleado, horario where datospersonales.cvpersona=empleado.cvpersona and empleado.cvempleado=horario.cvempleado order by cvempleado");
   while($resultado=mysql_fetch_array($catpersona)){?>
  <option value="<?php echo $resultado["cvempleado"]; ?>"> <?php echo $resultado["curp"]; ?> -- <?php echo $resultado["nombre"]; ?> -- <?php echo $resultado["telefono"]; ?> -- <?php echo $resultado["email"]; ?> -- <?php echo $resultado["estatus"]; ?> </option>
<?php } ?>}</select></td>

    </table>

</form>

<div id="datos">
  
</div>

<a href="horarios.html"><center><input type=button value="CANCELAR"></center></a>

</body>
</html> 

