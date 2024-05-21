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
$eid=$_REQUEST['eid'];
if(isset($_POST['btnok']))
{
	$cid=$_SESSION['cid'];
	$am=$_POST['amtxt'];
	$ch=$_POST['chtxt'];
	$ed=$_POST['edtxt'];
	$vn=$_POST['vntxt'];
	$ct=$_POST['cttxt'];
	$sn=$_POST['sntxt'];
	
	$q="insert into booking_master values('','$cid','$eid','$am','$ch','$ed','$vn','$ct','$sn')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert("Your booking has been process successfully. Please wait for organizor 's confirmation");
			window.location="mybooking.php";
		</script>
		<?php
	}
	else
	{
			?>
		<script>
			alert("Something Goes Wrong.. Please Try after sometimes");
			window.location="booking.php?eid=<?php echo $eid ?>";
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

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="blog_posts">
				<div class="blog_post" >
							<div class="blog_post_image">
								<center><h2 style="color:#1F355B">Fill This For For Event Booking</h2></center>
							</div>
							
							<div style="margin-top:20px" class="contact_form_container">
							<form action="#" method="post" class="contact_form" id="contact_form">
								<div class="input_container"><input name="amtxt" type="text" class="contact_input" placeholder="Adult Members"></div>
								<div class="input_container"><input name="chtxt" type="text" class="contact_input" placeholder="Children"></div>
								<div class="input_container"><input name="edtxt" type="date" class="contact_input" placeholder="Event Date"></div>
								<div class="input_container"><input name="vntxt" type="text" class="contact_input" placeholder="Enter Venue"></div>
								<div class="input_container"><input name="cttxt" type="text" class="contact_input" placeholder="City"></div>
								<div class="input_container"><input name="sntxt" type="text" class="contact_input" placeholder="Special Notes"></div>
								
								<button class="contact_button" name="btnok">Booking</button>
							</form>
							<br>
							
						</div>
						</div>
						</div>
						</div>

			</div>
		</div>
	</div>

<?php
include "footer.php";
?>