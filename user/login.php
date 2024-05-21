<?php
include "header.php";
if(isset($_SESSION['user']))
{
	?>
	<script>
		alert('You are already login');
		window.location="index.php";
	</script>
	<?php
}
?>
<head>
<title>Login</title>
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
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<?php
if(isset($_POST['btnok']))
{
	$un=$_POST['untxt'];
	$pw=$_POST['pwtxt'];
	
	include "connection.php";
	$q="Select * from customer where email='$un' AND password='$pw'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r>=1)
	{
		$_SESSION['user']=$un;
		while($r=mysqli_fetch_array($c))
		{
			$_SESSION['cid']=$r['c_id'];
			$_SESSION['name']=$r['c_name'];
		}
		?>
		<script>
			alert("Login Successfully");
			window.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Invalid Username And Password");
		</script>
		<?php
	}
}

?>

	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
									<br/><br/>
									<br/><br/>
										<div class="home_title"  style="font-size:40px">We plan your event from start to finish</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Dots -->
			
		</div>
	</div>

	<!-- Features -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title"><h2>Login Here</h2></div>
						
						<div style="margin-top:-0px" class="contact_form_container">
							<form action="#" method="post" class="contact_form" id="contact_form">
								<div class="input_container"><input name="untxt" type="text" class="contact_input" placeholder="Email"></div>
								<div class="input_container"><input name="pwtxt" type="password" class="contact_input" placeholder="Password"></div>
								<button class="contact_button" name="btnok">Login</button>
							</form>
							<br>
							<a href="signup.php"><h4 style="color:blue">At Not Register Click here </h4></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

<?php
include "footer.php";
?>