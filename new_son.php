<!-- --><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
 
<body>
 <?
     include("top.html");
  ?>
 <div id="one"></div>
 <div id="big_two">
    <div id="left">
      <div id="left_bg1">
         <p><a href="#">公司新闻</a><br/><a href="#">部门新闻</a><br/><a href="#">行业新闻</a><br/><a href="#">科技创新</a></p> 
      </div>
      <div id="contact_bg1">
       <p>地址：广东省广州市天河区天<br/>
          平架沙太路沙太路<br/>
          电话：020-8796181<br/>
          传真：020-98-87961814<br/>
          邮箱：Lankecms@163.com</p>
      </div>
    </div>
  <div id="right">
      <div id="right_one">
          <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">公司新闻</h2></div>
          <div style="width:70px; height:20px; float:left; margin-top:44px;">COMPANY NEW</div>
          <div id="div_2">您现在的位置：网站首页 > 公司新闻</div>    
          <img src="images/path_line.gif" style="margin:0 auto; width:770px; height:2px;"/>
      </div>
     
  <?
	 $id=$_GET['id'];
	 include("admin/conn.php");
	 $sql="select newsID,title,content,writeDate from news where newsID=$id";
	 $str=mysql_query($sql,$conn);
	 $row=mysql_fetch_array($str);
  ?> 
      <div id="right_two">
	     <div id="title"><?=$row['title']?></div>
		 <div id="content"><?=$row['content']?></div> 
		 <div id="writeDate"><?=$row['writeDate']?></div>
      </div>
   </div>  
  
</body>
<?
  include("foot_son.html");
?>
</html>