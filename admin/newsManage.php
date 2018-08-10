<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻管理列表</title>
</head>

<body>
<h4>新闻管理列表>>>>>>>>编辑新闻信息</h4>

  <table width="776" border="0" align="center">
  <tr>
    <td width="88" align="center" bgcolor="#99FFCC">新闻编号</td>
    <td width="196" align="center" bgcolor="#99FFCC">新闻标题</td>
    <td width="187" align="center" bgcolor="#99FFCC">新闻内容</td>
    <td width="141" align="center" bgcolor="#99FFCC">发布时间</td>
    <td width="142" align="center" bgcolor="#99FFCC">编辑</td>
  </tr>
  <?
      include_once("conn.php");
	  $sql="select `newsID`,`title`,left(content,10) as content,`writeDate` from `news` order by writeDate desc";
	  $str=mysql_query($sql,$conn);
	  mysql_close($conn);
	  while($row=mysql_fetch_array($str)){
  ?>
  <tr>
    <td align="center" bgcolor="#999999"><?=$row["newsID"]?></td>
    <td align="center" bgcolor="#999999"><?=$row["title"]?></td>
    <td align="center" bgcolor="#999999"><?=$row["content"]?></td>
    <td align="center" bgcolor="#999999"><?=$row["writeDate"]?></td>
    <td align="center" bgcolor="#999999">
      <a href="newsDelet.php?id=<?=$row['newsID']?>" onclick="return confirm('确定删除吗？')">删除</a>
      <a href="newsUpdate.php?id=<?=$row['newsID']?>">修改</a>
    </td>
  </tr>
  <?
	  }
  ?>
</table>


</body>
</html>