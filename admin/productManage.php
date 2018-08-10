<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<h4>商品管理列表>>>>>编辑商品</h4>
<table width="668" border="0" align="center">
  <tr>
    <td width="107" align="center" >商品编号</td>
    <td width="107" align="center" >商品名称</td>
    <td width="107" align="center" >商品商标</td>
    <td width="107" align="center" >商品型号</td>
    <td width="107" align="center" >商品价格</td>
    <td width="107" align="center" >编辑</td>
  </tr>
  <?
     include_once("conn.php");
	  $sql="select `productID`,`name`,`brand`,`model`,`price` from `product` order by productID desc";
	  $str=mysql_query($sql,$conn);
	  mysql_close($conn);
	  while($row=mysql_fetch_array($str)){

  ?>
  <tr>
    <td align="center"><?=$row["productID"]?></td>
    <td align="center"><?=$row["name"]?></td>
    <td align="center"><?=$row["brand"]?></td>
    <td align="center"><?=$row["model"]?></td>
    <td align="center"><?=$row["price"]?></td>
    <td align="center">
     <a href="productDelet.php?id=<?=$row['productID']?>" onclick="return confirm('确定删除吗？')">删除</a>
      <a href="productUpdate.php?id=<?=$row['productID']?>">修改</a>
    </td>
  </tr>
  <?
	  }
  ?>
</table>

</body>
</html>