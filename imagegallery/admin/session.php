<?php 
	session_start();
	$id=session_id();
		if($id != $_SESSION['id']){
			session_destroy();
			header("location:login.php");
		}
 ?>