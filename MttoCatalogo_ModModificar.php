<?php
	include ("MyConexion.php");

	$descri=$_REQUEST["pepa"];
	$Cv=$_REQUEST["cvtipopersona"];
	$catalogo=$_REQUEST["catalogo"];

if ($catalogo==1) {
$sql="update cnombre set dsnombre='$descri' where cvnombre='$Cv'";
if (mysql_query($sql)) {	
header("location:MttoCatalogo_FrmMtto.php"); }}


if ($catalogo==2) {
$sql="update capellido set dsapellido='$descri' where cvapellido='$Cv'";
if (mysql_query($sql)) {	
header("location:MttoCatalogo_FrmMtto.php"); }}


if ($catalogo==3) {
$sql="update cgenero set dsgenero='$descri' where cvgenero='$Cv'";
if (mysql_query($sql)) {	
header("location:MttoCatalogo_FrmMtto.php"); }}


if ($catalogo==4) {
$sql="update ccolonia set dscolonia='$descri' where cvcolonia='$Cv'";
if (mysql_query($sql)) {	
header("location:MttoCatalogo_FrmMtto.php"); }}


if ($catalogo==5) {
$sql="update cciudad set dsciudad='$descri' where cvciudad='$Cv'";
if (mysql_query($sql)) {	
header("location:MttoCatalogo_FrmMtto.php"); }}

?>