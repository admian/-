
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?
   $id=$_GET['id'];
   $content=$_POST["content"];
   $writer=$_POST["writer"];
   $writeDate=$_POST["writeDate"];
   
   include("admin/conn.php");
   $sql="insert into revert(messageID,content,writer,writeDate) values('$id','$content','$writer','$writeDate')";
   mysql_query($sql,$conn);
   echo "<script> alert('增加成功！');
              window.location='revertAdd.php?id=$id';
		</script>";
   $sql2="update message set count=count+1 where messageID=$id";
   mysql_query($sql2,$conn);
   mysql_close($conn);	
		
 ?>