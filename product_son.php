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
 <div id="one"></div>
 <div id="big_two">
    <div id="left">
      <div id="left_bg1">
         <p><a href="#">产品类1</a><br/><a href="#">产品类2</a><br/><a href="#">产品类3</a><br/><a href="#">产品类4</a></p> 
      </div>
      <div id="contact_bg1">
       <p>地址：广东省广州市天河区天<br/>
          平架沙太路沙太路<br/>
          电话：020-8796181<br/>
          传真：020-98-87961814<br/>
          邮箱：Lankecms@163.com</p>
      </div>
    </div>
   <?
	  $id=$_GET['id'];
      include("admin/conn.php");
	  $sql="select `productID`,`serialNumber`,`name`,`brand`,`model`,`price`,`prcture`,`description` from `product` where `productID`=$id";
	  $str=mysql_query($sql,$conn);
	  $row=mysql_fetch_array($str);
	 ?>
    <div id="right"> 
    <div id="right_one">
      <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">产品详情</h2></div>
      <div style="width:50px; height:20px; float:left; margin-top:44px;">PRODUCTS</div>
      <div id="div_2">您现在的位置：产品中心 > 产品详情</div>    
      <img src="images/path_line.gif" style="margin:o auto; width:770px; height:2px;"/>
    </div>
    <div id="right1_two"> 
        <div id="picture"><img src="images/<?=$row['prcture']?>"  style="width:280px; width:280px; border:#CCC solid 1px;"/></div>
         <div id="description">
            <div id="name">
                <p style="color:#666; font: bold 20px/20px 宋体; text-align:center;"><?=$row['name']?></p> 
                <img src="images/path_line.gif" style="margin-top:20px; width:430px; height:2px;"/>
            </div>
            <div id="pro_son">
                <ul style="color:#369;">
                <li>商品编号:<?=$row["serialNumber"]?></li>
                <li>商品商标:<?=$row["brand"]?></li>
                <li>商品型号:<?=$row["model"]?></li>
                <li>商品价格:<?=$row["price"]?></li>
                <li>商品描述:<?=$row["description"]?></li>
                </ul>
            </div>
         </div>
        <div style=" width:700px; height:100px; float:left; margin-top:35px; margin-left:37px;">
          <p style="color:#666; font:20px/20px 宋体;"><?=$row["description"]?></p>
        </div>
	</div>
    
  </div>
</body>
<?
    include("foot_son.html");
?>
 </html>