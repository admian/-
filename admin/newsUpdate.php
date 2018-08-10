<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>编辑新闻信息</title>
</head>

<body>
 <?
       $id=$_GET['id'];
       
	  
	    include_once("conn.php");
		$sql="select `newsID`,`title`,`content`,`writeDate` from `news` where `newsID`=$id";
		$str=mysql_query($sql,$conn);
		mysql_close($conn);
		$row=mysql_fetch_array($str);
   
  ?>
<form action="newsUpdate_save.php" method="post">
 <h4>新闻管理列表>>>>>>>>修改新闻信息</h4>
 <input name="id" type="hidden" value="<?=$row["newsID"]?>" />
 <table width="673" height="452" border="0">
  <tr>
    <td width="167" height="37" align="right" bgcolor="#99CCCC">新闻标题：</td>
    <td width="510" bgcolor="#CCFFCC"><input name="title" type="text" size="20" value="<?=$row["title"]?>" /></td>
  </tr>
  <tr>
    <td height="337" align="right" bgcolor="#99CCCC">新闻内容：</td>
    <td bgcolor="#CCFFCC"><textarea name="content" cols="50" rows="20"> <?=$row["content"]?></textarea></td>
  </tr>
  <tr>
    <td height="42" align="right" bgcolor="#99CCCC">发布时间：</td>
    <td bgcolor="#CCFFCC"><input name="writeDate" type="text" size="20" value="<?=$row["writeDate"]?>" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" bgcolor="#999999">
        <input name="" type="submit" value="提交" />&nbsp;&nbsp;
        <input name="" type="reset" value="重置" />
    </td>
    </tr>
</table>


</form>
</body>
</html>