<?php

  $catalogo=$_REQUEST['catalogo']; 


   $DS=$_SESSION['DesC']
 


 if ($catalogo==1) {
   $DS=$_REQUEST["DesC"];
   include("MyConexion.php");
  $checkcurp=mysql_query("SELECT * FROM cnombre WHERE dsnombre='$DS'");
  $check_curp=mysql_num_rows($checkcurp);
  if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un dato con esa informacion");</script> ';
        echo "<script>location.href='MttoCatalogo_FrmMtto.php'</script>";
      }
      else
      {
        mysql_query("insert into cnombre (dsnombre) values ('$DS'))";
        
        echo ' <script language="javascript">alert("Empleado contratado satisfactoriamente");</script> ';
   
        mysql_close($link);
      }}


 if ($catalogo==2) {
   
   $DS=$_REQUEST["DesC"];
   include("MyConexion.php");
   $sql="insert into capellido (dsapellido) values ('$DS');";
    if(mysql_query($sql))
      {
         header("location:MCatalogos_FrmMtto.php");
      }   
 }


 if ($catalogo==3) {
   
   $DS=$_REQUEST["DesC"];
   include("MyConexion.php");
   $sql="insert into cgenero (dsgenero) values ('$DS');"; 
if(mysql_query($sql))
      {
         header("location:MCatalogos_FrmMtto.php");
      }   
      
 }
 if ($catalogo==4) {
   
   $DS=$_REQUEST["DesC"];
   include("MyConexion.php");
   $sql="insert into ccolonia (dscolonia) values ('$DS'); ";
 if(mysql_query($sql))
      {
         header("location:MCatalogos_FrmMtto.php");
      }   
      
 }

 if ($catalogo==5) {
   
   $DS=$_REQUEST["DesC"];
   include("MyConexion.php");
   $sql="insert into cciudad (dsciudad) values ('$DS');";
    if(mysql_query($sql))
      {
         header("location:MCatalogos_FrmMtto.php");
      }   
 }

 if ($catalogo==6) {
   
   $DS=$_REQUEST["DesC"];
   include("MyConexion.php");
   $sql="insert into cestado (dsestado) values ('$DS');";
    if(mysql_query($sql))
      {
         header("location:MCatalogos_FrmMtto.php");
    
      }   
 }


