

<?php
  extract($_GET);
include("connect_db.php");

  $id=$_REQUEST["id"];
  $id=utf8_decode($id); 
  
  require("connect_db.php");
  $checkcurp=mysql_query("SELECT * FROM empleado WHERE cvpersona='$id'");
  $check_curp=mysql_num_rows($checkcurp);

  
  if($check_curp>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un empleado activo con estos datos, verifique la informacion");</script> ';
        echo "<script>location.href='altaempleado.php'</script>";
      }
      else

      {
        mysql_query("insert into empleado (cvpersona, estatus) values ('$id', 'ACTIVO')");
        
        echo ' <script language="javascript">alert("Empleado contratado satisfactoriamente");</script> ';
        echo "<script>location.href='altaempleado.php'</script>";
        mysql_close($link);
      }
      
    
?>