
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?
   $serialNumber=$_POST["serialNumber"];
   $name=$_POST["name"];
   $brand=$_POST["brand"];
   $model=$_POST["model"];
   $price=$_POST["price"];
   $prcture=$_POST["prcture"];
   $description=$_POST["description"];
   
   include_once("conn.php");
   $sql="insert into `product`(`serialNumber`,`name`,`brand`,`model`,`price`,`prcture`,`description`)      
                       values('$serialNumber','$name','$brand','$model','$price','$prcture','$description') order by productID desc";
   mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('增加成功！');
              window.location='productAdd.php';
		</script>";
 ?>