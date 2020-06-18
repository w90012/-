<?php
include "shared/conn.php";
?>

<?php
include "shared/head.php";
?>

<?php

$id=$_GET["id"];

mysqli_select_db($conn,"self_project"); //连接数据库

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

 //选择数据表中的字段
   
$sql = "SELECT * FROM articles WHERE ID={$id}";

mysqli_query($conn,"set names utf8"); //防止出现中文乱码的情况

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$title = $row["title"];

$body = $row["body"];

?>
<div class="container">
   <div class="row">
      <div class="col-md-12">
		<div class="col-md-2">
		</div>

		<div class="col-md-8">
			<form method="POST" action="update.php" > 
				<div class="input-group">
					<span class="input-group-addon">类别</span>
					<input type="text" class="form-control" name="title" value ="<?php echo $title; ?>" >
				</div>					
				<br>
				<div class="input-group">
					<span class="input-group-addon">诗句</span>
					<input type="text" class="form-control" name="body" value ="<?php echo $body; ?>" >
				</div>	
				<br>
				<div class="input-group">
					<input type="hidden"  name="id" value ="<?php echo $id; ?>" >
				</div>						

				<div class="input-group">
					<button class="btn btn-primary" type="submit">更新</button>
				</div>					
			</form>		
		</div>

		<div class="col-md-2">
		</div>		
	  
	  </div>
    
   </div>

</div>		


<?php
include "shared/foot.php";
?>