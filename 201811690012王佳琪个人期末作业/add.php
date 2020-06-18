<?php
include "shared/conn.php";
?>
<?php

$title = $_POST["title"];  
$body = $_POST["body"];  

mysqli_select_db($conn,"self_project"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况
      
  
$sql = "INSERT INTO articles(title,body) VALUES('$title','$body')";  
               
$insert = mysqli_query($conn,$sql);  
  
if(!$insert)  
    {  
        echo "无法插入翻译单元: ".mysqli_error($conn);  
    }  
    else  
    {  
        echo "翻译单元插入成功！"."<br>"; 
		echo "<a href='index.php'>查看数据</a>";
    }  

mysqli_close($conn);  
?>