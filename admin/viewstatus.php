<?php
include "header.php";
?>
		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Order Items Listing</h1>
					
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>Id</th> 
									<th>Final Amount</th> 
									<th>Terms Conditions</th> 
									<th>Status Organizor</th> 
									<th>Status Customer</th> 
									<th>Action</th> 
									
								</tr> 
							</thead> 
							<?php
							include "connection.php";
							$bid=$_REQUEST['id'];
							$c=mysqli_query($con,"select * from booking_status where b_id='$bid'");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									<td><?php echo $r['bs_id'];?></td> 
									<td><?php echo $r['final_amount'];?></td> 
									<td><?php echo $r['terms_conditions'];?></td> 
									<td><?php echo $r['status_organizor'];?></td> 
									<td><?php echo $r['status_customer'];?></td> 
									<td>
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deletestatus.php?id=<?php echo $r['bs_id'];?>">
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