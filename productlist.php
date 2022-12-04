<?php 
	require('connection.php')

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of Product</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 
		$sql="SELECT * FROM product";

		$query=$conn->query($sql);

		echo "<table border='1'>
		 <tr> 
		 <th>Product ID</th>
		  <th>Product Name</th>
		  <th>Product Category</th>
		  <th>Product Code</th>
		  <th>Product Entry date</th>
		  <th>Product Image</th>
		   <th>Action</th>
		    </tr>";

		while($data=mysqli_fetch_assoc($query))
		{
			$product_id=$data['product_id'];	
			$product_name=$data['product_name'];
			$product_category=$data['product_category'];
			$product_code=$data['product_code'];
			$product_entrydate=$data['product_entrydate'];
			$product_image=$data['product_image'];

			echo "<tr>
			<td>$product_id</td>
			<td>$product_name</td>
			<td>$product_category</td>
			<td>$product_code</td>
			<td>$product_entrydate</td>
			<td>$product_image</td>
			<td><a href='editproduct.php?id=$product_id'>Edit</a></td> 
			<td><a href='deleteproduct.php?id=$product_id'>Delete</a></td> 
			</tr>";
		}

		echo "</table>";
		

	 ?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>