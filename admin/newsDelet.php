
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
  $id=$_GET['id'];
  include_once("conn.php");
  
  $sql="delete from `news` where `newsID`=$id";
  $str=mysql_query($sql,$conn);
  mysql_close($conn);
  
  echo "<script> window.location='newsManage.php' </script>";
  
  
  
?>