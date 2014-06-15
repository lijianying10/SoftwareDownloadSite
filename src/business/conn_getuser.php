<?php
$con=mysql_connect("localhost","root","1")or die("数据库没有连接上");
//选择一个数据库
mysql_select_db("SoftwareDownloadSite",$con)  or die("数据库不存在");
mysql_query("set names utf-8");
?>
