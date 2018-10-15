<!doctype html>
<?php error_reporting(0); ?>
<html>
<head>
<meta charset="utf-8"><title>Mantenimiento Catalogos</title><style type="text/css"> body{background: skyblue;}</style>
</head>
<style type="text/css">
  body{
    background: skyblue ;
  }
  </style>

<form name="MttoCatalogo_FrmMtto" method="post" action="#">

<table width="444" border="0" align="center">
<blockquote><blockquote><blockquote><center><h1><em><strong>Mantenimiento de Catalogos</strong></em></h1></center>
</blockquote></blockquote></blockquote>

<tr>
<td width="122">NOMBRE DEL CATALOGO:</td>
<td>
    <select name="catalogo" id="catalogo" aling="center" onchange="consulta.disabled=false">
       <option value="0">Seleccionar</option>
       
       <option value="1"> Nombres</option>
       <option value="2"> Apellidos</option>
       <option value="3"> Genero</option>
       <option value="4"> Colonia</option>
       <option value="5"> Ciudad</option>
       <option value="6"> Estado</option>
     
    </select>

<td width="156">
<input type="submit" name="consulta" id="consulta" value="CONSULTA" disabled="true" onclick="agregar.disabled=false">
</td>

<td><input type="hidden" name="catalogoo" value="<?php echo $catalogo; ?>" ></td>
</td>
</tr>

<tr><pre></pre>
<td width="122">DESCRIPCION:</td>
  <td width="200"><input type="text" name="DesC" id="DesC" onkeyup="javascript:this.value=this.value.toUpperCase()"" onclick="agregar.disabled=false"></td>
  <td width="156"><input type="submit" name="agregar" id="agregar" value="AGREGAR" disabled="true" ></td>
</tr>



<?php

  if($_POST['agregar']){
  $catalogo=$_POST["catalogoo"]; 
  $DS=$_POST['DesC'];

    if ($catalogo==1) {
    $DS=$_REQUEST["DesC"];
    include("MyConexion.php");
    $checkcurp=mysql_query("select * from cnombre where dsnombre='$DS'");
    $check_curp=mysql_num_rows($checkcurp);
    if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        }
      else{
        mysql_query("insert into cnombre (dsnombre) values ('$DS')"); 
        echo ' <script language="javascript">alert("DATO AGREGADO");</script> ';
        
        mysql_close($link);}}


    if ($catalogo==2) {
    $DS=$_REQUEST["DesC"];
    include("MyConexion.php");
    $checkcurp=mysql_query("select * from capellido where dsapellido='$DS'");
    $check_curp=mysql_num_rows($checkcurp);
    if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";}
      else{
        mysql_query("insert into capellido (dsapellido) values ('$DS')"); 
        echo ' <script language="javascript">alert("DATO AGREGADO");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
        mysql_close($link);}}

 
    if ($catalogo==3) {
    $DS=$_REQUEST["DesC"];
    include("MyConexion.php");
    $checkcurp=mysql_query("select * from cgnero where dsgenero='$DS'");
    $check_curp=mysql_num_rows($checkcurp);
    if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";}
      else{
        mysql_query("insert into cgnero (dsgenero) values ('$DS')"); 
        echo ' <script language="javascript">alert("DATO AGREGADO");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
        mysql_close($link);}}


    if ($catalogo==4) {
    $DS=$_REQUEST["DesC"];
    include("MyConexion.php");
    $checkcurp=mysql_query("select * from ccolonia where dscolonia='$DS'");
    $check_curp=mysql_num_rows($checkcurp);
    if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";}
      else{
        mysql_query("insert into ccolonia (dscolonia) values ('$DS')"); 
        echo ' <script language="javascript">alert("DATO AGREGADO");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
        mysql_close($link);}}


    if ($catalogo==5) {
    $DS=$_REQUEST["DesC"];
    include("MyConexion.php");
    $checkcurp=mysql_query("select * from cciudad where dsciudad='$DS'");
    $check_curp=mysql_num_rows($checkcurp);
    if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";}
      else{
        mysql_query("insert into cciudad (dsciudad) values ('$DS')"); 
        echo ' <script language="javascript">alert("DATO AGREGADO");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
        mysql_close($link);}}


    if ($catalogo==6) {
    $DS=$_REQUEST["DesC"];
    include("MyConexion.php");
    $checkcurp=mysql_query("select * from cestado where dsestado='$DS'");
    $check_curp=mysql_num_rows($checkcurp);
    if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";}
      else{
        mysql_query("insert into cestado (dsestado) values ('$DS')"); 
        echo ' <script language="javascript">alert("DATO AGREGADO");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
        mysql_close($link);}}}
      
 ?> 
</table>





<table width="429" border="2" align="center" >
 <tr>
   <td width="96" align="center"><FONT FACE=candara COLOR="#FFFFFF" SIZE=4>CLAVE</td>
   <td width="96" align="center"><FONT FACE=candara COLOR="#FFFFFF" SIZE=4>DESCRIPCION</td>
   <td width="70" align="center"><FONT FACE=candara COLOR="#FFFFFF" SIZE=4>MODIFICAR</td>
   <td width="75" align="center"><FONT FACE=candara COLOR="#FFFFFF" SIZE=4>ELIMINAR</td>
 </tr>


<?php
$catalogo=$_POST["catalogo"];
if ($catalogo==1) { ?> <?php 
include("MyConexion.php");
$catnombre=mysql_query("select * from cnombre");
while($resultado= mysql_fetch_array($catnombre)) { ?>
<tr>
<td><?php echo utf8_encode($resultado[0]);?></td>
<td><?php echo utf8_encode($resultado[1]);?></td>
<td><a href="MttoCatalogo_FrmModificar.php?cvnombre=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Modificar</a></td>
<td><a href="MttoCatalogo_FrmBaja.php?cvnombre=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td></tr> <?php }} ?>


<?php
$catalogo=$_POST["catalogo"];
if ($catalogo==2) { ?> <?php 
include("MyConexion.php");
$catapellido=mysql_query("select * from capellido");
while($resultado= mysql_fetch_array($catapellido)) { ?>
<tr>
<td><?php echo utf8_encode($resultado[0]);?></td>
<td><?php echo utf8_encode($resultado[1]);?></td>
<td><a href="MttoCatalogo_FrmModificar.php?cvapellido=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Modificar</a></td>
<td><a href="MttoCatalogo_FrmBaja.php?cvapellido=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td></tr><?php }} ?>


<?php
$catalogo=$_POST["catalogo"];
if ($catalogo==3) { ?> <?php 
include("MyConexion.php");
$catgenero=mysql_query("select * from cgenero");
while($resultado= mysql_fetch_array($catgenero)) { ?>
<tr>
<td><?php echo utf8_encode($resultado[0]);?></td>
<td><?php echo utf8_encode($resultado[1]);?></td>
<td><a href="MttoCatalogo_FrmModificar.php?cvgenero=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Modificar</a></td>
<td><a href="MttoCatalogo_FrmBaja.php?cvgenero=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td></tr> <?php }} ?>


<?php
$catalogo=$_POST["catalogo"];
if ($catalogo==4) { ?> <?php 
include("MyConexion.php");
$catcolonia=mysql_query("select * from ccolonia");
while($resultado= mysql_fetch_array($catcolonia)) { ?>
<tr>
<td><?php echo utf8_encode($resultado[0]);?></td>
<td><?php echo utf8_encode($resultado[1]);?></td>
<td><a href="MttoCatalogo_FrmModificar.php?cvcolonia=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Modificar</a></td>
<td><a href="MttoCatalogo_FrmBaja.php?cvcolonia=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td></tr> <?php }} ?>


<?php
$catalogo=$_POST["catalogo"];
if ($catalogo==5) { ?> <?php 
include("MyConexion.php");
$catciudad=mysql_query("select * from cciudad");
while($resultado= mysql_fetch_array($catciudad)) { ?>
<tr>
<td><?php echo utf8_encode($resultado[0]);?></td>
<td><?php echo utf8_encode($resultado[1]);?></td>
<td><a href="MttoCatalogo_FrmModificar.php?cvciudad=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Modificar</a></td>
<td><a href="MttoCatalogo_FrmBaja.php?cvciudad=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td></tr> <?php }} ?>


<?php
$catalogo=$_POST["catalogo"];
if ($catalogo==6) { ?> <?php 
include("MyConexion.php");
$catestado=mysql_query("select * from cestado");
while($resultado= mysql_fetch_array($catestado)) { ?>
<tr>
<td><?php echo utf8_encode($resultado[0]);?></td>
<td><?php echo utf8_encode($resultado[1]);?></td>
<td><a href="MttoCatalogo_FrmModificar.php?cvestado=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Modificar</a></td>
<td><a href="MttoCatalogo_FrmBaja.php?cvestado=<?php echo $resultado[0]; ?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td></tr> <?php }} ?>

</tr>
</table>
</form>
<form action="menu.php" target="visualizacion"><input type=submit value="Cancelar"></form>
</body>
</html>