<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>软件详情页</title>
</head>
<body>
<h1>编号：<?php echo ($s_id); ?></h1>
<h1>软件名：<?php echo ($s_Title); ?></h1>
<h1>软件大小：<?php echo ($s_size); ?></h1>
<h1>软件语言：<?php echo ($s_language); ?></h1>
<h1>下载次数：<?php echo ($s_download_times); ?></h1>
<h1>评论次数：<?php echo ($s_comment_times); ?></h1>
<h1>上传时间：<?php echo ($s_uploadtime_date); ?></h1>
<h1>官方网站：<?php echo ($s_offical_site); ?></h1>
<h1>运行平台：<?php echo ($s_plateform); ?></h1>
<h1>百度网盘分流：<?php echo ($s_URL_baidu); ?></h1>
<h1>官方下载地址：<?php echo ($s_URL_offical); ?></h1>
<h1>软件介绍：<?php echo ($s_Introduction); ?></h1>
</body>
</html>