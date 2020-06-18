<?php
include "shared/conn.php";
?>

<?php
include "shared/head.php";
?>
<div class="container">
   <div class="row">
      <div class="col-md-12">
		<div class="col-md-2">
		</div>

		<div class="col-md-8">
		
		<?php
		
		$id = $_POST["id"];
		$title = $_POST["title"];  
		$body = $_POST["body"];  
		
		mysqli_select_db($conn,"self_project"); //连接数据库
		
		mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况
			
		
		$sql = "UPDATE `articles` SET `title` = '{$title}', `body` = '{$body}' WHERE `ID` = {$id}";
					
		$update = mysqli_query($conn,$sql);  
		
		if(!$update)  
			{  
				echo "<div class='alert alert-success'>无法更新单元".mysqli_error($conn)."</div>";  
			}  
			else  
			{  
				echo "<div class='alert alert-success'>单元更新成功！</div>";	
				echo "<a type='btn' class='btn btn-primary'href='index.php'>查看数据</a>";
			}  
		
		mysqli_close($conn);  
		?>
		</div>

		<div class="col-md-2">
		</div>		
	  
	  </div>
    
   </div>

</div>
<?php
include "shared/foot.php";
?>