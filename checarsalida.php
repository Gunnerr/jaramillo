<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Formulario</title>
<style type="text/css">
  body{
    background: skyblue ;
  }
  </style>
</head>

<body>


<?php
  extract($_GET);

include("connect_db.php");

  $id2=$_REQUEST["idsalida"];
  $id=utf8_decode($id2);

  setlocale(LC_TIME, 'es_ES.UTF-8');
  $diaa= strftime("%w");
  $fecha=strftime ("%d");
  
  $mes= strftime ("%m");
  $ano= strftime ("%Y");
  $hentrada=strftime ("%H:%M:%S");
 
  $sueldoextra="";
  $hextra="";


  $lunes=1;
  $martes=2;
  $miercoles=3;
  $jueves=4;
  $viernes=5;
  $sabado=6;
  $domingo=0;
  

  require("connect_db.php");

$sql5="SELECT * FROM horario WHERE cvhorario='$id'";
$resul5=mysql_query($sql5);
$row2=mysql_fetch_array($resul5);



 
if ($diaa==$domingo){
if ($row2[8]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[8]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){ $estatus='ASISTENCIA';$hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){ $estatus='ASISTENCIA';$hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){ $estatus='ASISTENCIA';$hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){ $estatus='ASISTENCIA';$hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){ $estatus='ASISTENCIA';$hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){ $estatus='ASISTENCIA';$hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){ $estatus='ASISTENCIA';$hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){ $estatus='ASISTENCIA';$hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){ $estatus='ASISTENCIA';$hextra=9; $sueldoextra=180;}}
else if ($row2[8]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){ $estatus='ASISTENCIA';$hextra=1; $sueldoextra=40;}}
else if ($row2[8]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){ $estatus='ASISTENCIA';$hextra=1; $sueldoextra=40;}}}





if ($diaa==$lunes){
if ($row2[2]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[2]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){ $estatus='ASISTENCIA'; $hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){ $estatus='ASISTENCIA'; $hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){ $estatus='ASISTENCIA'; $hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){ $estatus='ASISTENCIA'; $hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){ $estatus='ASISTENCIA'; $hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){ $estatus='ASISTENCIA'; $hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){ $estatus='ASISTENCIA'; $hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){ $estatus='ASISTENCIA'; $hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){ $estatus='ASISTENCIA'; $hextra=9; $sueldoextra=180;}}
else if ($row2[2]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){ $estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}
else if ($row2[2]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}}







if ($diaa==$martes){
if ($row2[3]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[3]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){$estatus='ASISTENCIA'; $hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){$estatus='ASISTENCIA'; $hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){$estatus='ASISTENCIA'; $hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){$estatus='ASISTENCIA'; $hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){$estatus='ASISTENCIA'; $hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){$estatus='ASISTENCIA'; $hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){$estatus='ASISTENCIA'; $hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){$estatus='ASISTENCIA'; $hextra=9; $sueldoextra=180;}}
else if ($row2[3]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}
else if ($row2[3]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}}





if ($diaa==$miercoles){
if ($row2[4]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[4]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){$estatus='ASISTENCIA'; $hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){$estatus='ASISTENCIA'; $hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){$estatus='ASISTENCIA'; $hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){$estatus='ASISTENCIA'; $hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){$estatus='ASISTENCIA'; $hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){$estatus='ASISTENCIA'; $hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){$estatus='ASISTENCIA'; $hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){$estatus='ASISTENCIA'; $hextra=9; $sueldoextra=180;}}
else if ($row2[4]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}
else if ($row2[4]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}}





if ($diaa==$jueves){
if ($row2[5]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[5]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){$estatus='ASISTENCIA'; $hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){$estatus='ASISTENCIA'; $hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){$estatus='ASISTENCIA'; $hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){$estatus='ASISTENCIA'; $hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){$estatus='ASISTENCIA'; $hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){$estatus='ASISTENCIA'; $hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){$estatus='ASISTENCIA'; $hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){$estatus='ASISTENCIA'; $hextra=9; $sueldoextra=180;}}
else if ($row2[5]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}
else if ($row2[5]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA';$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}}






if ($diaa==$viernes){
if ($row2[6]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[6]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){$estatus='ASISTENCIA'; $hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){$estatus='ASISTENCIA'; $hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){$estatus='ASISTENCIA'; $hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){$estatus='ASISTENCIA'; $hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){$estatus='ASISTENCIA'; $hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){$estatus='ASISTENCIA'; $hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){$estatus='ASISTENCIA'; $hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){$estatus='ASISTENCIA'; $hextra=9; $sueldoextra=180;}}
else if ($row2[6]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}
else if ($row2[6]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}}





if ($diaa==$sabado){
if ($row2[7]==0){ $estatus='DIA LIBRE'; $sueldoextra=0;}

else if ($row2[7]==1){ 
if ($hentrada<'14:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'14:00:00' && $hentrada<'15:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=20;}
  else if ($hentrada>'15:00:00' && $hentrada<'16:00:00'){$estatus='ASISTENCIA'; $hextra=2; $sueldoextra=40;}
  else if ($hentrada>'16:00:00' && $hentrada<'17:00:00'){$estatus='ASISTENCIA'; $hextra=3; $sueldoextra=60;}
  else if ($hentrada>'17:00:00' && $hentrada<'18:00:00'){$estatus='ASISTENCIA'; $hextra=4; $sueldoextra=80;}
  else if ($hentrada>'18:00:00' && $hentrada<'19:00:00'){$estatus='ASISTENCIA'; $hextra=5; $sueldoextra=100;}
  else if ($hentrada>'19:00:00' && $hentrada<'20:00:00'){$estatus='ASISTENCIA'; $hextra=6; $sueldoextra=120;}
  else if ($hentrada>'20:00:00' && $hentrada<'21:00:00'){$estatus='ASISTENCIA'; $hextra=7; $sueldoextra=140;}
  else if ($hentrada>'21:00:00' && $hentrada<'22:00:00'){$estatus='ASISTENCIA'; $hextra=8; $sueldoextra=160;}
  else if ($hentrada>'22:00:00' && $hentrada<'22:10:00'){$estatus='ASISTENCIA'; $hextra=9; $sueldoextra=180;}}
else if ($row2[7]==2){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}
else if ($row2[7]==3){  
if ($hentrada<'22:00:00'){ $estatus='FALTA'; $sueldoextra=-100;}
  else if ($hentrada>'23:00:00' && $hentrada<'24:00:00'){$estatus='ASISTENCIA'; $hextra=1; $sueldoextra=40;}}}




  require("connect_db.php");
  $checkcurp=mysql_query("SELECT * FROM checado WHERE cvhorario='$id' and diaa='$diaa' and hsalida IS NULL");
  $check_curp=mysql_num_rows($checkcurp);


  if($check_curp==0){
        echo ' <script language="javascript">alert("Atencion, ya ha checado su salida el dia de hoy");</script> ';
        echo "<script>location.href='checador.php'</script>";
      }
      else

      {
        mysql_query("UPDATE checado SET hsalida='$hentrada', hextra='$hextra', estatus='$estatus', sueldoextra='$sueldoextra'  WHERE cvhorario='$id' and diaa='$diaa' and hsalida IS NULL");
        
        echo ' <script language="javascript">alert("Hora de salida checada con exito");</script> ';
        echo "<script>location.href='checador.php'</script>";
        mysql_close($link);
      }
      
    
?>

</body>
</html>