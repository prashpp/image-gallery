<?php
	// echo "<pre>";
	// print_r($_POST); 

	if (isset($_POST['regSubmit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobile=$_POST['mobile'];

		require "connect.php";

		$query="INSERT INTO admin VALUES(NULL,'$name','$email','$password','$mobile')";

		if($con->query($query)){
			//echo "<h1> sign Up successfully</h1>";
			header("location: login.php");
		}
		else{
			echo mysqli_error($con);
		}
	}
 ?>