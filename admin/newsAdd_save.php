
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?
   $title=$_POST["title"];
   $content=$_POST["content"];
   $writeDate=$_POST["writeDate"];
   
   include_once("conn.php");
   $sql="insert into `news`(`title`,`content`,`writeDate`) values('$title','$content','$writeDate') order by writeDate desc";
   mysql_query($sql,$conn);
   mysql_close($conn);
   echo "<script> alert('增加成功！');
              window.location='newsAdd.php';
		</script>";
 ?>