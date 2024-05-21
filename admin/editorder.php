<?php
	$oid=$_REQUEST['id'];	
	$status=$_REQUEST['status'];
	
	include "connection.php";
	$q="update order_master set status='$status' where order_id='$oid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			window.location="vieworder.php";
		</script>
		<?php 
	}