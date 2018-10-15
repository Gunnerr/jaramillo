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

  $id2=$_REQUEST["identrada"];
  $id=utf8_decode($id2);

  setlocale(LC_TIME, 'es_ES.UTF-8');
  $diaa= strftime("%w");
  $fecha=strftime ("%d");
  
  $mes= strftime ("%m");
  $ano= strftime ("%Y");
  $hentrada=strftime ("%H:%M:%S");
  $estatus="";
  $sueldo="";
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


  require("connect_db.php");

$hora="SELECT horaini, horafin from cturno";
$resul5=mysql_query($sql5);
$row2=mysql_fetch_array($resul5);




 
if ($diaa==$domingo){
if ($row2[8]==0){ $estatus='DIA LIBRE'; $sueldo=0;}

else if ($row2[8]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}



else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA'; $sueldo=0;}}


else if ($row2[8]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}


  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}


  else if ($hentrada>'14-15-00'){ $estatus='FALTA'; $sueldo=0;}}

else if ($row2[8]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}


  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA'; $sueldo=0;}}
}


if ($diaa==$lunes){
if ($row2[2]==0){ $estatus='DIA LIBRE'; $sueldo=0;}
else if ($row2[2]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}
else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[2]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}
  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'14-15-00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[2]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}
  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA'; $sueldo=0;}}
}



if ($diaa==$martes){
if ($row2[3]==0){ $estatus='DIA LIBRE'; $sueldo=0;}
else if ($row2[3]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}
else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[3]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}
  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'14-15-00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[3]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}
  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA'; $sueldo=0;}}
}




if ($diaa==$miercoles){
if ($row2[4]==0){ $estatus='DIA LIBRE'; $sueldo=0;}
else if ($row2[4]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}
else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[4]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}
  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'14-15-00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[4]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}
  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA'; $sueldo=0;}}
}




if ($diaa==$jueves){
if ($row2[5]==0){ $estatus='DIA LIBRE'; $sueldo=0;}
else if ($row2[5]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}
else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA1'; $sueldo=0;}}
else if ($row2[5]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}
  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'14-15-00'){ $estatus='FALTA2'; $sueldo=0;}}
else if ($row2[5]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}
  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA3'; $sueldo=0;}}
}




if ($diaa==$viernes){
if ($row2[6]==0){ $estatus='DIA LIBRE'; $sueldo=0;}
else if ($row2[6]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}
else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[6]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}
  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'14-15-00'){ $estatus='FALTA'; $sueldo=0;}}
else if ($row2[6]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}
  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA'; $sueldo=0;}}
}




if ($diaa==$sabado){
if ($row2[7]==0){ $estatus='DIA LIBRE'; $sueldo=0;}
else if ($row2[7]==1){  
  if ($hentrada>'05:00:00' && $hentrada<'06:10:00'){ $estatus='ASISTENCIA'; $sueldo=100;}
else if ($hentrada>'06:10:00' && $hentrada<'06:15:00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'06:15:00'){ $estatus='FALTA1'; $sueldo=0;}}
else if ($row2[7]==2){  
  if ($hentrada>'13-00-00' && $hentrada<'14-10-00'){ $estatus='ASISTENCIA'; $sueldo=100;}
  else if ($hentrada>'14-10-00' && $hentrada<'14-15-00'){ $estatus='RETARDO'; $sueldo=80;}
  else if ($hentrada>'14-15-00'){ $estatus='FALTA2'; $sueldo=0;}}
else if ($row2[7]==3){  
  if ($hentrada>'05-00-00' && $hentrada<'06-10-00'){ $estatus='ASISTENCIA'; $sueldo=200;}
  else if ($hentrada>'06-10-00' && $hentrada<'06-15-00'){ $estatus='RETARDO'; $sueldo=160;}
  else if ($hentrada>'06-15-00'){ $estatus='FALTA3'; $sueldo=0;}}
}







  require("connect_db.php");
  $checkcurp=mysql_query("SELECT * FROM checado WHERE cvhorario='$id' and diaa='$diaa' and hentrada IS NOT NULL");
  $check_curp=mysql_num_rows($checkcurp);


  if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya ha checado su entrada el dia de hoy");</script> ';
        echo "<script>location.href='checador.php'</script>";
      }
      else

      {
        mysql_query("insert into checado (cvhorario, diaa, fecha, cvmes, ano, hentrada, estatus, sueldo) values ('$id', '$diaa', '$fecha', '$mes', '$ano', '$hentrada', '$estatus', '$sueldo')");
        
        echo ' <script language="javascript">alert("Hora de entrada checada con exito");</script> ';
        echo "<script>location.href='checador.php'</script>";
        mysql_close($link);
      }
      
    
?>


</body>
</html>