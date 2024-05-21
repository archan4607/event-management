<?php
if(isset($_POST['btnok']))
{
	include "connection.php";
	$name=$_POST['nmtxt'];
	$image=$_FILES['flimg']['name'];
	$q="insert into category values('','$name','$image')";
	$c=mysqli_query($con,$q);
	if($c)
	{
		move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/category/".$image);
		
		echo "<script>alert('Successfully Inserted'); window.location='viewcategory.php'; </script>";
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
							<h3>Add New Category</h3><br>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category-Name</label>
									<div class="col-sm-8">
										<input type="text" name="nmtxt" class="form-control1" id="focusedinput" placeholder="Enter Name">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category-Image</label>
									<div class="col-sm-8">
										<input type="file" name="flimg" class="form-control1">
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


