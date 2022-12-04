<?php 
	require('connection.php');

 ?>

	<?php 

		if(isset($_GET['id']))
		{
			$getid=$_GET['id'];
		

		$sql="DELETE FROM product WHERE product_id= $getid";

			 if($conn->query($sql)==TRUE)
			 {
			 	echo "Delete successfully";
			 	header('location:productlist.php');
			 }else
			 {
			 	echo "Not Deleted";
			 }

		}

	 ?>