<?php


//echo var_dump($_GET);
//echo var_dump($_POST);

$id =  $_GET['id'];
$User_name =   $_POST['User_name'];
$User_password =   $_POST['User_password'];
$admin = $_POST['admin'];
include '../conn_getuser.php';
echo mysql_query("update tbl_user set u_Name='$User_name',u_PWD='$User_password'  where u_UID=$id");

?>