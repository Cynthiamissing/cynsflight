<?php

$mysql_host ='rerun';    //你的host
$mysql_user = 'potiro';        //你的host用户名
$mysql_pass = 'pcXZb(kL';            //你的密码 
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