<?php 
	include('navbar.php');
	require('connection.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">

		<style type="text/css">
			img{
				height: 10rem;
			}
		</style>
</head>
<body class="bg-secondary">

	<div class="container" >
		<div class="row">

		<?php
		$product_category=$_SESSION['catName'];
			$sql="SELECT * FROM product WHERE product_category='$product_category' ";
		
		$query=$conn->query($sql);

				while($data=mysqli_fetch_assoc($query))
				{
					$product_name=$data['product_name'];	
					$product_category=$data['product_category'];
					$product_code=$data['product_code'];
					$product_image=$data['product_image'];
		?>

	<div class="col-sm-3 m-2">
	<div class="card" style="width: 18rem;">
  <img src="<?php echo "upload/$product_image" ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product_name; ?></h5>
    <p class="card-text">Product Category: <strong><?php echo $product_category; ?></strong></p>
    <p class="card-text">Product Code: <strong><?php echo $product_code; ?></strong></p>
    <a href="#" class="btn btn-primary">Buy Now</a>
    	<!-- <p> <?php echo $_SESSION['catName']; ?></p> -->

  </div>
</div>
</div>

		<?php
				}
			
		?>

	</div>
	</div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>