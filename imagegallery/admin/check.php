<?php
	if (isset($_POST['loginSubmit'])){
		$email = $_POST["email"];
		$password = $_POST["password"];
		require_once 'connect.php';
		$query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
		$result = $con->query($query);
		$rows = mysqli_num_rows($result);
		$data = $result->fetch_object();
		// echo "<pre>";
		// print_r($result);
		if($rows == 1){
			session_start();
			$_SESSION['id'] = session_id();
			$_SESSION['userid'] = $data->userid;
			$_SESSION['name'] = $data->name;
			$_SESSION['email'] = $data->email;
			$_SESSION['mobile'] = $data->mobile;
			header("location: dashboard.php");

		}
		else{
			echo "Invalid Credentials";
		}
	}
?>