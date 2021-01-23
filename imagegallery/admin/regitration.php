<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		
		<title>signupform</title>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/stylee.css">
	</head>
	<body>
		<!-- header section start -->
		<div class="container-fluid bg-dark">
			<div class="logo">
				<div class="container">
					<div class="row text-center">
						<div class="col text-center py-2">
							<img src="img/mylogo.png" alt="logo">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header section end -->
		<div class="container-fluid">
			<div class="background">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="box">
								<h2>SIGN UP</h2>
								<!-- ---form section satrt-- -->
								<form method="post" action="getdata.php">
									<div class="inputBox">
										<input type="text" name="name" required onkeyup="this.setAttribute('value', this.value);" value="">
										<label>Name</label>
									</div>
									<div class="inputBox">
										<input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
										<label>Email</label>
									</div>
									<div class="inputBox">
										<input type="password" name="password" required value=""
										onkeyup="this.setAttribute('value', this.value);">
										<label>Password</label>
									</div>
									<div class="inputBox">
										<input type="password" name="cpassword" required value=""
										onkeyup="this.setAttribute('value', this.value);">
										<label>Confirm Password</label>
									</div>
									<div class="inputBox">
										<input type="text" name="mobile" required onkeyup="this.setAttribute('value', this.value);" value="">
										<label>Mobile Number</label>
									</div>
									<input type="submit" name="regSubmit">
									<p class="text-white">already have accouta  <a href="login.php" class="text-primary bg-dark">Login</a></p>
								</form>
								<!-- ---- form section end -->
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- footer start -->
		<div class="container-fluid">
			<div class="footer">
				<div class="downfooter">
					<div class="row justify-content-center">
						<div class="col-3 text-center">
							<p>Copyright All reserve@webgurukul.com</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- footer end -->
		<!-- Optional JavaScript -->
		<script src="../js/jquery-3.5.1.slim.min.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	</body>
</html>