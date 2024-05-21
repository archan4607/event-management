<?php
session_start();
if(isset($_POST['btnok']))
{
	$un=$_POST['email'];
	$pw=$_POST['password'];
	
	include "connection.php";
	$q="select * from admin_login where username='$un' AND password='$pw'";
	$c=mysqli_query($con,$q);
	$r=mysqli_num_rows($c);
	if($r>=1)
	{
		$_SESSION['admin']=$un;
		?>
		<script>
			window.location="index.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert('Invalid Username Password');
			window.location="login.php";
		</script>
		<?php
	}
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome To Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
	.abs{
		    font-size: 1em;
			padding: 14px 15px 14px 37px;
			width: 100%;
			color: #A8A8A8;	
			outline: none;
			border: 1px solid #D3D3D3;
			background: #FFFFFF;
			margin: 0em 0em 1.5em 0em;		
	}
</style>
</head> 
<body class="cbp-spmenu-push">
<div class="main-content">
		<div id="page-wrapper" style="margin:0px;">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
						<form action="#" method="post">
							<input type="email" class="user" name="email" placeholder="Enter Your Email" >
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							<input type="submit" name="btnok" value="Sign In">
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2021-22 Develop At Government Polytechnic Rajkot. All Rights Reserved | Design by Varun,Harshvardhan,Abhishek,Yash</p>	</div>
        <!--//footer-->
	</div>
	
	
</body>
</html>