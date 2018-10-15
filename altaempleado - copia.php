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
xmlhttp.open("POST","modaltaempleado.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("catapepat"+cod);

}

</script>

</head>
<body bgcolor=skyblue>
<form>

 <table width="400" border="0" align="center" rules="rows">    

<tr><td> Persona: </td><td><select name="catpersona" id="catpersona" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona la persona para agregar domicilio" onchange="mostrarInfo(this.value)"><option></option>
<?php   include("connect_db.php");    $catpersona=mysql_query("select * FROM datospersonales order by cvpersona ASC");
   while($resultado=mysql_fetch_array($catpersona)){?>
  <option value="<?php echo $resultado["cvpersona"]; ?>"> <?php echo $resultado["curp"]; ?></option>
<?php } ?>}</select></td>

    </table>

</form>

<div id="datos">
	
	
</div>

<a href="menubd.html"><center>Cancelar</center></a>

</body>
</html> 

