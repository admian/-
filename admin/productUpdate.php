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
		$sql="select `productID`,`serialNumber`,`name`,`brand`,`model`,`price`,`prcture`,`description` from `product` where `productID`=$id";
		$str=mysql_query($sql,$conn);
		mysql_close($conn);
		$row=mysql_fetch_array($str);
   
?>
<form action="productUpdate_save.php" method="post">
<h4>商品管理列表>>>>>编辑商品</h4>
  <input name="id" type="hidden" value="<?=$row["productID"]?>" />
  <table width="400" border="0" align="center">
  <tr>
    <td width="117" height="32">商品系列：</td>
    <td width="229"><input name="serialNumber" type="text" size="20" value="<?=$row["serialNumber"]?>" /></td>
  </tr>
  <tr>
    <td height="27">商品名称：</td>
    <td><input name="name" type="text" size="20" value="<?=$row["name"]?>"/></td>
  </tr>
  <tr>
    <td height="30">商品商标：</td>
    <td><input name="brand" type="text" size="20" value="<?=$row["brand"]?>"/></td>
  </tr>
  <tr>
    <td height="29">商品型号：</td>
    <td><input name="model" type="text" size="20" value="<?=$row["model"]?>"/></td>
  </tr>
  <tr>
    <td height="28">商品价格：</td>
    <td><input name="price" type="text" size="20" value="<?=$row["price"]?>"/></td>
  </tr>
  <tr>
    <td height="36">商品图片：</td>
    <td><input name="prcture" type="text" size="20"  value="<?=$row["prcture"]?>"/></td>
  </tr>
  <tr>
    <td>商品介绍：</td>
    <td><textarea name="description" cols="25" rows="10">
    <?=$row["description"]?>
    </textarea></td>
  </tr>
  <tr>
    <td align="center"><input name="" type="submit" value="提交" /></td>
    <td align="left"><input name="" type="reset" value="重置" /></td>
  </tr>
</table>

</form>
</body>
</html>