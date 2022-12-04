<!-- <?php 
	session_start();
	echo '<h1>Welcome '.$_SESSION['full_name'].'</h1>';
?>
<p><a href="logout.php">Log Out</a></p> -->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="style.css">

		<style type="text/css">
			#clock
			{
				color: gray;
			}
			
		</style>
</head>
<body id="navpanel">

<div class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="dashboard.php" class="navbar-brand">Ecommerce</a>

	<ul class="navbar-nav col-sm-8">

		<li class="navbar-item">
			<a href="dashboard.php" class="nav-link">Home</a>
		</li>

		<li class="navbar-item">
			<a href="category.php" class="nav-link">Category</a>
		</li>

		<li class="navbar-item">
			<a href="#" class="nav-link">About Us</a>
		</li>	

		<!-- <li class="navbar-item btn btn-success p-0 m-0 ">
			<a href="" class="nav-link text-white"><?php echo 'Welcome '.$_SESSION['full_name'].''; ?></a>
		</li> -->

			<!-- login section added -->
		

		<!-- <li class="navbar-item btn btn-danger p-0 m-0">
			<a href="logout.php" class="nav-link">Logout</a>
		</li> -->
		<li class="navbar-item">
			<h3 id="clock"></h3>
		</li>

	</ul>

	<li class="navbar-item btn btn-success p-0 m-0 col-sm-2" id="login">
			<!-- <a href="" class="nav-link text-white"> --><?php 
			if(isset($_SESSION['full_name'])!=null)
			{
				echo 'Welcome <strong>'.$_SESSION['full_name'].'</strong>';

				echo '<li class="navbar-item btn btn-danger p-0 m-0">
			<a href="logout.php" class="nav-link text-white">Logout</a>
		</li>';
			}else{
				echo '<a href="login.php" class="nav-link text-white">Login</a>';
			}

			 ?><!-- </a> -->
		</li>
</nav>
</div>


	<script>
			function showClock() {
				let ampm="AM";
  				const today = new Date();
  				let h = today.getHours();
  				let m = today.getMinutes();
  				let s = today.getSeconds();
 				 m = checkTime(m);
  				s = checkTime(s);


  				if(h>12)
  				{
  					h=h-12;
  					ampm="PM";
  				}
  				if(h==0)
  				{
  					h="12";
  				}

  			document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s+" "+ampm;
  			setTimeout(showClock, 1000);
			}	

		function checkTime(i) {
  			if (i < 10) {i = "0" + i};
  				return i;
		}			
	showClock();
	</script>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>