<?php
/**
 * Created by PhpStorm.
 * User: lijianying
 * Date: 14-6-15
 * Time: 下午11:05
 */
$id = $_POST['id'];
include '../conn_getuser.php';
echo mysql_query("delete from tbl_user where u_UID=$id");

?>