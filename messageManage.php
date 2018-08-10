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
         <p><a href="#">在线留言</a><br/><a href="#">留言查看</a><br/><a href="#">回复留言</a><br/><a href="#">关于我们</a></p> 
      </div>
      <div id="contact_bg1">
       <p>地址：广东省广州市天河区天<br/>
          平架沙太路沙太路<br/>
          电话：020-8796181<br/>
          传真：020-98-87961814<br/>
          邮箱：Lankecms@163.com</p>
      </div>
    </div>
   
    <div id="right"> 
    <div id="right_one">
       <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">留言回复</h2></div>
         <div style="width:70px; height:20px; float:left; margin-top:44px;">MESSAGE</div>
         <div id="div_2">您现在的位置：在线留言 > 留言回复</div>    
      <img src="images/path_line.gif" style="margin:0 auto; width:770px; height:2px;"/>
    </div>
    <div id="right1_two">  
      <? 
			          include("admin/conn.php");
					  $sql="select messageID,count,left(title,6) as title,left(content,10) as content,writer,writeDate from message order by writeDate desc ";
					  $result=mysql_query($sql);
					  $num=mysql_num_rows($result);
					  //分页
					 $pagecout=ceil($num/8);//计算总页数
					 
					 if(empty($_GET['page'])==true){
						 $page=1;
						 }else{
						  $page=$_GET['page'];
						}
					 $a=($page-1)*8;//计算每页开始记录号
					 $sqlpage=$sql." limit $a,8"; 
					 $resultpage=mysql_query($sqlpage);  
					 $n=mysql_num_rows($resultpage);
					 ?>
         
	  <table width="700" height="76" cellspacing="1" >
               <tr>
                  <td width="162" align="center">回帖人数</td>
                  <td width="162" height="35" align="center">留言标题</td>
                  <td width="162" align="center">您的姓名</td>
                  <td width="134" align="center">留言时间</td>
                  <td width="152" align="center">留言内容</td>
                  <td width="81" align="center"></td>
               </tr>
                      <?
		              for($a=1;$a<=$n;$a++){
		                    	$row=mysql_fetch_array($resultpage);				
	              ?>                                                     
               <tr>
               
                   <td height="33" align="center"><?=$row['count']?></td>
                   <td align="center"><?=$row['title']?></td>
                   <td align="center"><?=$row['writer']?></td>
                   <td align="center"><?=$row['writeDate']?></td>
                   <td align="center"><?=$row['content']?></td>
                   <td align="center"><a href="revertAdd.php?id=<?=$row['messageID']?>">回复留言</a></td>
                        
               </tr>
                    <?
					  }
					?>    
              </table>
    </div>
    
    
    
     <div id="page">
  
   	<?
         for($i=1;$i<=$pagecout;$i++){
			  echo "<a href='messageManage.php?page=$i'>$i</a>"."     ";
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