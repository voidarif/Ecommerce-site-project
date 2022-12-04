<?php 
	require('connection.php')

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User List</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

	<?php 
		$sql="SELECT * FROM registration";

		$query=$conn->query($sql);

		echo "<table border='2'>
		 <tr> 
		 <th>Full Name </th>
		  <th>Email</th>
		   <th>Password</th>
		   <th>Gender</th>
		    </tr>";

		while($data=mysqli_fetch_assoc($query))
		{
			$user_id=$data['id'];	
			$full_name=$data['full_name'];
			$email=$data['email'];
			$password=$data['password'];
			$gender=$data['gender'];

			echo "<tr>
			<td>$full_name</td>
			<td>$email</td>
			<td>$password</td>
			<td>$gender</td>
			</tr>";
		}

		echo "</table>";
		

	 ?>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>