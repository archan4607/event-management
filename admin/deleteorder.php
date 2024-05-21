<?php
include "connection.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from order_master where order_id='$id'");
?>
<script>
	window.location="vieworder.php";
</script>