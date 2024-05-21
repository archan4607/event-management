<?php
include "header.php";
?>
	<!-- Menu -->

	

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title"  style="font-size:50px">Our Services</div>
							<div class="booking_form_container">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
							<?php
							include "connection.php";
							$q="select * from category";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
							{
								?>
							<div class="booking_item">
								<div class="background_image" style="background-image:url(../admin/upload/category/<?php echo $r['category_image'];?>)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									
								</div>
								<div class="booking_link"><a href="event.php?id=<?php echo $r['cat_id'];?>"><?php echo $r['category_name'];?></a></div>
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