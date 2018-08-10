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
 <div id="one"></div>
 <div id="big_two">
    <div id="left">
      <div id="left_bg1">
         <p><a href="messageAdd_save.php" target="_self">在线留言</a><br/><a href="messageManage.php" target="_self">留言查看</a><br/><a href="#">回复留言</a><br/><a href="about.php" target="_self">关于我们</a></p> 
      </div>
      <div id="contact_bg1">
       <p>地址：广东省广州市天河区天<br/>
          平架沙太路沙太路<br/>
          电话：020-8796181<br/>
          传真：020-98-87961814<br/>
          邮箱：Lankecms@163.com</p>
      </div>
    </div>
    
    
    
     <div id="right1">
      <div id="right_one">
          <div id="div_1"><h2 style="color:#F00; font:bold 26px 宋体;">留言回复</h2></div>
          <div style="width:70px; height:20px; float:left; margin-top:44px;">MESSAGE</div>
          <div id="div_2">您现在的位置：在线留言 > 留言回复</div>    
          <img src="images/path_line.gif" style="margin:0 auto; width:770px; height:2px;"/>
      </div>
       
      <?
        $id=$_GET['id'];
		
	    ini_set("date.timezone","PRC");
	    include("admin/conn.php");
		$sql="select messageID,title,left(content,10) as content,writer,writeDate from message where messageID='$id'";
		$str=mysql_query($sql,$conn);
		mysql_close($conn);
	    $row=mysql_fetch_array($str);
   
       ?>
       
           
	      <div id="revert_left">
         >>>>>>留言查看
	       <ul>
		   <li>留言标题：<?=$row['title']?></li><br/>
		   <li>您的姓名：<?=$row['writer']?></li><br/>
           <li>留言内容：<?=$row['content']?></li><br/>
		   <li>留言时间：<?=$row['writeDate']?></li>
           </ul>
		   </div>
           
       <div id="revert_center"> 
         >>>>>>回帖查看
               <?
		       $id=$_GET['id'];
               include("admin/conn.php");
		     $sql="select revertID,revert.messageID,left(content,10) as content,writer,writeDate from revert where messageID='$id' order by writeDate desc ";
		         $str=mysql_query($sql,$conn);
	             mysql_close($conn);
				 $num=mysql_num_rows($str);
				  if($num==0){//不存在
					  echo "暂时没有回帖！" ;
				   }else{//存在
	             while($row=mysql_fetch_array($num)){
          
              ?>
            <div class="p">
           
               <p>您的姓名：<?=$row['writer']?></p>
               <p>回复内容：<?=$row['content']?></p>
               <p>回复时间：<?=$row['writeDate']?></p>
              
               <?
                     } }
               ?>               
             </div>      

           
           
     <form action="revertAdd_save.php?id=<?=$_GET['id']?>" method="post">
		  
           <div id="revert_right">
           >>>>>>回帖增加
            <ul>
		   <li>您的姓名：<input name="writer" type="text" size="30" /></li><br/>
		   <li>回复时间：<input name="writeDate" type="text" size="30" value="<?=date('Y-m-d H:i:s')?>"/></li><br/>
		   <li>回复内容：<textarea name="content" cols="25" rows="7"></textarea></li><br/>
		   <li>
		   <input name="" type="submit" value="提交回复"/>&nbsp;&nbsp;&nbsp;&nbsp;
		   <input name="" type="reset" value="重置" />
		   </li>
		   </ul>
        </div>     
               
	 </form> 
       
     
     </div>
     
       
  </div>  
    
    
    
    
    
    
    
  
</body>
   <?
      include("foot_son.html");
    ?>

</html>