<?php 
	require('connection.php');

 ?>

	<?php 

		if(isset($_GET['id']))
		{
			$getid=$_GET['id'];
		

		$sql="DELETE FROM category WHERE category_id= $getid";

			 if($conn->query($sql)==TRUE)
			 {
			 	echo "Delete successfully";
			 	header('location:categoryList.php');
			 }else
			 {
			 	echo "Not Deleted";
			 }

		}

	 ?>