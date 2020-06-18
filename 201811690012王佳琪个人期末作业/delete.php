<?php
include "shared/conn.php";
?>
<?php
   mysqli_select_db($conn,"self_project"); //连接数据库
   
   mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况
   
   $id=$_GET["id"];
   $sql_delete="DELETE FROM articles WHERE ID ={$id}";
   
   if(mysqli_query($conn,$sql_delete))   
	{  
		echo "<script>alert('successed')</script>";
	}   
	else 
	{  
		echo "<script>alert('failed')</script>";
	}
	
	echo "<script>location='index.php'</script>"; 
   
   
?>