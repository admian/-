<!-- --><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script>
  function check(){
	  var aa=document.getElementById("cc").value;
		if(aa==""){
			alert("请输入名称！");
			document.getElementById("cc").focus();
			return false;
		}
		
		var bb=document.getElementById("dd").value;
		if(bb==""){
			alert("请输入密码！");
			document.getElementById("dd").focus();
			return false;
		}
		return true;
	  }
</script>
</head>
 
<body>
 <?
    include("top.html");
  ?>
 <div id="one"></div>
 <div id="big_two">
    <div id="left">
      <div id="left_bg">
         <p><a href="#">后台管理</a><br/><a href="#">公司首页</a></p> 
      </div>
      <div id="contact_bg">
       <p>地址：广东省广州市天河区天<br/>
          平架沙太路沙太路<br/>
          电话：020-8796181<br/>
          传真：020-98-87961814<br/>
          邮箱：Lankecms@163.com</p>
      </div>
    </div>
  <div id="right">
      <div id="right_one">
          <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">后台管理</h2></div>
          <div style="width:70px; height:20px; float:left; margin-top:44px;">ADMIN</div>
          <div id="div_2">您现在的位置：网站首页 > 后台管理</div>    
          <img src="images/path_line.gif" style="margin:0 auto; width:770px; height:2px;"/>
      </div>
      <div id="right2_two" style=" background:url(images/bg.gif); width:80%; height:80%; margin-top:30px; margin-left:30px;">
            <form action="login_ok.php" method="post" onsubmit="return check()">
             <table width="306" height="119" border="0" style="margin:0 auto; margin-top:150px;">
              <tr>
                <td width="80" align="right" style=" color:#36C;">用户名：</td>
                <td width="216" ><input name="userName" type="text" size="20" id="cc"/></td>
              </tr>
              <tr>
                <td align="right" style=" color:#36C;">密码：</td>
                <td><input name="password" type="password" size="20" id="dd"/></td>
              </tr>
              <tr>
                <td colspan="2" align="center">
                <input name="" type="submit" value="登录"  style="background-image:url(images/login_5.gif); width:70px; height:24px; border-style:none;"/>
                </td>
               </tr>
            </table>
    
        </form>
      </div>
  </div>  
  
</body>
		<?
            include("foot_son.html");
        ?>
</html>