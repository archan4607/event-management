<?php
include "header.php";
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						<h1>Category Listing</h1>
					<a href="addcategory.php" style="float: right">Add New Category</a>
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							<thead> 
								<tr>  
									<th>Category-Name</th> 
									<th>Category-Image</th> 
									<th>Action</th> 
								</tr> 
							</thead> 
							<?php
								include "connection.php";
							$c=mysqli_query($con,"select * from category");
							while($r=mysqli_fetch_array($c))
							{
							?>
							<tbody> 
								<tr> 
									<td><?php echo $r['category_name'];?></td> 
									<td><img src="upload/category/<?php echo $r['category_image'];?>" width=100 height=100</td> 
									<td>
									<a href="editcategory.php?id=<?php echo $r['cat_id'];?>">
										<i style="color: green; font-size:18px " class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</a>
									&nbsp;
									<a onClick="return confirm('Are You Sure You want to remove this information??')" href="deletecategory.php?id=<?php echo $r['cat_id'];?>">
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


