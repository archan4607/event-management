<?php
include "header.php";
?>
		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Booking Listing</h1>
					
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>Id</th> 
									<th>Username</th> 
									<th>Event</th> 
									<th>Book_date</th> 
									<th>Venue</th> 
									<th>City</th> 
									<th>Adults</th> 
									<th>Children</th> 
									<th>Special Notes</th> 
									<th>Action</th> 
								</tr> 
							</thead> 
							<?php
							include "connection.php";
							$c=mysqli_query($con,"select * from booking_master");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									<td><?php echo $r['b_id'];?></td> 
									<?php
									$id=$r['c_id'];
									$q1="select * from customer where c_id='$id'";
									$c1=mysqli_query($con,$q1);
									while($r1=mysqli_fetch_array($c1))
									{
									?>
										<td><?php echo $r1['c_name'];?></td> 
									
									<?php									
									}
									
									$id=$r['e_id'];
									$q1="select * from event_master where event_id='$id'";
									$c1=mysqli_query($con,$q1);
									while($r1=mysqli_fetch_array($c1))
									{
									?>
										<td>
											<?php echo $r1['title'];?>
										</td> 
									
									<?php									
									}
									?>
									<td><?php echo $r['b_date'];?></td> 
									<td><?php echo $r['venue'];?></td> 
									<td><?php echo $r['city'];?></td>
									<td><?php echo $r['adult_members'];?></td>
									<td><?php echo $r['children'];?></td>
									<td><?php echo $r['special_notes'];?></td>
									<td>
									<a href="editstatus.php?id=<?php echo $r['b_id'];?>">
										<i style="color: green; font-size:18px " class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</a>
									
										<a title="View Order Status" href="viewstatus.php?id=<?php echo $r['b_id'];?>" style="color: green;  font-size:18px">
										<i style="color: black; font-size:18px " class="fa fa-eye" aria-hidden="true"></i></a>
										</td> 
								</tr> 
							 </tbody>
							<?php
							}
							?>
						</table>
						</div>
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
		
				
			</div>
		</div>
	
<?php
include "footer.php";
?>