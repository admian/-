
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $id=$_POST['id'];
	
   $serialNumber=$_POST['serialNumber'];
   $name=$_POST['name'];
   $brand=$_POST["brand"];
   $model=$_POST['model'];
   $price=$_POST['price'];
   $prcture=$_POST['prcture'];
   $description=$_POST["description"];
   
    include_once("conn.php");
   $sql="update `product` set `serialNumber`='$serialNumber',`name`='$name',`brand`='$brand',`model`='$model',`price`='$price',`prcture`='$prcture',`description`='$description'
    where `productID`= $id";
   
   $str=mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('编辑成功！');
		window.location='productManage.php';</script>"
?>