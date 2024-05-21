<?php
include "connection.php";
if(isset($_POST['btnok']))
{
	include "connection.php";
	$title=$_POST['nmtxt'];
	$description=$_POST['destxt'];
	$price=$_POST['pricetxt'];
	$services=$_POST['service'];
	$extraa=$_POST['entxt'];
	$type=$_POST['type'];
	$cat=$_POST['typesl'];
	
	$ser="";
	for($i=0;$i<count($services);$i++)
	{
		$ser=$ser."".$services[$i]."<br/>";
	}
	
	$q="insert into event_master values('','$title','$ser','$description','$price','$extraa','$type','$cat')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		echo "<script>alert('Successfully Inserted'); window.location='viewevents.php'; </script>";
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
							<h3>Add New Event</h3><br>
								
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Select Category</label>
									<div class="col-sm-8">
										<select name="typesl" class="form-control1" id="focusedinput">
											<option>Select Category</option>
											<?php 
											$qq="select * from category";
											$cc=mysqli_query($con,$qq);
											while($rr=mysqli_fetch_array($cc))
											{
												?>
												<option value="<?php echo $rr['cat_id'];?>"><?php echo $rr['category_name'];?></option>	
												<?php 
											}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										<input type="text" name="nmtxt" class="form-control1" id="focusedinput" placeholder="Enter Name">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Services</label>
									<div class="col-sm-8">
									<table>
										<?php 
											$qq="select * from services";
											$c=mysqli_query($con,$qq);
											$i=0;
											while($rr=mysqli_fetch_array($c))
											{
												
												if($i%5==0)
												{ ?>
												<tr>
												<?php 
												}
												?>
												<td>
													<input type="checkbox" name="service[]" value="<?php echo $rr['service_name'];?>"/>
													<?php echo $rr['service_name'];?> &nbsp;&nbsp;
												</td>
												<?php
												$i++;		
												if($i%5==0)
												{ ?>
												</tr>
												<?php
												}
											}
										?>
										</table>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8">
										<input type="text" name="destxt" class="form-control1" id="focusedinput" placeholder="Description">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Price</label>
									<div class="col-sm-8">
										<input type="text" name="pricetxt" class="form-control1" id="focusedinput" placeholder="Enter Price">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Extraa Notes</label>
									<div class="col-sm-8">
										<input type="text" name="entxt" class="form-control1" id="focusedinput" placeholder="Extra Terms">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Where</label>
									<div class="col-sm-8" style="margin-top:10px">
										<input type="radio" name="type"  value="Indoor"/> InDoor
										<input type="radio" name="type" value="Outdoor"/> OutDoor 
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


