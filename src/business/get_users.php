<?php
include 'conn.php';
$sql="SELECT `u_UID` as 'ID', `u_Name` as 'name', `u_PWD` as 'passwd', `u_Basic_info` as 'basicInfo', `u_preference` as 'preference' FROM `tbl_User`";
$rs = mysql_query($sql);
$result = array();
while($row = mysql_fetch_object($rs)){
        array_push($result, $row);
}
 
echo json_encode($result);
?>
