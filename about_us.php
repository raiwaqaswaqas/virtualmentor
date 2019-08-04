<?php
include("include/connection.php");
include("include/user_data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>About Us</title>

	<!-- Meta tags for responsiveness -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ----------------------------------------------- -->

	
	<!-- Bootstrap CSS by CDN  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- ----------------------------------------------- -->

	<!-- Bootstrap Complied CSS (Adding bootstrap Css localy) -->
<!-- 	<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">	 -->
	<!-- ----------------------------------------------- -->

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ----------------------------------------------- -->

	<!-- Fontawesome kit code -->
	<script src="https://kit.fontawesome.com/c36645e443.js"></script>
	<!-- ----------------------------------------------- -->

</head>
<body spellcheck="true">

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
					<li class="nav-item dropdown pr-5">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Courses</a>
						<div class="dropdown-menu" data-toggle="modal" data-target="#search-modal">
							<a href="#" class="dropdown-item">link1</a>
							<a href="#" class="dropdown-item">link1</a>
							<a href="#" class="dropdown-item">link1</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"><i class="fas fa-comment-dots fa-1x pr-1"></i>Massages</a>
						<div class="dropdown-menu">
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">Logout</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-light font-weight-bold">
							<?php echo $user_name;?>
								
							</a>
					</li>
					<li class="nav-item dropdown px-1">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
						<?php	
						echo "<img src='images/user-profile-images/".$user_image."' width='28px' height='28px' class='rounded-circle' >";
						?>
						</a>
						<div class="dropdown-menu dropdown-menu-lg-right">
							<!-- <a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a> -->
							<a href="http://localhost:8081/virtual-mentor/include/logout.php" class="dropdown-item">Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Start jumbotron -->
		<div class="jumbotron jumbotron-fluid bg-dark border-top border-light text-light">
			<div class="container">
				<h2 class="font-weight-bold">About US</h2>
				<p class="lead font-italic">“We are a passionate group of individuals that come together for one collective goal,<br> To change the way people <span class="text-info">learn</span> and <span class="text-info">Teach</span>.”</p>
			</div>
		</div>
	<!-- End jumbotron -->

	<!-- Start Content area -->
		<div class="container">
				
				<h2 class="text-uppercase text-center form-inline"><hr style="width: 40px;" 	class="mr-2 bg-secondary">Our Mission<hr style="width: 40px;" class=	"	 ml-2 bg-secondary">
				</h2>
			<div class="row">	
				<div class="col-md-8">
					<p class="lead text-justify mt-4"> 
						<span style="font-size: 20px; font-weight: 500;">The </span>mission is to change the way of people learning and teaching. Connecting students and teachers through live video call and voice call. Comfortable environment for online study through the real time communication (live session). Useful for both teacher and student. The student can hire a teacher for a specific time to solve his/her issues during the study. The teacher can come online during his/her spare time and can earn through helping the students.
					</p>
				</div>
				<div class="col-md-4">
					<img src="images/online-learning.jpg" class="image-responsive w-100" >
				</div>
			</div>
			
			<hr class="w-50 my-5">

			<h2 class="text-uppercase text-center">Who we are!</h2>
			<p class="lead text-justify mt-4"> 
				We are a passionate group of individuals that come together for one collective goal, To change the way people learn and Teach. Currently we are final year students of BS-(Software Engineering) from Riphah international university Faisalabad campus.
			</p>
			<div class="row">
				
				<div class="col-md-4 my-1">
					<div class="card border-0">
						<div class="card-header bg-transparent">
							<img src="images/founder-1" class="card-image-top image-responsive rounded w-100">
						</div>
						<div class="card-body text-center">
							<h4 class="card-title">M Naeem Akram</h4>
							<p class="card-text">-Founder and developer-</p>
						</div>
					</div>		
				</div>

				<div class="col-md-4 my-1">
					<div class="card border-0">
						<div class="card-header bg-transparent">
							<img src="images/founder-2" class="card-image-top image-responsive rounded w-100">
						</div>
						<div class="card-body text-center">
							<h4 class="card-title">Rai Waqas</h4>
							<p class="card-text">-Founder and developer-</p>
						</div>
					</div>		
				</div>

				<div class="col-md-4 my-1">
					<div class="card border-0">
						<div class="card-header bg-transparent">
							<img src="images/founder-3" class="card-image-top image-responsive rounded w-100">
						</div>
						<div class="card-body text-center">
							<h4 class="card-title">Zunain Malik</h4>
							<p class="card-text">-Founder and developer-</p>
						</div>
					</div>		
				</div>
			</div>
			
			<hr class="w-50 my-5">

		</div>
	<!-- End Content area -->

	
	<!-- Start Footer -->
	<footer class="container-fluid bg-dark py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-light">
					<h4>Get to know us</h4>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="about_us.php" class="nav-link text-light">About Us</a>
						</li>
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









	<!-- Bootstrap Complied JS (Adding bootstrap Js localy) -->
	<!-- <script src="js/bootstrap/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap/popper.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script> 	 -->							
	<!-- ----------------------------------------------- -->


	<!--Bootstrap JS by CDN  -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- --------------------------------------------- -->

</body>
</html>