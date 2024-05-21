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
				<div class="col-lg-12">
					<div class="blog_posts">
						<div class="blog_post" style="background-color:#1F355B; padding:10px; color:white">
							<div class="blog_post_image">
								<center><h2 style="color:white">My Booking</h2></center>
							</div>
							<table border=1 width=100%>
								<tr >
									<th style="padding:10px">Event Name</th>
									<th style="padding:10px">Date</th>
									<th style="padding:10px">Venue</th>
									<th style="padding:10px">Amount</th>
									<th style="padding:10px">Org Status</th>
									<th style="padding:10px">My Status</th>
									<th style="padding:10px">Terms & Condition</th>
								</tr>
							<?php
							$cid=$_SESSION['cid'];
							$q="select * from booking_master where c_id='$cid'";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
							{
							?>
								<tr >
									<?php 
										$eid=$r['e_id'];
										$qq="select * from event_master where event_id='$eid'";
										$cc=mysqli_query($con,$qq);
										while($rr=mysqli_fetch_array($cc))
										{
										?>
											<th style="padding:10px"><?php echo $rr['title'];?></th>
										<?php 
										}
										?>
									<th style="padding:10px"><?php echo $r['b_date'];?></th>
									<th style="padding:10px"><?php echo $r['venue'];?></th>
									
									<?php 
										$bid=$r['b_id'];
										$qq="select * from booking_status where b_id='$bid'";
										$cc=mysqli_query($con,$qq);
										while($rr=mysqli_fetch_array($cc))
										{
										?>
											<th style="padding:10px"><?php echo $rr['final_amount'];?></th>
											<th style="padding:10px"><?php echo $rr['status_organizor'];?></th>
											<th style="padding:10px">
											<?php 
											if($rr['status_customer']=="Done" || $rr['status_customer']=="Cancel")
											{
												echo $rr['status_customer'];
											}
											else 
											{
												?>
												<a
												onclick="return confirm('Are you sure you want to confirm this event?')"
												href="status.php?id=<?php echo $rr['bs_id'];?>&s=Done">Confirm</a>&nbsp;&nbsp;
												<a 
												onclick="return confirm('Are you sure you want to cancel this event?')"
												href="status.php?id=<?php echo $rr['bs_id'];?>&s=Cancel">Cancel</a>
												<?php 
											}
											?>
											</th>
											<th style="padding:10px"><?php echo $rr['terms_conditions'];?></th>
										<?php 
										}
										?>
									
								</tr>
							<?php 
							}
							?>
							</table>
						</div>
						</div>
						</div>

			</div>
		</div>
	</div>

<?php
include "footer.php";
?>