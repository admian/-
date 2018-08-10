
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $id=$_POST['id'];
	
   $userName=$_POST['userName'];
   $password=$_POST['password'];
   $status=$_POST['status'];
   
    include_once("conn.php");
   $sql="update users set userName='$userName',password='$password',status='$status'
           where userID= $id";

   $str=mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('编辑成功！');
		window.location='userManage.php';</script>"
?>