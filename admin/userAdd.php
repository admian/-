<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
		var bbbb=document.getElementById("ee").value;
		if(bbbb!=bb){
	       	alert("两次输入密码不一样，请重新输入！");
			document.getElementById("ee").focus();
			return false;	
		}
		return true;
	  }
</script>
</head>

<body>
<form action="userAdd_save.php" method="post" onsubmit="return check()">
<h4>用户管理>>>>>>增加用户</h4>
  <table width="441" height="119" border="0">
  <tr>
    <td width="116" align="right">用户名：</td>
    <td width="309"><input name="userName" type="text" size="20" id="cc"/></td>
  </tr>
  <tr>
    <td align="right">密码：</td>
    <td><input name="password" type="password" size="20" id="dd"/></td>
  </tr>
   <tr>
    <td align="right">确认密码：</td>
    <td><input name="pass" type="password" size="20" id="ee"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input name="" type="submit" value="确定" />
      <input name="" type="reset" value="重置" />
     </td>
    </tr>
</table>
</form>
</body>
</html>