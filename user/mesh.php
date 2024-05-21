<?php
session_start();
if(!isset($_SESSION['user']))
{
	?>
	<script>
		alert('You Have to login first');
		window.location="login.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Elements</title>
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
<link rel="stylesheet" type="text/css" href="styles/elements.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
</head>
<body>

<div class="super_container">
	
<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">My Hostel</a></div>
		<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="rooms.php">Rooms</a></li>
						<li><a href="mesh.php">Mesh</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			<?php
				if(isset($_SESSION['user']))
				{ 
					?>
				<div class="book_button"><a href="logout.php">logout</a></div>
				<?php
				}
				else
				{
					?>
				<div class="book_button"><a href="Login.php">Login</a></div>
				<div class="header_phone d-flex flex-row align-items-center justify-content-center">
					<span><a href="signup.php" style="color:white">Admission Now</a></span>
				</div>
				<?php
				}
				?>
				

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="#">Rooms</a></li>
					<li><a href="mesh.php">Mesh</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_extra">
			<div class="menu_book text-right"  style="font-size:50px">Login</div>
			<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
				<img src="images/phone-2.png" alt="">
				<span>0183-12345678</span>
			</div>
		</div>
	</div>

	<div class="home">
		<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Mesh Menu</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$itemb="Not Defined";
	$iteml="Not Defined";
	$itemd="Not Defined";
	$noteb="Not Defined";
	$notel="Not Defined";
	$noted="Not Defined";
	$timeb="Not Defined";
	$timel="Not Defined";
	$timed="Not Defined";
	include "connection.php";
	$dt=date("d-m-Y");
	$q="select * from mesh_details where m_date='$dt' AND slot='BreakFast'";
	
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$itemb=$r['items_details'];
		$noteb=$r['note'];
		$timeb=$r['m_time'];
	}
	$q="select * from mesh_details where m_date='$dt' AND slot='Lunch'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$iteml=$r['items_details'];
		$notel=$r['note'];
		$timel=$r['m_time'];
	}
	$q="select * from mesh_details where m_date='$dt' AND slot='Dinner'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$itemd=$r['items_details'];
		$noted=$r['note'];
		$timed=$r['m_time'];
	}
	?>

	<!-- Elements -->

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="acc_tabs" style="margin-top:-30px">
						<div class="elements_title"><h2>Today 's Mesh Menu</h2></div>
						<div class="row acc_tabs_row">
							<div class="col-lg-6">

								<!-- Accordions -->
								<div class="accordions">

									<!-- Accordion -->
									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Breakfast</div></div>
										<div class="accordion_panel">
											<div style="padding-left:30px">
											<br>
												<h4>Menu : <?php echo $itemb;?></h4>
												<h4>Note : <?php echo $noteb;?></h4>
												<h4>Time : <?php echo $timeb;?></h4>
											</div>
										</div>
									</div>
									
									<!-- Accordion -->
									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Lunch</div></div>
										<div class="accordion_panel">
											<div style="padding-left:30px">
											<br>
												<h4>Menu : <?php echo $iteml;?></h4>
												<h4>Note : <?php echo $notel;?></h4>
												<h4>Time : <?php echo $timel;?></h4>
											</div>
										</div>
									</div>
									<div class="accordion_container">
										<div class="accordion d-flex flex-row align-items-center"><div>Dinner</div></div>
										<div class="accordion_panel">
										<div style="padding-left:30px">
											<br>
												<h4>Menu : <?php echo $itemd;?></h4>
												<h4>Note : <?php echo $noted;?></h4>
												<h4>Time : <?php echo $timed;?></h4>
											</div>
									</div>

									
								</div>

							</div>

						</div>
					</div>

					
					<!-- Icon Boxes -->
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

		<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo_container text-center">
							<div class="footer_logo">
								<a href="#"></a>
								<div>AVPTI</div>
								<div>since 1998</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer_row">
					
					<!-- Address -->
					<div class="col-lg-3">
						<div class="footer_title">Our Address</div>
						<div class="footer_list">
							<ul>
								<li>Behind Hemu Gadhvi Hall</li>
								<li>Tagor road</li>
								<li>Rajkot</li>
							</ul>
						</div>
					</div>

					<!-- Reservations -->
					<div class="col-lg-3">
						<div class="footer_title">Reservations</div>
						<div class="footer_list">
							<ul>
								<li>Tel: 123 456 7890</li>
								<li>reservations@hotelavpti.com</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed By Vidhi,Twinkle,Sejal
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="js/elements.js"></script>
</body>
</html>