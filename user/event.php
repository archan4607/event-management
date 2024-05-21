<?php
include "header.php";
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
								<center><h2 style="color:white">Available Events</h2></center>
							</div>
							<?php
							$cid=$_REQUEST['id'];
							$q="select * from event_master where cat_id='$cid'";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
							{
								?>
							<div class="blog_post_content">
								<div class="blog_post_title" style="color:white"><a href="#" style="color:white"><?php echo $r['title'];?></a></div>
							
								<div class="blog_post_text" style="color:white">
									<h3 style="color:white">About Event : <br/></h3><h4 style="color:white"><?php echo $r['description'];?></h4>
								</div>
								
								<div class="blog_post_text" style="color:white">
									<h3 style="color:white">Services</h3>
									<b style="color:white"><?php echo $r['services'];?></b>
								</div>
								
								<div class="blog_post_text" style="color:white">
									<h4 style="color:white">Price : <?php echo $r['price'];?></h4>
									
								</div>
								<div class="blog_post_text" style="color:white">
									<h4 style="color:white">Type : <?php echo $r['e_type'];?></h4>
									
								</div>
								
								<div class="blog_post_text" style="color:white">
									<h4 style="color:white">Extraa Facility : 
									<?php echo $r['extra_faciltity'];?></h4>
								</div>
								<div class="button blog_post_button"><a href="booking.php?eid=<?php echo $r['event_id'];?>">Booking This</a></div>
							</div>
							<?php 
							}
							?>
						</div>
						</div>
						</div>

			</div>
		</div>
	</div>

<?php
include "footer.php";
?>