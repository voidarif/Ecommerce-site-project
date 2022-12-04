<?php
	require('connection.php');
  ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Category</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 

	if (isset($_POST['submit'])) {
		$category_name=$_POST['category_name'];
		$category_entrydate=$_POST['category_entrydate'];

    	$imagename= $_FILES['category_image']['name'];
    	$tempname= $_FILES['category_image']['tmp_name'];
    	$folder='upload/'.$imagename;


		$sql= "INSERT INTO category (category_name,category_entrydate,category_image)
		VALUES('$category_name','$category_entrydate','$imagename')";

		if($conn->query($sql)==true){
			//echo 'Data inserted Successfully';
			move_uploaded_file($tempname, $folder);
			header('location:categoryList.php');
		}else
		{
			echo 'Data not inserted';
		}
	}


	 ?>

	<form action="addCategory.php" method="POST" enctype="multipart/form-data">
		<div class="container">
			<div class="container-fluid">
				<h2 class="text-center">Add Category</h2>

					<div class="col-sm-4">
						<div class="mt-2 pb-2">
							<label for="category_name">Category Name:</label>
							<input type="text" name="category_name" class="form-control" placeholder="Enter category name">
					</div>
						<div class="mt-2 pb-2">
							<label for="category_entrydate">Entry date:</label>
							<input type="date" name="category_entrydate" class="form-control" placeholder="Enter category name">
					</div>

					<div class="mt-2 pb-2">
							<label for="category_image">Category Image</label>
							<input type="file" name="category_image" class="form-control">
					</div>

					</div>
						

						<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Add Category</button>
							</div>
						</div>
			</div>
		</div>
	</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>