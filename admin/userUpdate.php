<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?
    $id=$_GET['id'];
   
   include_once("conn.php");
   $sql="select userID,userName,password,status from users where userID=$id";
   $str=mysql_query($sql,$conn);
   mysql_close($conn);
   $row=mysql_fetch_array($str);
   
?>
<form action="userUpdate_save.php" method="post">
  <h4>用户管理列表>>>>>>>>修改用户信息</h4>
  <input name="id" type="hidden" value="<?=$row["userID"]?>" />
 <table width="363" border="1">
  <tr>
    <td width="90" align="right">用户名：</td>
    <td width="257"><input name="userName" type="text" size="20" value="<?=$row["userName"]?>"/></td>
  </tr>
  <tr>
    <td align="right">密码：</td>
    <td><input name="password" type="password" size="20" value="<?=$row["password"]?>" /></td>
  </tr>
  <tr>
    <td align="right">身份代码：</td>
    <td><input name="status" type="text" size="10" value="<?=$row["status"]?>" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input name="" type="submit" value="提交" />
    <input name="" type="reset" value="重置" />
    </td>
    </tr>
</table>
  
</form>
</body>
</html>