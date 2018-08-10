<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<h4>用户管理列表>>>>>>>>编辑用户信息</h4>

  <table width="505" border="0" align="center">
  <tr>
    <td width="92" align="center" bgcolor="#99FFCC">用户编号</td>
    <td width="92" align="center" bgcolor="#99FFCC">用户名</td>
    <td width="93" align="center" bgcolor="#99FFCC">密码</td>
    <td width="93" align="center" bgcolor="#99FFCC">身份代码</td>
    <td width="107" align="center" bgcolor="#99FFCC">编辑</td>
  </tr>
  <?
      include_once("conn.php");
	  $sql="select userID,userName,password,status from users order by userID desc";
	  $str=mysql_query($sql,$conn);
	  mysql_close($conn);
	  while($row=mysql_fetch_array($str)){
  ?>
  <tr>
    <td align="center" bgcolor="#999999"><?=$row["userID"]?></td>
    <td align="center" bgcolor="#999999"><?=$row["userName"]?></td>
    <td align="center" bgcolor="#999999"><?=$row["password"]?></td>
    <td align="center" bgcolor="#999999"><?=$row["status"]?></td>
    <td align="center" bgcolor="#999999">
      <a href="userDelet.php?id=<?=$row['userID']?>" onclick="return confirm('确定删除吗？')">删除</a>
      <a href="userUpdate.php?id=<?=$row['userID']?>">修改</a>
    </td>
  </tr>
  <?
	  }
  ?>
</table>


</body>
</html>