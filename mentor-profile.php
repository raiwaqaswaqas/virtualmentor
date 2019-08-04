<?php
include("include/connection.php");
include("include/user_data.php");

	$id = $_GET['id'];

	$check_mentor = mysqli_query($con, "SELECT * from mentor_user where id='$id'");
	$m_row = mysqli_fetch_assoc($check_mentor);

			$m_user = $m_row['m_name'];
			$m_image = $m_row['m_image'];
			$m_about = $m_row['about'];
			$m_experience = $m_row['experience'];
			$m_qualification = $m_row['qualification'];
			$c_date = $m_row['c_date'];
			$m_subject = $m_row['subject'];
			$m_language = $m_row['language'];
			$j_experience = $m_row['j_experience'];
			$s_date = $m_row['s_date'];
			$l_date = $m_row['l_date'];

		
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
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
							<a href="" class="dropdown-item">link1</a>
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
				<div class="row">
					<div class="col-md-2 border-right text-right ">
					<?php
						echo "<img src='images/user-profile-images/".$m_image."' class='rounded-circle' width='125px' height='125px'>";
					?>					
					</div>
					<div class="col-md-10  pt-3">
						<h2 class="font-weight-bold">Mentor: <?php echo $m_user; ?></h2>
						<p class="lead">with <?php echo $m_experience; ?> years of experience</p>
					</div>
				</div>
			</div>
		</div>
	<!-- End jumbotron -->

	<!-- Start Content area -->
	<!-- Start Mentor profile -->
	<div class="container">
		<div class="form-inline d-flex flex-row-reverse ">
			<a href="#" class="btn btn-outline-info btn-sm ml-5" role="button">Request for session</a>
			<a href="#" class="btn btn-outline-info btn-sm" role="button">Send massage</a>
		</div>
		
		<hr class="bg-light">

		<div class="px-5">
			<h5><i class="far fa-user"></i> About <?php echo $m_user; ?>:</h5>
			<p class="lead"><?php echo $m_about; ?></p>
			
			<br>

			<h5><i class="far fa-calendar-alt"></i> Teaching Experience:</h5>
			<p class="lead"><?php echo $m_user; ?> has <?php echo $m_experience; ?> years of teaching experience.</p>
			
			<br>
			
			<h5><i class="fas fa-graduation-cap"></i> Qualification:</h5>
			<p class="lead"><?php echo $m_qualification; ?><br><span class="font-italic">Compeletation date: <?php echo $c_date; ?></span></p>

			<br>	<hr class="bg-light w-75">	<br>
 
			<h5><i class="fas fa-book"></i> Subjects:</h5>
			<p class="lead"><?php echo $m_subject ?></p>

			<br>

			<h5><i class="fas fa-language"></i> Language:</h5>
			<p class="lead"><?php echo $m_language ?></p>

			<br>	<hr class="bg-light w-75">	<br>

			<h5><i class="fas fa-business-time"></i> Last job Experience:</h5>
			<p class="lead"><?php echo $j_experience ?><br><span class="font-italic">Start date: <?php echo $s_date; ?> End date: <?php echo $l_date; ?></span></p>

		</div>	

		<br>	<hr class="bg-light w-100">	<br>
	</div> 	

	<!-- End Mentor profile -->
	<!-- End Content area -->


	<!-- Start Footer -->
	<footer class="container-fluid bg-dark py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-light">
					<h4>Get to know us</h4>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a href="#" class="nav-link text-light">About Us</a>
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
							<a href="become-mentor.php" class="nav-link text-light disabled">Become Mentor</a>
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
