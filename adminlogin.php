<?php
	session_start();
	
	$conn = new mysqli('localhost','root','','ecommerce');
	
	$unsuccessfulmsg = '';

	if(isset($_POST['submit'])){
		$email 			= $_POST['adminEmail'];
		$password 		= $_POST['adminPassword'];
		//$passwordmd5 	= md5($users_password);
		
		if(empty($email)){
			$emailmsg = 'Enter Admin email.';
		}else{
			$emailmsg = '';
		}
		
		if(empty($password)){
			$passmsg = 'Enter Admin password.';
		}else{
			$passmsg = '';
		}
		
		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM admin WHERE adminEmail='$email' AND adminPassword = '$password'";
			$query = $conn->query($sql);
			
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				$adminName = $row['adminName'];
				//$users_last_name = $row['users_last_name'];
				
				$_SESSION['adminName'] = $adminName;
				//$_SESSION['users_first_name'] = $users_first_name;
				header('location:adminpanel.php');
			}else{
				$unsuccessfulmsg = 'Wrong Admin email or Password!';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container">
			<div class="container" style="margin-top:50px">
				<h3 class="text-center">Admin Login</h3>
				<p class="text-center text-success">
			</div>
			<div class="container" style="margin-top:50px">
				<div class="row">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-4">
						<div class="container bg-light p-4">
							<p class="text-danger"><?php echo $unsuccessfulmsg ?> </p>
							<form action="" method="POST">
							<div class="mt-2 pb-2">
								<label for="email">Admin Email:</label>
								<input type="email" name="adminEmail" class="form-control" placeholder="Enter Admin email" value="<?php if(isset($_POST['submit'])){echo $email; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emailmsg; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<label for="password">Admin Password:</label>
								<input type="password" name="adminPassword" class="form-control" placeholder="Enter Admin password">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Login</button>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						
					</div>
				</div>
			</div>
		</div>

		<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</body>
</html>