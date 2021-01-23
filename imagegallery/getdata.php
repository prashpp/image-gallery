<?php 
	if (isset($_POST['regSubmit'])) {
		$uname=$_POST['name'];
		$uemail=$_POST['email'];
		$ucontact=$_POST['contact'];
		$message=$_POST['message'];

		require "connect.php";

		$query="INSERT INTO contact VALUES(NULL,'$uname','$uemail','$ucontact','$message')";

		if($con->query($query)){
			header("location: contact.php");
		}
		else{
			echo mysqli_error();
		}
	}
 ?>