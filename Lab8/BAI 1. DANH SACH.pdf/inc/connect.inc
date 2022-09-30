<?php
$server = '127.0.0.1:3307' ;
$user = "root";
$pass = "";
$db = "udn";
$con = mysqli_connect ( $server , $user , $pass , $db ) ;
mysqli_query ( $con , "set names 'utf8'" ) ;
?>