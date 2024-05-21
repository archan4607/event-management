<?php
session_start();
if(!isset($_SESSION['user']))
{
	?>
	<script>
		alert('You Have to login first');
		window.location="login.php";
	</script>
	<?php
}
$bid=$_REQUEST['id'];
$status=$_REQUEST['s'];
	$con=mysqli_connect("localhost","root","","event_db");
	$q="update booking_status set status_customer='$status' where bs_id='$bid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			window.location="mybooking.php";
		</script>	
		<?php
	}
?>