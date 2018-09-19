<?php
error_reporting(0);
$config = mysql_connect("127.0.0.1","dianjinshuju","dYAd4KeDY6ctczmN")or die("Mysql Connect Error");//设置数据库IP，账号，密码
mysql_select_db("38");//数据库库名
mysql_query("SET NAMES UTF8");
?>