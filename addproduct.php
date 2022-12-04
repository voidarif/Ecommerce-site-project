<?php
	require('connection.php');
  ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 

	if (isset($_POST['submit'])) {
		// code...
	
	if (isset($_POST['product_name'])) {

		$product_name =$_POST['product_name'];
		$product_category =$_POST['product_category'];
		$product_code =$_POST['product_code'];
		$product_entrydate =$_POST['product_entrydate'];
		//$product_image =$_GET['product_image'];
		
		$imagename= $_FILES['product_image']['name'];
    	$tempname= $_FILES['product_image']['tmp_name'];
    	$folder='upload/'.$imagename;

		$sql= "INSERT INTO product (product_name,product_category,product_code,product_entrydate,product_image)
		VALUES('$product_name','$product_category','$product_code','$product_entrydate','$imagename')";


		if($conn->query($sql)==true){
			//echo 'Product Data inserted Successfully';
			move_uploaded_file($tempname, $folder);
			header('location:productlist.php');
		}else
		{
			echo 'Product Data not inserted';
		}
	}
	}

	 ?>

	 <?php 
	 	$sql="SELECT * FROM category";
	 	$query= $conn->query($sql);
	  ?>


	<form action="addproduct.php" method="POST" enctype="multipart/form-data">
		<div class="container">
			<div class="container-fluid">
				<h2 class="text-center">Add Product</h2>

					<div class="col-sm-4">
						<div class="mt-2 pb-2">
							<label for="product_name">Product Name:</label>
							<input type="text" name="product_name" class="form-control" placeholder="Enter Product name">
					</div>

					<div class="mt-2 pb-2">
							<label for="product_category">Product Category:</label>
							<!-- <input type="text" name="product_category" class="form-control" placeholder="Enter Product Category"> -->

							<select name="product_category" class="form-control">
								<?php 

									while($data=mysqli_fetch_array($query)){
									$category_id=$data['category_id'];
									$category_name=$data['category_name'];

									echo "<option name='$category_id'>$category_name</option>";
								}
								 ?>
							</select>
					</div>

					<div class="mt-2 pb-2">
							<label for="product_code">Product Code:</label>
							<input type="text" name="product_code" class="form-control" placeholder="Enter Product Code">
					</div>

						<div class="mt-2 pb-2">
							<label for="product_entrydate">Entry date:</label>
							<input type="date" name="product_entrydate" class="form-control">
					</div>

					<div class="mt-2 pb-2">
							<label for="product_image">Category Image</label>
							<input type="file" name="product_image" class="form-control">
					</div>

					<!-- <div class="mt-2 pb-2">
							<label for="product_image">Product Image:</label>
							<input type="file" name="product_image" class="form-control">
					</div> -->

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