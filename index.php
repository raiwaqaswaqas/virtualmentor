<!-- Start Php Code -->
<?php  
include("include/connection.php");
include("include/signup.php");
if (isset($_SESSION['user'])) {
			header("location: home.php");
			}
include("include/login-user.php");

?>
<!-- End Php Code -->


<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Virtual Mentor</title>

	<!-- Meta tags for responsiveness -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ----------------------------------------------- -->

	
	<!-- Bootstrap CSS by CDN  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- ----------------------------------------------- -->

	<!-- Bootstrap Complied CSS (Adding bootstrap Css localy) -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">	
	<!-- ----------------------------------------------- -->

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ----------------------------------------------- -->

	<!-- Fontawesome kit code -->
	<script src="https://kit.fontawesome.com/c36645e443.js"></script>
	<!-- ----------------------------------------------- -->

</head>
<body>

	<!-- Start Login and Sign up Modals -->
	<!-- Start login modal -->
	<div class="modal animated light-speed-in" id="login-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class=" modal-content bg-dark text-light">
				<div class="modal-header">
					<h4 class="modal-title">Login Details:</h4>
					<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
				</div>

				<!-- Start Login Form -->
				<form method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label>Email:</label>
							<input  type="email" class="form-control" name="l-email" placeholder="Email" required="">
						</div>
						<div class="form-group">	
							<label>Password:</label>
							<input type="password" class="form-control" name="l-password" placeholder="Password" required="">
						</div>
						<div class="text-right">
						<a href="#forget-pswd-modal" data-toggle="modal" data-dismiss="modal" role="button" class=" text-info">Forget Password?</a>
						</div>	
						<label>Don't have an account? <a href="#signup-modal" data-toggle="modal" data-dismiss="modal" role="button" class=" text-info">Signup</a></label>
					</div>
					<div class="modal-footer">
						<input type="submit" name="l-submit" value="Login" class="btn btn-outline-secondary btn-sm text-light">
						<button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
					</div>
				</form>
				<!-- End Login Form -->
			</div>

		</div>
	</div>
	<!-- End login modal -->
	
	<!-- Start sign up modal -->
	<div class="modal animated light-speed-in" id="signup-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content bg-dark text-light">
				<div class="modal-header">
					<h4>Sign up Details:</h4>
					<button type="button" class="close text-light" data-dismiss="modal">&times;</button>
				</div>
				<!-- Start signup Form -->
				<form method="POST" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-inline justify-content-center">
							<img src="images/profile-avatar.jpg" class="rounded-circle" id="preview" width="125px" height="125px" required="">
							<p class="text-info ml-5">
								- max size 2-Mb<br>- only image file<br>- prefered size 225x225<br>
							</p>
							
							<br>
							<input type="file" accept="image/*" name="image" class="btn btn-outline-info btn-sm mt-1" id="image" onchange="loadfile(event)">
						</div>
						<div class="form-group">
							<label>Name:</label>
							<input type="text" class="form-control" name="s-name" placeholder="Name" required=""
							pattern="^[a-zA-Z '']{2,}$"
							title="No spaces and digits allowed" >
						</div>
						<!--PATTERN attribute is used for email validation. Here we don't validate email domain names like gmail, yahoo, hotmail etc because there are thousand's of domain names
						reference: https://gist.github.com/tbrianjones/5992856/  -->
						<div class="form-group">	
							<label>Email:</label>
							<input type="email"
							class="form-control"
							name="s-email"
							placeholder="email"
							required=""
							pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
							title="Email examples:(a-z, A-Z, 0-9, . _ -) @ (a-z, A-Z, 0-9, . -) . (a-z, A-Z)">
						</div>
						
						<div class="form-group">
							<label>Password:</label>
							<input type="password" 
							class="form-control" 
							name="s-password" 
							placeholder="password" 
							required=""
							pattern="^[a-zA-Z0-9]{8,}$"
							title="Password must contain at least 8 or more characters">
						</div>
						<label>Alread have an account? <a href="#login-modal" data-toggle="modal" data-dismiss="modal" role="button" class=" text-info">Login</a></label>	
					</div>
					<div class="modal-footer">
						<a href="">
						<input type="submit" name="s-submit" class="btn btn-outline-secondary btn-sm text-light" value="Signup">
						</a>
						<button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Close</button>
					</div>
				</form>						
				<!-- End signup Form  -->
			</div>
		</div>
	</div>
	<!-- End signup modal -->

	<!-- Start Forget-Password-Modal -->
	<div class="modal animated light-speed-in" id="forget-pswd-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content bg-dark text-light">
				<div class="modal-header text-center">
					<h4 class="modal-title">Forget Password</h4>
					<button type="button" data-dismiss="modal" class="close text-light">&times;</button>
				</div>
				<form method="POST" action="home.html">	
					<div class="modal-body">
						<div class="form-group">
							<label class="text-center text-info">Enter the email address associated with your account, we will send you link to reset your password.</label>
							<hr class="bg-light text-center w-50">
							<label>Enter your email:</label>
							<input type="email" name="f-p-email" placeholder="Email" class="form-control">
						</div>
					</div>
					<div class="modal-footer">

						<input type="submit" name="f-p-submit" value="Reset password" class="form-control btn btn-outline-secondary text-light">
					</div>
				</form>	
			</div>
		</div>
	</div>
	<!-- End Forget-Password-Modal -->

	<!-- End login and Sign up Modals -->


	<!-- Start Navbar -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a href="index.php" class="navbar-brand">Virtual Mentor</a>

		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-toggle">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="menu-toggle">
			<div class="ml-auto">	
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#how-work" class="nav-link">How it's work</a>
					</li>
					<li class="nav-item">
						<a href="#why-us" class="nav-link">Why us</a>
					</li>
					<li class="nav-item dropdown pr-5">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Courses</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">link1</a>
							<a href="#" class="dropdown-item">link1</a>
							<a href="#" class="dropdown-item">link1</a>
						</div>
					</li>

					<li class="nav-item px-1 py-1">
						<a href="#login-modal" data-toggle="modal" class="nav-link btn btn-outline-secondary text-light btn-sm">Login</a>
					</li>
					<li class="nav-item px-1 py-1">
						<a href="#signup-modal" data-toggle="modal" class="nav-link btn btn-outline-secondary text-light btn-sm" role="button">Signup</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->


	<!-- Start Carousel -->
	<div id="control-slide" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/cover.png" class="d-block w-100" alt="carousel-1">
			</div>
			<div class="carousel-item">
				<img src="images/cover1.png" class="d-block w-100" alt="carousel-2">
			</div>
			<div class="carousel-item">
				<img src="images/cover.png" class="d-block w-100" alt="carousel-3">
			</div>
		</div>
		<!-- Carousel Controler Indicator -->
		<a href="#control-slide" class="carousel-control-prev" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a href="#control-slide" class="carousel-control-next" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<!-- End Carousel -->


	<!-- Start Content Area -->
	<!-- Start Cards (How VM work's) -->
	<div class="container my-5" id="how-work">
		<h2 class="text-center text-capitalize">how virtual mentor work's</h2>
		
		<div class="row text-center my-5">
			<!-- Card-1 -->
			<div class="col-md-4 my-1">
				<div class="card">
					<div class="card-header bg-dark text-light">
						<i class="fas fa-laptop fa-5x"></i>
					</div>
					<div class="card-body">
						<h4 class="card-title">1. Request</h4>
						<p class="card-text">Tell us what you need help with and our smart matching system will connect you with an best online tutor.</p>
					</div>
				</div>		
			</div>
			<!-- Card-2 -->
			<div class="col-md-4 my-1">
				<div class="card">
					<div class="card-header  bg-dark text-light">
						<i class="fas fa-chalkboard fa-5x"></i>
					</div>
					<div class="card-body">
						<h4 class="card-title">2. Learn</h4>
						<p class="card-text">Get live 1-on-1 help in lesson space. Use a audio/video chat and screen sharing. Userfriendly lesson space.</p>
					</div>
				</div>		
			</div>
			<!-- Card-3 -->
			<div class="col-md-4 my-1">
				<div class="card">
					<div class="card-header  bg-dark text-light">
						<i class="fas fa-star-half-alt fa-5x"></i>
					</div>
					<div class="card-body">
						<h4 class="card-title">3. Reviews</h4>
						<p class="card-text">After the lesson is completed, both the tutor and student have the opportunity to rate each other.</p>
					</div>
				</div>		
			</div>
				
		</div>
			<div class="text-center">
				<a href="#signup-modal" data-toggle="modal" class="btn btn-outline-dark " role="button">Let's get started!</a>
			</div>
			<hr class="w-75">
	</div>
	<!-- End Cards (How VM work's) -->


	<!-- Start Cards (Why VM) -->
	<div class="container-fluid bg-dark py-3" id="why-us">
		<div class="container my-5">
			<h2 class="text-center text-capitalize text-light">why virtual mentor?</h2>
			
			<div class="row my-5 text-light">
				<!-- Side-icon Card-1 -->
				<div class="col-md-4 my-1">
					<div class="row">					
						<div class="col-md-2">
							<i class="fas fa-stopwatch fa-2x"></i>
						</div>
						<div class="col-md-10">
							<h4>On-demand tutoring</h4>
							<p>Connect with an online tutor in less time, 24/7. It doesn’t matter if you want help with a single problem or you need a 3-hour session.</p>
						</div>
					</div>		
				</div>
				<!-- Side-icon Card-2 -->
				<div class="col-md-4 my-1">
					<div class="row">					
						<div class="col-md-2">
							<i class="fas fa-tools fa-2x"></i>
						</div>
						<div class="col-md-10">
							<h4>All the tools you need</h4>
							<p>Our lesson space features a virtual whiteboard, text editor, audio/video chat, screensharing and so much more. All lessons are archived for your convenience.</p>
						</div>
					</div>		
				</div>
				<!-- Side-icon Card-3 -->
				<div class="col-md-4 my-1">
					<div class="row">					
						<div class="col-md-2">
							<i class="fas fa-book fa-2x"></i>
						</div>
						<div class="col-md-10">
							<h4>Get help in any subject</h4>
							<p>We cover almost all major subjects across all grade levels. Whether it’s high school algebra or college-level, we have a tutor that can help.</p>
						</div>
					</div>		
				</div>
					
			</div>
				<div class="text-center">
					<a href="about_us.php" class="btn btn-outline-secondary " role="button">About Us</a>
				</div>
				<hr class="w-75 bg-secondary">
		</div>
	</div>
	<!-- End Cards (Why VM) -->


	<!-- Start All Courses -->
	<div class="container my-5">
		<h2 class="text-center text-capitalize text-dark">All Courses</h2>

		<div class="row my-5">
			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-laptop fa-2x px-3 py-3"></i>
				<p class="lead">Computer Science</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-rocket fa-2x px-3 py-3"></i>
				<p class="lead">Engineering</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-globe fa-2x px-3 py-3"></i>
				<p class="lead">Foreign Language</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-user-tie fa-2x px-3 py-3"></i>
				<p class="lead">Professional</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-brain fa-2x px-3 py-3"></i>
				<p class="lead">Humanities</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-history fa-2x px-3 py-3"></i>
				<p class="lead">History</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-calculator fa-2x px-3 py-3"></i>
				<p class="lead">Math</p>
			</div>

			<div class="col-md-3 text-center">
				<i class="rounded-circle bg-dark text-light fas fa-atom fa-2x px-3 py-3"></i>
				<p class="lead">Science</p>
			</div>

		</div>

			<div class="text-center">
				<a href="#login-modal" data-toggle="modal" class="btn btn-outline-dark " role="button">See all courses</a>
			</div>
			<hr class="w-75">
	</div>
	<!-- End All Courses -->


	<!-- Start Footer -->
	<footer class="container-fluid bg-dark py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-light">
					<h4>Get to know us</h4>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="contact_us.php" class="nav-link text-light">Contact Us</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3 text-light">
					<h4>Learn with us</h4>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="#how-work" class="nav-link text-light">How VM work's</a>
						</li>
						<li class="nav-item">
							<a href="#why-us" class="nav-link text-light">Why VM</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light">Courses</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3 text-light">
					<h4>Work with us</h4>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="" class="nav-link text-light disabled" >Become Mentor</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3 text-light">
					<ul class="nav">
						<li class="nav-item">
							<a href="http://www.facebook.com" target="_blank" class="nav-link text-light"><i class="fab fa-facebook fa-2x"></i></a>
						</li>
						<li class="nav-item">
							<a href="http://www.youtube.com" target="_blank" class="nav-link text-light"><i class="fab fa-youtube fa-2x"></i></a>
						</li>
						<li class="nav-item">
							<a href="http://www.twitter.com" target="_blank" class="nav-link text-light"><i class="fab fa-twitter fa-2x"></i></a>
						</li>
					</ul>
					<p class="small pt-2">
						Made in PAKISTAN <br>
						<i class="fas fa-copyright fa-1x text-light"></i> 2019 virtualmentor.com</p>
				</div>	


			</div>
		</div>
	</footer>
	<!-- End Footer -->









	<!--Adding custom js file  -->
	<script type="text/javascript" src="js/script.js"></script>
	<!-- ----------------------------------------------- -->

	<!-- Bootstrap Complied JS (Adding bootstrap Js localy) -->
	<!-- <script src="js/bootstrap/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap/popper.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>  -->
	<!-- ----------------------------------------------- -->


	<!--Bootstrap JS by CDN  -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- --------------------------------------------- -->
</body>
</html>