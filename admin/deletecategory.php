<?php
include "connection.php";
$id=$_REQUEST['id'];
mysqli_query($con,"delete from category where cat_id='$id'");
?>
<script>
	window.location="viewcategory.php";
</script>