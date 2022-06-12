<html>
<head>
	<!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="generator" content="Mobirise v4.6.7, mobirise.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
	<meta name="description" content="">
	<title>Create Admin- AMMAN</title>
	<link rel="stylesheet" href="assetss/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assetss/tether/tether.min.css">
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assetss/theme/css/style.css">
	<link rel="stylesheet" href="assetss/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assetss/tether/tether.min.css">
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assetss/theme/css/style.css">
	<title> </title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mura";

	$fname = $_POST['fn'];
	$lname = $_POST['ln'];
	$uname = $_POST['user'];
	$pwd = $_POST['pass'];
	$tele = $_POST['tele'];
	$em = $_POST['email'];
	$sA = $_POST['iForgot'];
	$sQ = $_POST['iAnswer'];
	$cryptAns = bin2hex($sQ);
	$cryptPass = bin2hex($pwd);
	$uFN = ucfirst($fname);
	$uLN = ucfirst($lname);

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
	{
		die("Error: ". mysqli_connect_error());
	}


	

	$sql = "INSERT INTO customer_register ( FirstName, LastName, Username, Password, Email, Mobile, SecuQues, SecuAns) VALUES ('$uFN', '$uLN', '$uname', '$cryptPass', '$em', '$tele', '$sA', '$cryptAns')";

	$sql2 = "INSERT INTO transactions ( Name, Content, info) VALUES ('New Customer', 'just created an account named as', '$fname $lname')";
	$sql3 = "CREATE TABLE $uname(
	MessageID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	Content VARCHAR(255) NOT NULL,
	Sender INT,
	iDate DATE,
	iTime TIME,
	layout MEDIUMTEXT)";

	if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2) && mysqli_query($conn, $sql3))
	{  
		echo "<section class='header5 cid-qRI78zWxeZ mbr-fullscreen' id='header5-5'>
		<div class='container'>
		<div class='row justify-content-center'>
		<div class='mbr-black col-md-10'>
		<h1 class='mbr-section-title align-center pb-3 mbr-fonts-style display-4'>REGISTERED</h1>
		<div class='mbr-section-btn align-center'><a href='LOGIN.php'><button class='btn btn-md btn-black-outline display-4' >Back</button></a></div>
		</div>
		</div>
		</div>
		</section>";
	}

	else
	{
		echo "Error: " . mysqli_error($conn);
	}

	mysqli_close($conn);

	?>
	<script src="assetss/popper/popper.min.js"></script>
	<script src="assetss/tether/tether.min.js"></script>
	<script src="assetss/bootstrap/js/bootstrap.min.js"></script>
	<script src="assetss/smoothscroll/smooth-scroll.js"></script>
	<script src="assetss/theme/js/script.js"></script>
</body>
</html>