<?php
include "header.php";
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Customer Listing</h1>
					
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>ID</th> 
									<th>Name</th> 
									<th>Email</th> 
									<th>Contact</th> 
									<th>City</th> 
									<th>Action</th> 
								</tr> 
							</thead> 
							<?php
								include "connection.php";
							$c=mysqli_query($con,"select * from customer");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									
									<td><?php echo $r['c_id'];?></td> 
									<td><?php echo $r['c_name'];?></td> 
									<td><?php echo $r['email'];?></td> 
									<td><?php echo $r['contact_no'];?></td> 
									<td><?php echo $r['city'];?></td> 
									<td>
								
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deletecustomer.php?id=<?php echo $r['customer_id'];?>">
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