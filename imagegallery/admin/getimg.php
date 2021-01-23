<?php 
	if (isset($_POST['imageSubmit'])) {
		$catid=$_POST['category'];
		$imgname=$_FILES['image']['name'];
		$img_tmp_name=$_FILES['image']['tmp_name'];
		
		require_once 'connect.php';
		$catQuery="SELECT * FROM CATEGORY WHERE catid='$catid'";
		$result=$con->query($catQuery);
		$data=$result->fetch_object();
		$query="INSERT INTO images VALUES(NULL,'$catid','$imgname')";
		$destination ="uploads/$data->catname/".$imgname;
		if(move_uploaded_file($img_tmp_name, $destination)){
			if ($con->query($query)) {
				header("location:upload.php");
			}
			else{
				echo "Image does not inserted and but upload";
			}

		}
		else{
			echo "Image does not inserted and upload";
		}
	}
 ?>