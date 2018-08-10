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
         <p><a href="#">在线留言</a><br/><a href="messageManage.php" target="_self">留言查看</a><br/><a href="#">回复留言</a><br/><a href="about.php" target="_self">关于我们</a></p> 
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
          <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">在线留言</h2></div>
          <div style="width:70px; height:20px; float:left; margin-top:44px;">MESSAGE</div>
          <div id="div_2">您现在的位置：网站首页 > 在线留言</div>    
          <img src="images/path_line.gif" style="margin:0 auto; width:770px; height:2px;"/>
      </div>
      <div id="right3_two">
	  <form action="messageAdd_save.php" method="post">
	   <?
       ini_set("date.timezone","PRC");
       ?>
	      <div id="message">
	       <ul>
		   <li>留言标题：<input name="title" type="text" size="20" /></li><br/>
		   <li>您的姓名：<input name="writer" type="text" size="20" /></li><br/>
		   <li>留言时间：<input name="writeDate" type="text" size="20" value="<?=date('Y-m-d H:i:s')?>"/></li><br/>
		   <li>留言内容：<textarea name="content" cols="15" rows="7"></textarea></li><br/>
		   <li>
		   <input name="" type="submit" value="提交留言"/>&nbsp;&nbsp;&nbsp;&nbsp;
		   <input name="" type="reset" value="重置" />
		   </li>
		   </ul>
		   </div>
      </div>
	  </form>
  </div>  
  
</body>
<?
  include("foot_son.html");
?>
</html>