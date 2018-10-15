<!DOCTYPE html>
<?php
@session_start();
if (@!$_SESSION['usuario']) {header("Location:index.php");}
?>
<html lang="es">
<head><meta charset="utf-8"><title>COHOEM</title>




<style type="text/css"> 
body {margin-left:30px; font-family: sans-serif;} 
h4 {margin:0;} 
div {float:left;}
.estiloForm, 
#encuadraImagen, 
#datos {background-color: #f3f3f3; border: solid 2px black; margin-left:10px; width:300px; }
.estiloForm { width: 330px; padding:10px;} 
#datos {margin-top: 20px; height:226px; padding:10px;}
#encuadraImagen {width:100px; height:100px;   text-align:center;}
.estiloForm 
label {display: block; width: 120px; float: left; text-align:right; margin-bottom: 35px; padding-right: 20px;}
br {clear: left;} 
input[type="submit"], 
input[type="reset"] {margin:25px 5px 10px 5px;}
</style>







<script type="text/javascript">
window.onload = function () {
                /* Variables globales (por estar declaradas sin var) */
                casillaDatos = document.getElementById('datos'); //Nodo donde vamos a mostrar los datos
                radioButTrat = document.getElementsByName("tratamiento"); //Nodos radio buttons
                checkboxElements = new Array();
               
                var elementosDelForm = document.getElementsByTagName('input'); //Elementos input
                var elementosSelect = document.getElementsByTagName('select');
                for(var i=0; i<elementosDelForm.length;i++) {
                if (elementosDelForm[i].type == 'radio') {elementosDelForm[i].addEventListener("click", actualizarDatos);}
                else {elementosDelForm[i].addEventListener("change", actualizarDatos);}
                if (elementosDelForm[i].type == 'checkbox') {checkboxElements.push(elementosDelForm[i]);}
                }
                for (var i=0; i<elementosSelect.length;i++) {elementosSelect[i].addEventListener("change", actualizarDatos);}
}
 
function actualizarDatos() {
var rutaImagen = '';
var radioButSelValue = '';
for (var i=0; i<radioButTrat.length; i++) {if (radioButTrat[i].checked == true) { radioButSelValue= radioButTrat[i].value;} }
if (radioButSelValue != ''){
                if (radioButSelValue =='Sr.') {rutaImagen='caraHombre.jpg';} else {rutaImagen='caraMujer.jpg';}
                document.getElementById('encuadraImagen').innerHTML = '';
                document.getElementById('encuadraImagen').style.background='url("'+rutaImagen+'") no-repeat';
}
var checkBoxSel = new Array();
for (var i=0; i<checkboxElements.length;i++) {
if (checkboxElements[i].checked ==true) {checkBoxSel.push(checkboxElements[i].name);}
}
 
var elementoCiudad = document.getElementById('ciudad');

casillaDatos.innerHTML=
'<h4> Datos introducidos: </h4><p>Tratamiento: '+(radioButSelValue||' --- ')+'</p>'+
'<p>Horario: '+document.getElementById('lunes').value+'</p>'+
'<p>Apellidos: ' + (document.getElementById('martes').value||' --- ')+'</p>'+
'<p>Dirección: ' + (document.getElementById('miercoles').value||' --- ')+'</p>'+
'<p>Ciudad: ' + (elementoCiudad.options[elementoCiudad.selectedIndex].text||' --- ')+'</p>'+
'<p>Preferencias: ' + (checkBoxSel||' --- ')+'</p>';
}
</script></head>
















<body>



    <div class="estiloForm">
    
    <form name ="formularioContacto" method="get" action="#">
        

<table width="400" border="0" align="center" rules="rows">    
    
 

<td> Lunes: </td><td><select name="lunes" id="lunes" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" required placeholder="Selecciona un turno"><option></option>
<?php   include("connect_db.php");    $lunes=mysql_query("select * FROM cturno order by dsturno ASC");
   while($resultado=mysql_fetch_array($lunes)){?>
  <option value="<?php echo $resultado["cvturno"]; ?>"> <?php echo $resultado["dsturno"]; ?></option>
<?php } ?>}</select></td>

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

















        <label>Tratamiento</label>
        <input type="radio" name="tratamiento" id="tratarSr" value="Sr."/>Sr.
        <input type="radio" name="tratamiento" id ="tratarSra" value="Sra."/>Sra.<br/>

        <label>Nombre</label><input id="nombre" name="nombre" type="text"/><br/>
        <label>Apellidos</label><input id="apellidos" name="apellidos" type="text"/><br/>
        <label>Dirección</label><input id="direccion1" name="direccion1" type="text"/><br/>
        

        <label>Ciudad</label>
        <select id="ciudad" name="ciudad">
            <option value="">Elija opción</option>
            <option value="Mexico">México D.F. (MX)</option>
            <option value="Madrid">Madrid (ES)</option>
            <option value="Santiago">Santiago (CL)</option>
        </select><br/>


        <label>Preferencias</label><input name="Libros" type="checkbox" />Libros
        <input name="Peliculas" type="checkbox"  />Películas
        <input type="submit" value="Enviar"/> <input type="reset" value="Cancelar"/>
    </div>





    <div style="float:left;">  <div id="encuadraImagen"><h1> ? </h1></div><br>
    
    
    <div id="datos" style="float:left;"><h4> Datos introducidos: </h4></div>


    </form>

    </div>



</body>
</html>