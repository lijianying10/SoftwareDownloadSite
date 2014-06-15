<?php
//var_dump($_GET);
//var_dump($_POST);
$User_name = $_POST['User_name'];
$User_password = $_POST['User_password'];
include '../conn_getuser.php';
echo mysql_query("insert  into tbl_user(u_Name,u_pwd) values ('$User_name','$User_password')");
?>