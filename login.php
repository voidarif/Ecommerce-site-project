<?php
	session_start();
	
	$conn = new mysqli('localhost','root','','ecommerce');
	
	$unsuccessfulmsg = '';

	if(isset($_POST['submit'])){
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
		//$passwordmd5 	= md5($users_password);
		
		if(empty($email)){
			$emailmsg = 'Enter an email.';
		}else{
			$emailmsg = '';
		}
		
		if(empty($password)){
			$passmsg = 'Enter your password.';
		}else{
			$passmsg = '';
		}
		
		if(!empty($email) && !empty($password)){
			$sql = "SELECT * FROM registration WHERE email='$email' AND password = '$password'";
			$query = $conn->query($sql);
			
			if($query->num_rows > 0){
				$row = $query->fetch_assoc();
				$full_name = $row['full_name'];
				//$users_last_name = $row['users_last_name'];
				
				$_SESSION['full_name'] = $full_name;
				//$_SESSION['users_first_name'] = $users_first_name;
				header('location:dashboard.php');
			}else{
				$unsuccessfulmsg = 'Wrong email or Password!';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container">
			<div class="container" style="margin-top:50px">
				<h3 class="text-center">Login</h3>
				<p class="text-center text-success">
				<?php if(!empty($_SESSION['signupmsg'])){ echo $_SESSION['signupmsg']; } ?></p>
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
								<label for="email">Email:</label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php if(isset($_POST['submit'])){echo $email; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emailmsg; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<label for="password">Password:</label>
								<input type="password" name="password" class="form-control" placeholder="Enter your password">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $passmsg; }?></span>
							</div>
							<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Login</button>
							</div>
							<div class="mt-1 pb-2">
								Not an account? <a href="signup.php" class="text-decoration-none">Sign Up</a>
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