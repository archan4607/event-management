<?php
include "connection.php";
if(isset($_POST['btnok']))
{
	$id=$_REQUEST['id'];	
	$q="select * from products_master where pro_id='$id'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$image=$r['image'];
	}
	if($_FILES['flimg']['name']=="")
	{
		$flimg=$image;
	}
	else
	{
		unlink("upload/product/".$image);
		$flimg=$_FILES['flimg']['name'];
		move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/product/".$flimg);
	}
	
	$bname=$_POST['nmtxt'];
	$specification=$_POST['pubtxt'];
	$price=$_POST['pricetxt'];
	$company=$_POST['companytxt'];
	$weight=$_POST['weighttxt'];
	
	$q="update products_master set name='$bname',image='$flimg',description='$specification',price='$price',Company='$company',weight='$weight' where pro_id='$id'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/product/".$image);
		
		echo "<script>alert('Successfully Inserted'); window.location='viewproduct.php'; </script>";
	}
	else
	{
		echo "<script>alert('Something Goes Wrong');</script>";
	}
	
}
    $id=$_REQUEST['id'];
	$q="select * from products_master where pro_id='$id'";
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
		$nm=$r['name'];
		$image=$r['image'];
		$des=$r['description'];
		$pr=$r['price'];
		$company=$r['Company'];
		$weight=$r['weight'];
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
							<h3>Edit product</h3><br>
								
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">product-Name</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $nm?>" name="nmtxt" class="form-control1" id="focusedinput" placeholder="Enter Name">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">product-Image</label>
									<div class="col-sm-8">
										<input type="file" name="flimg" class="form-control1"><br/>
										<img src="upload/product/<?php echo $image;?>" height=100 width=100/>
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Specification</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $des?>" name="pubtxt" class="form-control1" id="focusedinput" placeholder="Publish By">
									</div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Price</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $pr?>" name="pricetxt" class="form-control1" id="focusedinput" placeholder="Enter Price">
									</div>
								</div><div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Company</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $company?>" name="companytxt" class="form-control1" id="focusedinput" placeholder="company By">
									</div>
								</div><div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Weight</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $weight;?>" name="weighttxt" class="form-control1" id="focusedinput"/>
									</div>
								</div>
								
							<div class="form-group">
									<div class="col-sm-6" align="center">
									<button type="submit" class="btn btn-default" name="btnok">Update</button>
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


