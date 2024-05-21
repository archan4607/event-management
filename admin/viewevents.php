<?php
include "header.php";
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Event Listing</h1>
					<a href="addevent.php" style="float: right">Add New Event</a>
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>Title</th> 
									<th>Services</th> 
									<th>Description</th> 
									<th>Price</th> 
									<th>Extra Facility</th> 
									<th>Where</th> 
									<th>Action</th> 
								</tr> 
							</thead> 
							<?php
								include "connection.php";
							$c=mysqli_query($con,"select * from event_master");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									
									<td><?php echo $r['title'];?></td> 
									
									<td><?php echo $r['services'];?></td> 
									<td><?php echo $r['description'];?></td> 
									<td><?php echo $r['price'];?></td> 
									<td><?php echo $r['extra_faciltity'];?></td> 
									<td><?php echo $r['e_type'];?></td> 
									<td>
									&nbsp;
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deleteevent.php?id=<?php echo $r['event_id'];?>">
										<i  style="color: red;  font-size:18px" class="fa fa-trash-o" aria-hidden="true"></i>
									</a>
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