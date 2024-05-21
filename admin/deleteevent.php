<?php
include "connection.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from event_master where event_id='$id'");
?>
<script>
	window.location="viewevents.php";
</script>