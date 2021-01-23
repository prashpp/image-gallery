<?php 
	if (isset($_POST['regSubmit'])) {
		$uname=$_POST['name'];
		$uemail=$_POST['email'];
		$ucontact=$_POST['contact'];
		$feedback=$_POST['feedback'];

		require "connect.php";

		$query="INSERT INTO feedback VALUES(NULL,'$uname','$uemail','$ucontact','$feedback')";

		if($con->query($query)){
			header("location: feedback.php");
		}
		else{
			echo mysqli_error();
		}
	}
 ?>