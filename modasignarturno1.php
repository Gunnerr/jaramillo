

<?php
  extract($_GET);
include("connect_db.php");

  $id=$_REQUEST["id"];
  $id=utf8_decode($id); 
  
  require("connect_db.php");
  $checkcurp=mysql_query("SELECT * FROM horario WHERE cvempleado='$id'");
  $check_curp=mysql_num_rows($checkcurp);

  
  if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un horario registrado para este empleado");</script> ';
        echo "<script>location.href='asignarhorario.php'</script>";
      }
      else

      {
        
        echo "<script>location.href='asignarturno2.php?id=$id'</script>";
        mysql_close($link);
      }
      
    
?>