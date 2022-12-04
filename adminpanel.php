

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<!-- font awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container bg-light">

		 <!-- topbar -->
		<div class="container-fluid border-bottom border-success">
			<div class="row p-3">

				<div class="col-sm-9">
					<h1>Admin panel</h1>
				</div>

				<div class="col-sm-3">
					<p class="pt-3"><?php 
					session_start();
					echo "Hello <strong>".$_SESSION['adminName']."</strong> ";?><a href="logout.php" class="text-decoration-none btn btn-success py-1 m-0">Log Out</a></p>
				</div>
			</div>
		</div>
		 <!-- end of topbar -->

		 <!-- body -->
		<div class="container-fluid">
			<div class="row ">

				<!-- leftpanel -->
				<div class="col-sm-3 bg-light p-0 m-0">
					<h5 class="bg-primary text-white p-2">Category</h5>
					<ul class="list-group m-2">
						<li class="list-group-item">
							<a href="addCategory.php" class="text-dark text-decoration-none"> Add Category </a>
						</li>
						<li class="list-group-item">
							<a href="categoryList.php" class="text-dark text-decoration-none"> Category list </a>
						</li>
					</ul>

					<h5 class="bg-primary text-white p-2">Product</h5>
					<ul class="list-group m-2">
						<li class="list-group-item">
							<a href="addproduct.php" class="text-dark text-decoration-none"> Add Product </a>
						</li>
						<li class="list-group-item">
							<a href="productlist.php" class="text-dark text-decoration-none"> Product list </a>
						</li>
					</ul>

					<h5 class="bg-primary text-white p-2">Store Product</h5>
					<ul class="list-group m-2">
						<li class="list-group-item">
							<a href="" class="text-dark text-decoration-none"> Add Store Product </a>
						</li>
						<li class="list-group-item">
							<a href="" class="text-dark text-decoration-none">Store Product list </a>
						</li>
					</ul>

					<h5 class="bg-primary text-white p-2">Spend Product</h5>
					<ul class="list-group m-2">
						<li class="list-group-item">
							<a href="" class="text-dark text-decoration-none"> Add Spend Product </a>
						</li>
						<li class="list-group-item">
							<a href="" class="text-dark text-decoration-none">Spend Product list </a>
						</li>
					</ul>

				</div>
				<!-- end of left panel -->

				<!-- right panel -->
				<div class="col-sm-9 border-start border-success">
					<div class="row p-4">

						<div class="col-sm-3">
							<a href="addCategory.php"> <i class="fa-solid fa-folder-plus fa-3x"></i></a>
							<p>Add Category</p>
						</div>

						<div class="col-sm-3">
							<a href="categoryList.php"> <i class="fa-solid fa-folder-open fa-3x"></i></a>
							<p>Category List</p>
						</div>

							<div class="col-sm-3">
							<a href="addproduct.php"> <i class="fa-solid fa-box-open fa-3x"></i></a>
							<p>Add Product</p>
						</div>

						<div class="col-sm-3">
							<a href="productlist.php"> <i class="fa-solid fa-stream fa-3x"></i></a>
							<p>Product List</p>
						</div>
					</div>
					<hr/>

					<div class="row p-4">

						<div class="col-sm-3">
							<a href="#"> <i class="fa-solid fa-trash-restore fa-3x"></i></a>
							<p>Store Product</p>
						</div>

						<div class="col-sm-3">
							<a href="#"> <i class="fa-solid fa-box fa-3x"></i></a>
							<p>Store Product List</p>
						</div>

							<div class="col-sm-3">
							<a href="#"> <i class="fa-solid fa-plus-circle fa-3x"></i></a>
							<p>Spend Product</p>
						</div>

						<div class="col-sm-3">
							<a href="#"> <i class="fa-solid fa-window-restore fa-3x"></i></a>
							<p>Spend Product List</p>
						</div>
					</div>
					<hr/>

					<div class="row p-4">

						<div class="col-sm-3">
							<a href="#"> <i class="fa-solid fa-chart-bar fa-3x"></i></a>
							<p>Report</p>
						</div>

						<div class="col-sm-3">
						</div>

							<div class="col-sm-3">
						</div>

						<div class="col-sm-3">
						</div>
					</div>
					<hr/>

					<div class="row p-4">

						<div class="col-sm-3">
							<a href="signup.php"> <i class="fa-solid fa-user-plus fa-3x"></i></a>
							<p>Add User</p>
						</div>

						<div class="col-sm-3">
							<a href="userlist.php"> <i class="fa-solid fa-users fa-3x"></i></a>
							<p>User List</p>
						</div>

							<div class="col-sm-3">
						</div>

						<div class="col-sm-3">
						</div>
					</div>

				</div>
				<!-- end of right panel -->


			</div>
		</div> 
		<!-- end of body -->


		<div class="container-fluid border-top border-success"> <!-- bottombar -->
				<p class="text-center p-2">Copyright: @arifzn</p>
		</div> <!-- end of bottombar -->

	</div>

	


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
