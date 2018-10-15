<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario Editar</title>
</head>
<?php

  $catalogo=$_REQUEST["catalogo"]; 
 

 if ($catalogo==1) {
   
   $CvPerso=$_REQUEST["cvnombre"];
   include("MyConexion.php");
   $sql="select * from cnombre where cvnombre='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==2) {
   
   $CvPerso=$_REQUEST["cvapellido"];
   include("MyConexion.php");
   $sql="select * from capellido where cvapellido='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==3) {
   
   $CvPerso=$_REQUEST["cvgenero"];
   include("MyConexion.php");
   $sql="select * from  cgenero where cvgenero='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==4) {
   
   $CvPerso=$_REQUEST["cvcolonia"];
   include("MyConexion.php");
   $sql="select * from ccolonia where cvcolonia='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==5) {
   
   $CvPerso=$_REQUEST["cvciudad"];
   include("MyConexion.php");
   $sql="select * from cciudad where cvciudad='$CvPerso'";
   $resul=mysql_query($sql);
   $row=mysql_fetch_array($resul);
   $rest=$row[1];
 }

 if ($catalogo==6) {
   
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

<body bgcolor=skyblue>

<form name="MttoCatalogo_FrmModificar" method="post" action="MttoCatalogo_ModModificar.php">

  <blockquote>
    <blockquote>
      <blockquote>
        <center><h1><em><strong>Editar un dato </strong></em></h1></center>
      </blockquote>
    </blockquote>
  </blockquote>


<table width="400" border="0" align="center" rules="rows">
   <tr>
         
      <td width="122">Descripcion:</td>
      <td><input type="text" name="pepa" value="<?php echo $rest; ?>"></td>
      
      
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" href= "MttoCatalogo_ModModificar.php?cvtipopersona=<?php echo $row[0];?>&catalogo=<?php echo $catalogo;?>" value="enviar"></td>
    </tr>
    <tr><td><input type="hidden" name="catalogo" value="<?php echo $catalogo; ?>" this.setVisible="false"></td></tr>
    <tr><td><input type="hidden" name="cvtipopersona" value="<?php echo $row[0]; ?>" this.setVisible="false"></td></tr>
</table>
<table>
</table>
<a href="MttoCatalogo_FrmMtto.php" ><FONT FACE=candara COLOR="#FFFFFF" SIZE=4><center>Regresar</center> </a>
</form>
</body>
</html>