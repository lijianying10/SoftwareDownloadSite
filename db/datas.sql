INSERT INTO `tbl_User`( `u_Name`, `u_PWD`, `u_Basic_info`, `u_preference`) VALUES ('admin','1','','');
INSERT INTO `tbl_User`( `u_Name`, `u_PWD`, `u_Basic_info`, `u_preference`) VALUES ('a','1','','');
INSERT INTO `tbl_User`( `u_Name`, `u_PWD`, `u_Basic_info`, `u_preference`) VALUES ('user1','1','','');
INSERT INTO `tbl_User`( `u_Name`, `u_PWD`, `u_Basic_info`, `u_preference`) VALUES ('u','1','','');
INSERT INTO `tbl_User`( `u_Name`, `u_PWD`, `u_Basic_info`, `u_preference`) VALUES ('r','1','','');




SELECT `u_UID` as 'ID', `u_Name` as 'name', `u_PWD` as 'passwd', `u_Basic_info` as 'basicInfo', `u_preference` as 'prference' FROM `tbl_User`;
