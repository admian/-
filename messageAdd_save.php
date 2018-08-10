
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?
   $title=$_POST["title"];
   $content=$_POST["content"];
   $writer=$_POST["writer"];
   $writeDate=$_POST["writeDate"];
   
   include("admin/conn.php");
   $sql="insert into `message`(`title`,`content`,`writeDate`,`writer`) values('$title','$content','$writer','$writeDate')";
   mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('增加成功！');
              window.location='messageAdd.php';
		</script>";
 ?>