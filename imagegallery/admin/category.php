<?php 
	require_once 'session.php';
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
		<div class="container-fluid">
			<div class="dashboard">
				<ul id="slide-out" class="side-nav fixed z-depth-2">
					<li class="center no-padding">
						<div class="indigo darken-2 white-text">
							<div class="row">
								<img style="margin-top: 5%;" width="50" height="50" src="../img/mylogo.png" class="responsive-img" />

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
						<a class="waves-effect" href="">
							<b>Profile</b>
						</a>
					</li>
				</ul>
				<header>
					<nav class="indigo" role="navigation">
						<div class="nav-wrapper">
							<a data-activates="slide-out" class="button-collapse show-on-" href="#!">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</a>
							<ul>								
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</div>
					</nav>
				</header>
			</div>
		</div>
		<main>
			<h1>Upload Images</h1>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-12 col-md-5 text-center">
								<form method="post" action="getcatdata.php">
									<div class="form-row justify-content-center">
										<div class="col">
											<div class="input-file-container">
												<label for="">Enter Category</label><br><br>
												<input type="text" name="category">
												
											</div>
											
										</div>
									</div>
									<input class="btn btn-dark text-light" type="Submit" name="regSubmit">
									<!--  
									<a class="btn btn-dark text-light" href="view.php">View</a> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
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
		<script  src="js/script.js"></script>
		<script>
			document.querySelector("html").classList.add('js');
		var fileInput  = document.querySelector( ".input-file" ),
		button     = document.querySelector( ".input-file-trigger" ),
		the_return = document.querySelector(".file-return");
		
		button.addEventListener( "keydown", function( event ) {
		if ( event.keyCode == 13 || event.keyCode == 32 ) {
		fileInput.focus();
		}
		});
		button.addEventListener( "click", function( event ) {
		fileInput.focus();
		return false;
		});
		fileInput.addEventListener( "change", function( event ) {
		the_return.innerHTML = this.value;
		});
		</script>
		
	</body>
</html>