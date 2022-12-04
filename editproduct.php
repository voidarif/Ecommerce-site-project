<?php
	require('connection.php');
  ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Product</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 

	if (isset($_GET['id'])) {

		$getid=$_GET['id'];

		$sql="SELECT * FROM product WHERE product_id= $getid";

		$query=$conn->query($sql);
	
		$data=mysqli_fetch_assoc($query);

			$product_id= $data['product_id'];	
			$product_name= $data['product_name'];
			$product_category= $data['product_category'];
			$product_code= $data['product_code'];
			$product_entrydate= $data['product_entrydate'];

	}
		if(isset($_GET['product_name']))
		{
			$new_product_name	=$_GET['product_name'];
			$new_product_category	=$_GET['product_category'];
			$new_product_code	=$_GET['product_code'];
			$new_product_entrydate	=$_GET['product_entrydate'];
			$new_product_id		=$_GET['product_id'];


			$newsql=	"UPDATE product SET
			 product_name='$new_product_name',
			 product_category='$new_product_category',
			 product_code='$new_product_code',
			 product_entrydate='$new_product_entrydate'
			 WHERE  product_id= $new_product_id";



			 if($conn->query($newsql)==TRUE)
			 {
			 	echo "Update successfully";
			 }else
			 {
			 	echo "Not updated";
			 }
		}

	 ?>

	 <?php 
	 	$sql="SELECT * FROM category";
	 	$query= $conn->query($sql);
	  ?>


	<form action="editproduct.php" method="GET">
		<div class="container">
			<div class="container-fluid">
				<h2 class="text-center">Edit Product</h2>

					<div class="col-sm-4">
						<div class="mt-2 pb-2">
							<label for="product_name">Product Name:</label>
							<input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">
					</div>

					<div class="mt-2 pb-2">
							<label for="product_category">Product Category:</label>
							<!-- <input type="text" name="product_category" class="form-control" placeholder="Enter Product Category"> -->

							<select name="product_category" class="form-control">
								<?php 

									while($data=mysqli_fetch_array($query)){
									$category_id=$data['category_id'];
									$category_name=$data['category_name'];
									
								 ?>
				<option value='<?php echo $category_id; ?>' <?php if($category_id==$product_category){ echo 'Selected';} ?> >
										<?php echo $category_name;?>
										</option>
								<?php } ?>
							</select>
					</div>

					<div class="mt-2 pb-2">
							<label for="product_code">Product Code:</label>
							<input type="text" name="product_code" class="form-control" value="<?php echo $product_code; ?>">
					</div>

						<div class="mt-2 pb-2">
							<label for="product_entrydate">Entry date:</label>
							<input type="date" name="product_entrydate" class="form-control" value="<?php echo $product_entrydate; ?>">
					</div>

					<input type="text" name="product_id" class="form-control" value="<?php echo $product_id ?>" hidden>

						<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Edit Product</button>
							</div>
						</div>
			</div>
		</div>
	</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>