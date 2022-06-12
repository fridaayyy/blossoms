<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mura";

$Client_User = $_POST['user'];
$Client_Pass = $_POST['pass'];
$cryptPass = bin2hex($Client_Pass);
$Client_add = $_POST['address'];
$Client_date = $_POST['datedeliver'];
$Client_prov = $_POST['province'];
$ProdCall = $_POST['key'];


$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
	die("Error: ". mysqli_connect_error());
} 

$sql = "SELECT * FROM customer_register WHERE (UserName = '$Client_User') AND (Password = '$cryptPass')";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
    // output data of each row
	while($row = mysqli_fetch_assoc($results)) { 

		$fn = $row['FirstName'];
		$ln = $row['LastName'];
		$em = $row['email'];
		$phone = $row['Mobile'];
		$uname = $row['Username'];

		?>
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

		$sql2 = "SELECT * FROM products WHERE productID = $ProdCall";
		$results = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($results) > 0) {
    // output data of each row
			while($row = mysqli_fetch_assoc($results)) { 
				$n = $row['ProdName'];
				$p = $row['ProdPrice'];
			}
		}


		$sql = "INSERT INTO orders ( FirstName, LastName, Address, Whenn, Province, Email, Mobile, product, price, uName) VALUES ('$fn', '$ln', '$Client_add', '$Client_date', '$Client_prov',  '$em', '$phone', '$n', '$p', '$uname')";

		$sql2 = "INSERT INTO transactions ( Name, Content, info) VALUES ('$fn $ln', 'just ordered $n', 'for a price of $p')";

		if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2))
		{  
			?>
			<center>
				<div class="page-wrapper">
					<div class="login-wrap">
						<div class="card-body">
							<div class="typo-headers">
								<h1 class="pb-2 display-4">Wait until your order is dispatched!</h1>
								<a href="../../../index.php">
									<button type="button" class="btn btn-outline-success btn-lg btn-block">Done</button>
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
}}
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