<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新闻增加页面</title>
</head>

<body>
<form action="newsAdd_save.php" method="post">
<h4>新闻管理>>>>>>增加新闻</h4>
 <table width="652" height="460" border="0" align="center">
  <tr>
    <td width="74" height="37" align="right" bgcolor="#99CCCC">新闻标题：</td>
    <td width="441" bgcolor="#CCFFCC"><input name="title" type="text" size="20" /></td>
  </tr>
  <tr>
    <td height="345" align="right" bgcolor="#99CCCC">新闻内容：</td>
    <td bgcolor="#CCFFCC"><textarea name="content" cols="50" rows="20"></textarea></td>
  </tr>
  <?
       ini_set("date.timezone","PRC");
  ?>
  <tr>
    <td height="42" align="right" bgcolor="#99CCCC">发布时间：</td>
    <td bgcolor="#CCFFCC"><input name="writeDate" type="text" size="20" value="<?=date('Y-m-d H:i:s')?>" /></td>
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