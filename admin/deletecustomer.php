<?php
include "connection.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from customer where customer_id='$id'");
?>
<script>
	window.location="viewcustomer.php";
</script>