<?php

$mysql_host ='rerun';    //���host
$mysql_user = 'potiro';        //���host�û���
$mysql_pass = 'pcXZb(kL';            //������� 
$conn_error = 'Could not connect!';
$mysql_db = 'poti';
$conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);
//@mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($conn_error);
if (!@$conn||!@mysqli_select_db($conn,$mysql_db)){

      die($conn_error);
     }else{
       echo "Connection OK";
       }

?>