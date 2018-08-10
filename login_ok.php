<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
     session_start();//启动session
	  include("admin/conn.php");
	  $userName=$_POST["userName"];
	  $password=$_POST["password"];
	  $sql="select userName,password from users where userName='$userName' and password='$password'";
	  $str=mysql_query($sql);
	  $num=mysql_num_rows($str);
	  if($num==0){
		   echo"登录失败!";
		  }
	   else{
		   echo"<script>alert('登录成功!');location.href='admin/admin-templates/index.html';</script>";
		   $_SESSION["userName"]=$userName;
		   }
	   
	   
	   
	   
?>
  
</body>
</html>