<?php
	require_once 'session.php';
	require 'connect.php';
	$query = "SELECT * FROM contact";
	$result  = $con->query($query);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		
		<title>contact</title>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/font/material-design-icons/Material-Design-Icons.woff'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/stylee.css">
	</head>
	<body>
		<!-------dashboard menu section start------>
		<div class="container-fluid">
			<div class="dashboard">
				<ul id="slide-out" class="side-nav fixed z-depth-2">
					<li class="center no-padding">
						<div class="indigo darken-2 white-text">
							<div class="row">
								<img  width="50" height="50" src="img/mylogo.png" class="responsive-img" />
								
							</div>
						</div>
					</li>
					<li id="dash_dashboard">
						<a class="waves-effect" href="dashboard.php">
							<b>Dashboard</b>
						</a>
					</li>
					<li id="dash_dashboard">
						<a class="waves-effect" href="category.php">
							<b>Category</b>
						</a>
					</li>
					<li id="dash_dashboard">
						<a class="waves-effect" href="upload.php">
							<b>Upload</b>
						</a>
					</li>
					<li id="dash_dashboard">
						<a class="waves-effect" href="feedback.php">
							<b>Feedback</b>
						</a>
					</li>
					<li id="dash_dashboard">
						<a class="waves-effect" href="contact.php">
							<b>Contact</b>
						</a>
					</li>
					<li id="dash_dashboard">
						<a class="waves-effect" href="contact.php">
							<b>Profile</b>
						</a>
					</li>
				</ul>
				<!-- header section start -->
				<header>
					<nav class="indigo" role="navigation">
						<div class="nav-wrapper">
							<a data-activates="slide-out" class="button-collapse show-on-" href="#!">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</a>
							<ul class="" id="">
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>
					</nav>
				</header>
				<!-- header section ends -->
			</div>
		</div>
		<!-------dashboard menu section end------>
		<!-------Main sectionb start------>
		<main>
			
			<h1>CONTACT</h1>
			<div class="container overflow-auto">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th>sr.no</th>
							<th>Name</th>
							<th>Email id</th>
							<th>Contact</th>
							<th>Message</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$count=0;
							while ($data=$result->fetch_object()) {
								echo "<tr>";
								echo "<td>".++$count."</td>";
								echo "<td>$data->uname</td>";
								echo "<td>$data->uemail</td>";
								echo "<td>$data->ucontact</td>";
								echo "<td>$data->message</td>";
								echo "<td>";
									echo "<a href='deletecontact.php?deleteId=$data->id'>DELETE</a>";
							}
						 ?>
					</tbody>
				</table>
			</div>
			
		</main>
		<!-------Main sectionb Ends------>
		<!-- footer start -->
		<div class="container-fluid">
			<div class="footer">
				<div class="downfooter">
					<div class="row justify-content-center">
						<div class="col text-center">
							<p>Copyright All reserve@webgurukul.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer end -->
		<!-- Optional JavaScript -->
		<script src="js/jquery-3.5.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script>
		<script src="js/script.js"></script>
	</body>
</html>