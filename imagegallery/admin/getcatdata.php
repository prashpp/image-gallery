<?php 
	if (isset($_POST['regSubmit'])) {
		$catname=$_POST['category'];
		require_once "connect.php";

		$query="INSERT INTO category VALUES(NULL,'$catname')";
		mkdir("uploads/$catname");
		if($con->query($query)){
			header("location:category.php");
		}
		else{
			echo mysqli_error($con);
		}
	}

 ?>