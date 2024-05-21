<?php
include "header.php";
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						<h1>Feedback Listing</h1>
					
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>User-Name</th> 
									<th>Email</th> 
									<th>Subject</th> 
									<th>Message</th> 
									<th>Date</th> 
									<th>Action</th> 
								</tr> 
							</thead> 
							<?php
								include "connection.php";
							$c=mysqli_query($con,"select * from feedback");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									<td><?php echo $r['name'];?></td> 
									<td><?php echo $r['email'];?></td> 
									<td><?php echo $r['subject'];?></td> 
									<td><?php echo $r['message'];?></td> 
									<td><?php echo $r['f_date'];?></td> 
									<td>
									
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deletefeedback.php?id=<?php echo $r['feedback_id'];?>">
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


