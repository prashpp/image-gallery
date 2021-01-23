<?php 
	$deleteId=$_GET['deleteId'];
	require "connect.php";
	$query = "DELETE FROM  feedback WHERE id='$deleteId'";
	if($con->query($query)){
		header("location: feedback.php");
	}
	else{
		echo mysqli_error($con);
	}
 ?>