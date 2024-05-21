<?php
include "connection.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from services where service_id='$id'");
?>
<script>
	window.location="viewservices.php";
</script>