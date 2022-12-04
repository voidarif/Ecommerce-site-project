<?php
	session_start();
	$conn = new mysqli('localhost', 'root', '', 'ecommerce');

	if(isset($_POST['submit'])){
		$full_name 		= $_POST['full_name'];
		$email 		= $_POST['email'];
		$password 			= $_POST['password'];
		$conf_password 		= $_POST['conf_password'];
		$gender  = $_POST['gender'];
		
		$emptymsg1 = $emptymsg2 = $emptymsg3 = $emptymsg4 = $emptymsg5 = $pasmatchmsg = '';
		
		
		if(empty($full_name)){
			$emptymsg1 = 'Write Full name';
		}
		if(empty($email)){
			$emptymsg2 = 'Write email';
		}
		if(empty($password)){
			$emptymsg3 = 'Write password';
		}
		if(empty($conf_password)){
			$emptymsg4 = 'Write password Again';
		}
		if(empty($gender)){
			$emptymsg5 = 'Enter Gender';
		}		
		
		if(!empty($full_name) && !empty($email) && !empty($password) && !empty($conf_password) && !empty($gender)){
			if($password !== $conf_password){
				$pasmatchmsg = 'Password does not match!';
			}else{
				$pasmatchmsg='';
				$sql = "INSERT INTO registration(full_name, email, password, gender) 
						VALUES('$full_name', '$email', '$password', '$gender')";
			
				if($conn->query($sql) == TRUE){
					header('location:login.php');
					$_SESSION['signupmsg']='Sign Up Complete. Please Log in now.';
				}else{
					echo 'data not inserted';
				}
			}
		}else{
			$emptymsg = 'Fill up all fields';
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
				<h3 class="text-center">Registration</h3>
			</div>
			<div class="container" style="margin-top:50px">
				<div class="row">
					<div class="col-sm-4">
						
					</div>
					<div class="col-sm-4">
						<div class="container bg-light p-4">
							<form action="" method="POST">
							<div class="mt-2 pb-2">
								<label for="firstname">Full Name:</label>
								<input type="name" name="full_name" class="form-control" placeholder="Your Full Name" value="<?php if(isset($_POST['submit'])){echo $full_name; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg1; }?></span>
							</div>

							<div class="mt-2 pb-2">
								<label for="email">Email:</label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php if(isset($_POST['submit'])){echo $email; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg2; }?></span>
							</div>

							<div class="mt-1 pb-2">
								<label for="password">Password:</label>
								<input type="password" name="password" class="form-control" placeholder="Enter New password" >
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg3.''.$pasmatchmsg; }?></span>
							</div>

							<div class="mt-1 pb-2">
								<label for="password">Confirm Password:</label>
								<input type="password" name="conf_password" class="form-control" placeholder="Enter password Again" >
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg4.''.$pasmatchmsg; }?></span>
							</div>

							<div class="mt-1 pb-2">
								<label for="gender">Gender:</label>
								<input type="text" name="gender" class="form-control" placeholder="Gender" value="<?php if(isset($_POST['submit'])){echo $gender; } ?>">
								<span class="text-danger"><?php if(isset($_POST['submit'])){ echo $emptymsg5; }?></span>
							</div>

							<div class="mt-1 pb-2">
								<button name="submit" class="btn btn-success">Sign In</button>
							</div>

							<div class="mt-1 pb-2">
								Alrady have an account? <a href="login.php" class="text-decoration-none">Login</a>
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