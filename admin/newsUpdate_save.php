
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $id=$_POST['id'];
	
   $title=$_POST['title'];
   $content=$_POST['content'];
   $writeDate=$_POST["writeDate"];
   
    include_once("conn.php");
   $sql="update `news` set `title`='$title',`content`='$content',`writeDate`='$writeDate'
where `newsID`= $id";

   $str=mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('编辑成功！');
		window.location='newsManage.php';</script>"
?>