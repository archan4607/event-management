<?php
include "connection.php";
if(isset($_POST['btnok']))
{
	$id=$_REQUEST['id'];	
	$q="select * from category where cat_id='$id'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$nm=$r['category_name'];
		$image=$r['category_image'];
	}
	$name=$_POST['nmtxt'];
	if($_FILES['flimg']['name']=="")
	{
		$flimg=$image;
	}
	else
	{
		unlink("upload/category/".$image);
		$flimg=$_FILES['flimg']['name'];
		move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/category/".$flimg);
	}
	$q="update category set category_name='$name',category_image='$flimg' where cat_id='$id'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		
		echo "<script>alert('Successfully Updated'); window.location='viewcategory.php'; </script>";
	}
	else
	{
		echo "<script>alert('Something Goes Wrong');</script>";
	}
	
}

	$id=$_REQUEST['id'];
	$q="select * from category where cat_id='$id'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$nm=$r['category_name'];
		$image=$r['category_image'];
	}
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
										<input type="text" value="<?php echo $nm;?>" name="nmtxt" class="form-control1" id="focusedinput" placeholder="Enter Name">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category-Image</label>
									<div class="col-sm-8">
										<input type="file" name="flimg" class="form-control1">
										<br>
										<img src="upload/category/<?php echo $image;?>" height=100 width=100/>
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


