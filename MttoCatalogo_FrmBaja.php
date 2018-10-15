<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario Eliminar</title>
</head>
<?php

  $catalogo=$_REQUEST["catalogo"]; 
 
 if ($catalogo==1) {

   
   $CvPerso=$_REQUEST["cvtipoperson"];
   include("MyConexion.php");
   $sql="select * from  ctipopersona where cvtipopersona='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];

 }

 if ($catalogo==2) {
   
   $CvPerso=$_REQUEST["cvnombre"];
   include("MyConexion.php");
   $sql="select * from cnombre where cvnombre='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==3) {
   
   $CvPerso=$_REQUEST["cvapellido"];
   include("MyConexion.php");
   $sql="select * from capellido where cvapellido='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==4) {
   
   $CvPerso=$_REQUEST["cvgenero"];
   include("MyConexion.php");
   $sql="select * from  cgenero where cvgenero='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==5) {
   
   $CvPerso=$_REQUEST["cvcolonia"];
   include("MyConexion.php");
   $sql="select * from ccolonia where cvcolonia='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==6) {
   
   $CvPerso=$_REQUEST["cvciudad"];
   include("MyConexion.php");
   $sql="select * from cciudad where cvciudad='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==7) {
   
   $CvPerso=$_REQUEST["cvestado"];
   include("MyConexion.php");
   $sql="select * from cestado where cvestado='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==8) {
   $CvPerso=$_REQUEST["cvnombreproducto"];
   include("MyConexion.php");
   $sql="select * from cnombreproducto where cvnombreproducto='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==9) {
   
   $CvPerso=$_REQUEST["cvpresentacion"];
   include("MyConexion.php");
   $sql="select * from cpresentacion where cvpresentacion='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 
?>
<body bgcolor="skyblue">

<blockquote>
    <blockquote>
      <blockquote>
        <center><h1><em><strong>Desea eliminar</strong></em></h1>
        <h1><em><strong>el registro</strong></em></h1></center>
      </blockquote>
    </blockquote>
  </blockquote>

<form name="MttoCatalogo_FrmBaja" method="post" action="MttoCatalogo_ModBaja.php">

  
    <table width="400" border="0" align="center" rules="rows">
      <tr>        
      <td width="122">DESCRIPCION:</td>
      <td><input type="text" name="pepa" value="<?php echo $rest; ?>"></td>      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><a href = "MttoCatalogo_FrmMtto.php">Cancelar </a></td>
   <td><a href = "MttoCatalogo_ModBaja.php?CvApellidos=<?php echo $row[0];?>&catalogo=<?php echo $catalogo;?>">Eliminar</a></td>
    </tr>
</table>
</form>
</body>
</html>