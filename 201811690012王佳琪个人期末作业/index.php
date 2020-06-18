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
		mysqli_select_db($conn,"self_project"); //连接数据库
		
		mysqli_query($conn,"set names utf8"); 
		
		$sql = "SELECT * FROM articles";
		
		mysqli_query($conn,"set names utf8"); 
		
		$result = mysqli_query($conn,$sql);
		
		echo "<table class='table table-bordered table-striped'>
				<thead>
				<td width='30%'>类别</td>
				<td width='40%'>诗句</td>
				<td width='20%'>操作</td>
			  </thead>";
					
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				echo "<tr>
						<td>{$row["title"]}</td>
						<td>{$row["body"]}</td>
						<td>
							<div class='btn-group'>
								<a type='button' class='btn btn-primary' href='edit.php?id={$row["id"]}' target='_blank'>编辑</a>
								<a type='button' class='btn btn-danger' href='delete.php?id={$row["id"]}'>删除</a>
							</div>
						</td>
					  </tr>";
			} 
		
		echo "</table>";
		
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