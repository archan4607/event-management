<?php
session_start();
$con=mysqli_connect("localhost","root","","event_db");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to Event Mania</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div><font size=16 color=white>Event Mania</font></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="category.php">Events</a></li>
						<li><a href="mybooking.php">My Booking</a></li>
						<li><a href="contact.php">Contact</a></li>
					
				
				<?php
				if(isset($_SESSION['user']))
				{ 
					?>
					<li><a href="logout.php">Logout</a></li>
					</ul>
					</nav>
				<div class="book_button"><a href="#">Welcome <?php echo $_SESSION['name'];?></a></div>
				<?php
				}
				else
				{
					?>
					<li><a href="Login.php">Login</a></li>
					</ul>
					</nav>
				
				<?php
				}
				?>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
