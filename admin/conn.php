<?
    //连接主机
	$conn=mysql_connect("localhost","root","root");	
    //选择数据库
	mysql_query("use company",$conn);
	//设置编码
 	mysql_query("set character set utf8",$conn);
	mysql_query("set names utf8",$conn);
	
?>