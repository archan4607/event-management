<?php
include "header.php";
$id=$_REQUEST['id'];
if(isset($_POST['btnsubmit']))
{
	
	$date=date("d-m-Y");
	include "connection.php";	
	$msg=$_POST['msg'];
	$qr="insert into status_master values('','$id','$msg','$date')";
	$rs=mysqli_query($con,$qr);
	if($rs)
	{
		?> 
			<script>
				window.location="addstatus.php?id=<?php echo $id;?>"; 
			</script> 
<?php
	}
}
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Add Status</h1>
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
							<form method="post" action="#">
							<input type="text" name="msg">
							&nbsp &nbsp
							<input type="submit" name="btnsubmit"><br>
							<br>
							<br>
								</form>
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>Status ID</th> 
									<th>Service ID</th> 
									<th>Message</th> 
									<th>Date</th> 
									<th>Action</th> 
									
								</tr> 
							</thead> 
							<?php
							include "connection.php";
							$id=$_REQUEST['id'];
							$c=mysqli_query($con,"select * from status_master where service_id='$id'");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									
									<td><?php echo $r['status_id'];?></td> 
									<td><?php echo $r['service_id'];?></td> 
									<td><?php echo $r['message'];?></td> 
									<td><?php echo $r['date'];?></td> 
									<td>
								
									&nbsp;
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deletestatus.php?id=<?php echo $r['status_id'];?>&sid=<?php echo $id;?>">
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