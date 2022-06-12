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

	$fname = $_POST['fn'];
	$lname = $_POST['ln'];
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	$em = $_POST['email'];
	$cryptUser = bin2hex($uname);
	$cryptPass = bin2hex($pwd);
	$uFN = ucfirst($fname);
	$uLN = ucfirst($lname);

	// Initialize message variable
	$msg = "";

  // If upload button is clicked ...
	if (isset($_POST['btnNewAdmin'])) {
  	// Get image name
		$litrato = $_FILES['FaceID']['name'];

  	// image file directory
		$target = "images/".basename($litrato);




		if (move_uploaded_file($_FILES['FaceID']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
	}



	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
	{
		die("Error: ". mysqli_connect_error());
	}


	

	$sql = "INSERT INTO admin ( FirstName, LastName, UserName, Password, img, Email) VALUES ('$uFN', '$uLN', '$cryptUser', '$cryptPass', '$litrato',  '$em')";

	$sql2 = "INSERT INTO transactions ( Name, Content, info) VALUES ('Your company', 'just added a new admin employee into your company named', '$uFN $uLN')";

	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2))
	{  
		?>
		<center>
		<div class="page-wrapper">
			<div class="login-wrap">
				<div class="card-body">
					<div class="typo-headers">
						<h1 class="pb-2 display-4">Registered!</h1>
						<a href="index.php">
							<button type="button" class="btn btn-outline-success btn-lg btn-block">Success</button>
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