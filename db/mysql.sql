create table tbl_software(
  s_id int unsigned not null auto_increment,
  s_Title varchar(50) not null unique check(Title!='') ,
  s_size DOUBLE,
  s_language varchar(50),
  s_download_times int,
  s_comment_times int,
  s_uploadtime_date datetime,
  s_offical_site text,
  s_plateform text,
  s_URL_baidu text,
  s_URL_offical text,
  s_Introduction text,
  s_Comment text,
  s_other text,
  primary key(s_id)          
)engine=innodb default charset=utf8 auto_increment=1;

create table tbl_User(
	u_UID int unsigned not null auto_increment,
    u_Name varchar(250) not null,
	u_PWD varchar(250) not null,
	u_Basic_info text,
	u_preference text,
	primary key(u_UID)  
)engine=innodb default charset=utf8 auto_increment=1;

create table tbl_SystemSetting(
  u_UID int unsigned not null auto_increment,
  list_Recommand text, 
  list_SoftWare_rank text, 
  list_useful text,
  primary key(u_UID)
)engine=innodb default charset=utf8 auto_increment=1;
