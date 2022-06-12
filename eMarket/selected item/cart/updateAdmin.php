<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Register</title>

	<!-- Fontfaces CSS-->
	<link href="css/font-face.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
	<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

	<!-- Bootstrap CSS-->
	<link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

	<!-- Vendor CSS-->
	<link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
	<link href="vendor/wow/animate.css" rel="stylesheet" media="all">
	<link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

	<!-- Main CSS-->
	<link href="css/theme.css" rel="stylesheet" media="all">

	<style type="text/css">
	#gradientmoto {
		text-transform: uppercase;
		background: linear-gradient(-90deg, #b3c3f8, #607edd);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
</style>
</head>

<body class="animsition">
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mura";

	$uname = $_POST['user'];
	$pwd = $_POST['pass'];
	$em = $_POST['email'];
	$id = $_POST['key'];
	$cryptUser = bin2hex($uname);
	$cryptPass = bin2hex($pwd);



	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
	{
		die("Error: ". mysqli_connect_error());
	}


	

	$sql = "UPDATE admin SET UserName = '$cryptUser', Password = '$cryptPass', Email = '$em' WHERE adminID = '$id'";

	if (mysqli_query($conn, $sql))
	{  
		?>
		<center>
		<div class="page-wrapper">
			<div class="login-wrap">
				<div class="card-body">
					<div class="typo-headers">
						<h1 class="pb-2 display-4">Updated!</h1>
						<?php 	 echo "<a href='admin.php?user=".$uname."&password=".$pwd."'>";?>
							<button type="button" class="btn btn-outline-success btn-lg btn-block">Back</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		</center>
		<?php
	}

	else
	{
		echo "Error: " . mysqli_error($conn);
	}

	mysqli_close($conn);

	?>
	<!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="vendor/slick/slick.min.js">
	</script>
	<script src="vendor/wow/wow.min.js"></script>
	<script src="vendor/animsition/animsition.min.js"></script>
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="vendor/circle-progress/circle-progress.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->