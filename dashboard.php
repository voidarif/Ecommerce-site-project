<!-- <?php 
	session_start();
	echo '<h1>Welcome '.$_SESSION['full_name'].'</h1>';
?>
<p><a href="logout.php">Log Out</a></p> -->

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
			$sql="SELECT * FROM category";
		
		$query=$conn->query($sql);

				while($data=mysqli_fetch_assoc($query))
				{
					$category_id=$data['category_id'];	
					$category_name=$data['category_name'];
					$category_image=$data['category_image'];
					$_SESSION['catName']=$category_name;
		?>

	<div class="col-sm-3 m-2">
	<div class="card" style="width: 18rem;">
  <img src="<?php echo "upload/$category_image" ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $category_name; ?></h5>
    <p class="card-text">Some quick example text.</p>
    <a href="products.php" class="btn btn-primary">Go <?php echo $category_name; ?></a>
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