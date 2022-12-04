<?php 
	require('connection.php');

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Category</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 

		if(isset($_GET['id']))
		{
			$getid=$_GET['id'];
		

		$sql="SELECT * FROM category WHERE category_id= $getid";

		$query=$conn->query($sql);
	
		$data=mysqli_fetch_assoc($query);

			$category_id= $data['category_id'];	
			$category_name= $data['category_name'];
			$category_entrydate= $data['category_entrydate'];

		}


		if(isset($_GET['category_name']))
		{	
			$new_category_name= $_GET['category_name'];
			$new_category_entrydate= $_GET['category_entrydate'];
			$new_category_id= $_GET['category_id'];

		$newsql=	"UPDATE category SET
			 category_name='$new_category_name',
			 category_entrydate='$new_category_entrydate'
			 WHERE  category_id= $new_category_id";

			 if($conn->query($newsql)==TRUE)
			 {
			 	echo "Update successfully";
			 }else
			 {
			 	echo "Not updated";
			 }

		}

	 ?>

	<form action="editcategory.php" method="GET">
		<div class="container">
			 <div class="container-fluid"> 
				<h2 class="text-center">Edit Category</h2>

					<div class="col-sm-4">
						<div class="mt-2 pb-2">
							<label for="category_name">Category Name:</label>
							<input type="text" name="category_name" class="form-control" value="<?php echo $category_name;?>">
					</div>
						<div class="mt-2 pb-2">
							<label for="category_entrydate">Entry date:</label>
							<input type="date" name="category_entrydate" class="form-control" value="<?php echo $category_entrydate;?>" >
					</div>

					<input type="text" name="category_id" class="form-control" value="<?php echo $category_id;?>" hidden>

						<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Update</button>
							</div>
						</div>
			</div>
		</div>
	</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>