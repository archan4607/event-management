<?php
$bid=$_REQUEST['id'];
if(isset($_POST['btnok']))
{
	include "connection.php";
	$fa=$_POST['fatxt'];
	$tc=$_POST['tctxt'];
	
	$q="insert into booking_status values('','$bid','$fa','$tc','Done','')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		
		echo "<script>alert('Successfully Inserted'); window.location='vieworder.php'; </script>";
	}
	else
	{
		echo "<script>alert('Something Goes Wrong');</script>";
	}
	
}


?>

<?php
include "header.php";
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<div class="form-three widget-shadow">
							<form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
							<h3>Booking Confirm</h3><br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Final Amount</label>
									<div class="col-sm-8">
										<input type="text" name="fatxt" class="form-control1" id="focusedinput" placeholder="Enter Amount">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Terms & Condition</label>
									<div class="col-sm-8">
										<input type="text" name="tctxt" class="form-control1" id="focusedinput" placeholder="Enter Terms & Condition">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-sm-6" align="center">
									<button type="submit" class="btn btn-default" name="btnok">Submit</button>
									</div>
								</div>
							</form>
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


