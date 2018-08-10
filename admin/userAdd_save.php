
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?
   $userName=$_POST["userName"];
   $password=$_POST["password"];
   $pass=$_POST["pass"];
   
   include_once("conn.php");
   $sql="insert into users(userName,password,status) values('$userName','$password',1) order by userID desc";
   mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('增加成功！');
              window.location='userAdd.php';
		</script>";
 ?>