<?php
include "header.php";
include "connection.php";
if(isset($_POST['btnok']))
{
	$sname=$_POST['nmtxt'];
	$q="Insert into services values('','$sname')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			window.location="viewservices.php";
		</script>
		
		<?php
	}
}	
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Services Listing</h1><br/>
					<form class="form-horizontal" action="#" method="post">
					
					<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Service-Name</label>
									<div class="col-sm-4">
										<input type="text" name="nmtxt" class="form-control1" id="focusedinput" placeholder="Enter Name">
									</div>
									<div class="col-sm-4">
									<button type="submit" class="btn btn-default" name="btnok">Submit</button></div>
								</div>
								
					</form>	
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>ID</th> 
									<th>Service Name</th> 
									
									<th>Action</th> 
								</tr> 
							</thead> 
							<?php
								
							$c=mysqli_query($con,"select * from services");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									
									<td><?php echo $r['service_id'];?></td> 
									<td><?php echo $r['service_name'];?></td> 
									<td>
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deleteservice.php?id=<?php echo $r['service_id'];?>">
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