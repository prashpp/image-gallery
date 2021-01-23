<?php 
	$deleteId=$_GET['deleteId'];
	require "connect.php";
	$query = "DELETE FROM  contact WHERE id='$deleteId'";
	if($con->query($query)){
		header("location: contact.php");
	}
	else{
		echo mysqli_error($con);
	}
 ?>