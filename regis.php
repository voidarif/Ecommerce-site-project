<?php

	$emtmsg_fullname='';
	$emtmsg_email='';
	$emtmsg_password='';
	$emtmsg_conf_password='';
	$emtmsg_gender='';

	$conn=new mysqli('localhost','root','','ecommerce');

	if(!$conn){
		echo 'Not connected';
	}

	if(isset($_POST['submit']))
	{
		$fullname=$_POST['full_name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$conf_password=$_POST['confirm_password'];
		$gender=$_POST['gender'];

		if(empty($fullname)){
			$emtmsg_fullname='Fill up this field.';
		}
		if(empty($email)){
			$emtmsg_email='Fill up this field.';
		}
		if(empty($password)){
			$emtmsg_password='Fill up this field.';
		}
		if(empty($conf_password)){
			$emtmsg_conf_password='Fill up this field.';
		}
		if(empty($gender)){
			$emtmsg_gender='Fill up this field.';
		}

	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<form action="registration.php" method="post">

					<div class="mt-2">
						<label class="form-label">Full Name</label>
						<input type="text" class="form-control" name="full_name" value="<?php if(isset($_POST['submit'])){echo $emtmsg_fullname;}?>">

						<?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emtmsg_fullname."</span>"; }  ?>
					</div>

					<div class="mt-2">
						<label class="form-label">Email</label>
						<input type="text" class="form-control" name="email">
						<?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emtmsg_email."</span>"; }  ?>
					</div>

					<div class="mt-2">
						<label class="form-label">Password</label>
						<input type="text" class="form-control" name="password">
						<?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emtmsg_password."</span>"; }  ?>
					</div>

					<div class="mt-2">
						<label class="form-label">Confirm Password</label>
						<input type="text" class="form-control" name="confirm_password">
						<?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emtmsg_conf_password."</span>"; }  ?>
					</div>

					<div class="mt-2">
						<label class="form-label">Gender</label>
						<input type="text" class="form-control" name="gender">
						<?php if(isset($_POST['submit'])){echo "<span class='text-danger'>".$emtmsg_gender."</span>"; }  ?>
					</div>

					<div class="mt-2">
					<button class="btn btn-success" name="submit">Submit</button>
					</div>

				</form>
			</div>
			<div class="col-4"></div>
		</div>
	</div>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>