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
<form action="product _son.php" method="post">
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
      include("admin/conn.php");
	  $sql="select productID,prcture,name from product order by productID desc";
	  $result=mysql_query($sql);
	  $num=mysql_num_rows($result);
	  //分页
	 $pagecout=ceil($num/6);//计算总页数
	 
	 if(empty($_GET['page'])==true){
		 $page=1;
		 }else{
		  $page=$_GET['page'];
		}
	 $a=($page-1)*6;//计算每页开始记录号
	 $sqlpage=$sql." limit $a,6"; 
	 $resultpage=mysql_query($sqlpage);  
	 $n=mysql_num_rows($resultpage);
	 ?>
    <div id="right"> 
    <div id="right_one">
      <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">产品中心</h2></div>
      <div style="width:50px; height:20px; float:left; margin-top:44px;">PRODUCTS</div>
      <div id="div_2">您现在的位置：网站首页 > 产品中心</div>    
      <img src="images/path_line.gif" style="margin:0 auto; width:770px; height:2px;"/>
    </div>
    <div id="right1_two">       
	 <?
		for($a=1;$a<=$n;$a++){
			$row=mysql_fetch_array($resultpage);
	 ?>
     <div id="right_pro"><a href="product_son.php?id=<?=$row['productID']?>"><img src="images/<?=$row["prcture"]?>"/><br/><li><?=$row["name"]?></li></a></div>
    <?
	 }
	?>
    </div>
     <div id="page">
  
   	<?
         for($i=1;$i<=$pagecout;$i++){
			  echo "<a href='product.php?page=$i'>$i</a>"."     ";
			 }
	   ?>
 
   </div>
 </div>
 </form>
</body>
<?
  include("foot_son.html");
?>

 </html>