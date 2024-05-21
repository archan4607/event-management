<?php
include "header.php";
if(!isset($_SESSION['user']))
{
	?>
	<script>
		alert('You Have to login first');
		window.location="login.php";
	</script>
	<?php
}
if(isset($_POST['btnok']))
{
	$name=$_POST['nmtxt'];
	$un=$_POST['untxt'];
	$sub=$_POST['subtxt'];
	$msg=$_POST['msgtxt'];
	$dt=date("d-m-Y");
	
	include "connection.php";
	$q="Insert into feedback values('','$name','$un','$sub','$msg','$dt')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert("Message Send Succesfully");
			window.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Something Goes Wrong");
		</script>
		<?php
	}
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
<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title"><h2>Leave Message To US</h2></div>
						
						<div style="margin-top:-0px" class="contact_form_container">
							<form action="#" method="post" class="contact_form" id="contact_form">
								<div class="row">
									<div class="col-md-6 input_container">
										<input type="text" name="nmtxt" class="contact_input" placeholder="Your name" required="required">
									</div>
									<div class="col-md-6 input_container">
										<input type="email" name="untxt" class="contact_input" placeholder="Your email address" required="required">
									</div>
								</div>
								<div class="input_container"><input name="subtxt" type="text" class="contact_input" placeholder="Subject"></div>
								<div class="input_container"><textarea class="contact_input contact_textarea" name="msgtxt" placeholder="Message" required="required"></textarea></div>
								<button class="contact_button" name="btnok">Send</button>
							</form>
							<br>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php
include "footer.php";
?>