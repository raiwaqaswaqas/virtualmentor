<?php
include("include/connection.php"); 
include("include/user_data.php");

		$mentor_user = "SELECT * from mentor_user where m_email='$user_email'";
		$m_query = mysqli_query($con, $mentor_user);
		$m_row = mysqli_num_rows($m_query);
		if ($m_row > 0) {
			header("location: mentor-home.php");
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Home</title>

	<!-- Meta tags for responsiveness -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- ----------------------------------------------- -->

	
	<!-- Bootstrap CSS by CDN  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- ----------------------------------------------- -->

	<!-- Bootstrap Complied CSS (Adding bootstrap Css localy) -->
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">	 -->
	<!-- ----------------------------------------------- -->

	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ----------------------------------------------- -->

	<!-- Fontawesome kit code -->
	<script src="https://kit.fontawesome.com/c36645e443.js"></script>
	<!-- ----------------------------------------------- -->
</head>
<body>

	<!-- Start search-modal -->
	<div class="modal animated light-speed-in" id="search-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content bg-dark text-light">
				
				<div class="modal-header">
					<h4 class="modal-title">Ask Question!</h4>
					<button class="close text-light" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
				
				<form action="">	
					<div class="form-group">
						<label>Write your problem/question.</label>
						<input type="search" name="search" class="form-control bg-light text-dark">
					</div>
					<div class="form-group">	
						<label>Select your subject.</label>
						<select class="form-control" name="sub-list">
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
							<option>abc</option>
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="upload-file" class="btn btn-outline-info btn-sm w-100 text-left">
					</div>	
				</div>

				<div class="modal-footer">
					<input type="submit" name="sub-submit" class="btn btn-outline-secondary btn-sm text-light" value="Submit">
					<button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal" >Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End search-modal -->

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
		<div class="jumbotron jumbotron-fluid bg-gray text-dark">
			<div class="container text-center">
				<h2>Instant online tutoring.</h2>
				<p class="lead">Write your problem/question!</p>
				<div class="row justify-content-center">	
					<div class="col-md-6">
						<div class="input-group">
							<input type="search" name="search" class="form-control bg-light text-dark" placeholder="Write your problem/question!">
							<button class="btn btn-outline-secondary btn-sm ml-1" data-toggle="modal" data-target="#search-modal">Search</button>
						</div>
					</div>	
				</div>	
			</div>
		</div>
	<!-- End jumbotron -->

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
				<a href="#search-modal" data-toggle="modal" class="btn btn-outline-dark " role="button">Let's get started!</a>
			</div>
			<hr class="w-75">
	</div>
	<!-- End Cards (How VM work's) -->
	

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
				<a href="" class="btn btn-outline-dark " role="button">See all courses</a>
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
							<a href="about_us.php" class="nav-link text-light">About Us</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light">Help Center</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3 text-light">
					<h4>Learn with us</h4>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="#" class="nav-link text-light">How VM work's</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-light">Why VM</a>
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
							<a href="become-mentor.php" class="nav-link text-light">Become Mentor</a>
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
<!-- 	<script src="js/bootstrap/jquery-3.4.1.min.js"></script>
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
