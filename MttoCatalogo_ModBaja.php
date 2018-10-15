<?php error_reporting(0);?>

<?php

  $catalogo=$_REQUEST["catalogo"]; 
 
 if ($catalogo==1) {

   
   $CvPerso=$_REQUEST["cvapellido"];
   include("MyConexion.php");

$sqlContar="select count(*) from dtspersonal where cvtipopersona='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0)
{
$sqlD="delete from ctipopersona where cvtipopersona='$cvperso'";
if (mysql_query($sqlD))
{
echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
}
}
else
{?>
<body bgcolor="skyblue">
<blockquote>
<blockquote>
<blockquote>
<center><h1><em><strong>El Registro NO Puede Ser Eliminado</strong></em></h1>
<h1><em><strong>Esta Siendo Utilizado !</strong></em></h1></center>
</blockquote>
</blockquote>
</blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href = "MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php
}} 



if ($catalogo==2) {
$cvperso=$_REQUEST["cvapellido"];
include("MyConexion.php");
$sqlContar="select count(*) from dtspersonal where cvnombre='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0) {
$sqlD="delete from cnombre where cvnombre='$cvperso'";
if (mysql_query($sqlD)) {echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";}}
else{?>
<body bgcolor="skyblue">
<blockquote><blockquote><blockquote>
<center><h1><em><strong>El registro no se puede eliminar</strong></em></h1></center>
</blockquote></blockquote></blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href="MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php }}


if ($catalogo==3) {
$cvperso=$_REQUEST["cvapellidos"];
include("MyConexion.php");
$sqlContar="select count(*) from dtspersonal where cvapellido='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0) {
$sqlD="delete from capellido where cvapellido='$cvperso'";
if (mysql_query($sqlD))
{
	echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
}}
else {?>
<body bgcolor="skyblue">
<blockquote><blockquote><blockquote>
<center><h1><em><strong>El registro no se puede eliminar</strong></em></h1></center>
</blockquote></blockquote></blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href="MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php }}


if ($catalogo==4) {
$cvperso=$_REQUEST["cvapellidos"];
include("MyConexion.php");
$sqlContar="select count(*) from dtspersonal where cvgenero='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0) {
$sqlD="delete from cgenero where cvgenero='$cvperso'";
if (mysql_query($sqlD)) {echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>"; }}
else
{?>
<body bgcolor="skyblue">
<blockquote><blockquote><blockquote>
<center><h1><em><strong>El registro no se puede eliminar</strong></em></h1></center>
</blockquote></blockquote></blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href="MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php }}


if ($catalogo==5) {
$cvpersoo=$_REQUEST["cvapellido"];
include("MyConexion.php");
$sqlContar="select count(*) from dtspersonal where cvcolonia='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0) { 
$sqlD="delete from ccolonia where cvcolonia='$cvperso'";
if (mysql_query($sqlD)) {echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>"; }}
else
{?>
<body bgcolor="skyblue">
<blockquote><blockquote><blockquote>
<center><h1><em><strong>El registro no se puede eliminar</strong></em></h1></center>
</blockquote></blockquote></blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href="MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php }}


if ($catalogo==6) {
$cvperso=$_REQUEST["cvapellido"];
include("MyConexion.php");
$sqlContar="select count(*) from dtspersonal where cvciudad='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0) {
$sqlD="delete from cciudad where cvciudad='$cvperso'";
if (mysql_query($sqlD)) {echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>"; }}
else {?>
<body bgcolor="#0aabb1">
<blockquote><blockquote><blockquote>
<center><h1><em><strong>El registro no se puede eliminar</strong></em></h1></center>
</blockquote></blockquote></blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href="MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php }}


if ($catalogo==7) {
$cvperso=$_REQUEST["cvapellido"];
include("MyConexion.php");
$sqlContar="select count(*) from dtspersonal where cvestado='$cvperso'";
$sqlquery=mysql_query($sqlContar);
$Cvres=mysql_fetch_array($sqlquery);
$resulta=$Cvres[0];
if($resulta==0) {
$sqlD="delete from cestado where cvestado='$cvperso'";
if (mysql_query($sqlD)) {echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>"; }}
else {?>
<body bgcolor="skyblue">
<blockquote><blockquote><blockquote>
<center><h1><em><strong>El registro no se puede eliminar</strong></em></h1>
</center>
</blockquote></blockquote></blockquote>
<tr>
<td>&nbsp;</td>
<td><center><a href="MttoCatalogo_FrmMtto.php">REGRESAR</a></center></td>
</tr>
</body>
<?php }}




?>