<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>

<body>
<?
   include("top.html");
?>
<div id="photo"></div>

<div id="big_div">
   <!--------------------新闻列表展示-->
<div id="newsall">  
   <div id="new_title"></div>
   <a href="new.php"><div id="more"></div></a>
   <div id="new">
     <ul>
      <?
        include("admin/conn.php");
		$sql="select newsID,left(title,18) as title,left(content,10) as content,date(writedate) as writeDate from news order by writeDate desc limit 0,5 ";
		$str=mysql_query($sql,$conn);
	     mysql_close($conn);
	     while($row=mysql_fetch_array($str)){
	   ?>
     <li><a href="new_son.php?id=<?=$row['newsID']?>"><?=$row["title"]?>&nbsp;&nbsp;&nbsp;&nbsp;<?=$row["writeDate"]?></a></li><br />
     <?
		 }
	 ?>
     </ul>
          </div>

</div>
   <!---------------------关于我们-->
<div id="about">
      <div id="about_title"></div>
       <a href="about.php"><div id="more1"></div></a>
       <div style="clear:both;">
  <table style="width:450px; height:90px;">
       <tr>
    <td width="50px" height="129"><img src="images/about.gif" height="109"></td>
    <td> 
	<p style="line-height:26px; color:#666;">信息咨询,使众多用户能够利用网络资源为自身带来最大的利益。 公司自成立那天起，就秉承"诚信、创新、激情、勤奋、团	结、互助"的经营理念,         以其优秀的现代管理意识、快速的服务体系，充分利用现有资源，为用户提供了最好的商品与支持</p>
	</td>
        </tr>
  </table>
        </div>
   
</div><!-----------------------------------big_div结束----------------------->
   <div class="clear"></div>
    <!-----------------------展品列表展示-->
<div id="productsall">
   <div id="product_title"></div>
    <a href="product.php"><div id="more2"></div></a>
    <div id="product">
    
  <?
     include("admin/conn.php");
	 $sql="select productID,prcture,name from product order by productID desc limit 0,6";
	 $str=mysql_query($sql,$conn);
	 mysql_close($conn);
	 while($row=mysql_fetch_array($str)){
   ?>
    <div id="productlist"><a href="#" ><img src="images/<?=$row["prcture"]?>" class="img_a"/></a><li><a href="product_son.php?id=<?=$row["productID"]?>"><?=$row["name"]?></a></li></div> 
  <?
	 }
  ?>
       </div>
       
   </div>

</body>
<?
  include("foot.html");
?>

</html>