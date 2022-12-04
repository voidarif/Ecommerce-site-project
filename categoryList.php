<?php 
	require('connection.php')

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List of Category</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 
		$sql="SELECT * FROM category";

		$query=$conn->query($sql);

		echo "<table border='2'>
		 <tr> 
		 <th>Category</th>
		  <th>Date</th>
		  <th>Image</th>
		   <th>Action</th>
		    </tr>";

		while($data=mysqli_fetch_assoc($query))
		{
			$category_id=$data['category_id'];	
			$category_name=$data['category_name'];
			$category_entrydate=$data['category_entrydate'];
			$category_image=$data['category_image'];

			echo "<tr>
			<td>$category_name</td>
			<td>$category_entrydate</td>
			<td>$category_image</td>
			<td><a href='editcategory.php?id=$category_id'>Edit</a><td> 
			<td><a href='deletecategory.php?id=$category_id'>Delete</a><td> 
			</tr>";
		}

		echo "</table>";
		

	 ?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>