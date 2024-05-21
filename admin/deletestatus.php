<?php
include "connection.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from booking_status where bs_id='$id'");
?>
<script>
	window.location="vieworder.php";
</script>