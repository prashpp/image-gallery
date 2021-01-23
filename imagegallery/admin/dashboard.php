<?php
	require_once 'session.php';
	require 'connect.php';
	$imgquery="SELECT * FROM images";
	$contquery = "SELECT * FROM contact";
	$feedquery = "SELECT * FROM feedback";
	$userquery = "SELECT * FROM gallery";
	$imgresult=$con->query($imgquery);
	$contresult=$con->query($contquery);
	$feedresult=$con->query($feedquery);
	$userresult=$con->query($userquery);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		
		<title>dashboard</title>
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
								<img width="50" height="50" src="img/mylogo.png" class="responsive-img" />
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
						<a class="waves-effect" href="contact.html">
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
		<!-------dashboard menu section End------>
		<!-- main section start  -->
		<main>
			<h1>Dashboard</h1>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="progress" data-percentage="74">
							<span class="progress-left">
								<span class="progress-bar"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar"></span>
							</span>
							<div class="progress-value">
								<div>
									<?php
									$count=0;
									while ($data=$imgresult->fetch_object()) {
									$count++;
									}
									?>
									<?php
										echo "<h4>$count%</h4>"
									?>
								</div>
								
							</div>
						</div>
						<div class="text">
							<h2>Images</h2>
						</div>
					</div>
					<div class="col text-center">
						<div class="progress" data-percentage="45">
							<span class="progress-left">
								<span class="progress-bar"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar"></span>
							</span>
							<div class="progress-value">
								<div>
									<?php
									$count=0;
									while ($data=$feedresult->fetch_object()) {
									$count++;
									}
									?>
									<?php
										echo "<h4>$count%</h4>"
									?>
								</div>
							</div>
						</div>
						<div class="text">
							<h2>Feedback</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
						<div class="progress" data-percentage="20">
							<span class="progress-left">
								<span class="progress-bar"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar"></span>
							</span>
							<div class="progress-value">
								<div>
									<?php
											$count=0;
											while ($data=$contresult->fetch_object()) {
												$count++;
											}
									?>
									<?php
										echo "<h4>$count%</h4>"
									?>
								</div>
							</div>
						</div>
						<div class="text">
							<h2>Contacts</h2>
						</div>
					</div>
					<div class="col text-center">
						<div class="progress" data-percentage="30">
							<span class="progress-left">
								<span class="progress-bar"></span>
							</span>
							<span class="progress-right">
								<span class="progress-bar"></span>
							</span>
							<div class="progress-value">
								<div>
									<?php
											$count=0;
											while ($data=$userresult->fetch_object()) {
												$count++;
											}
									?>
									<?php
										echo "<h4>$count%</h4>"
									?>
								</div>
							</div>
						</div>
						<div class="text">
							<h2>Admin ID's</h2>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- main section ends---->
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