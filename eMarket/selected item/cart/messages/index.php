<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mura";


$a = $_GET['read'];
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="au theme template">
	<meta name="author" content="Hau Nguyen">
	<meta name="keywords" content="au theme template">

	<!-- Title Page-->
	<title>Messages</title>

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
</head>
<body class="animsition">
	<div class="container page-content--bgf7">
		<div class="row">
			<div class="col-md-3">
				<h3>People</h3>
				<?php 

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				if(!$conn)
				{
					die("Error: ". mysqli_connect_error());
				}

				$sql = "SELECT * FROM customer_register";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
    // output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						echo "<form method = 'GET' action = './'>";
						echo "<p><input type='text' name='read' value='".$row['Username']."' hidden>";
						echo "<input type='Submit' class='btn'style='width: 100%;' value='".$row['FirstName']." " .$row['LastName']."'></p>";
						echo "</form>";
					}

				} else {
					echo "No one messaged you";
				}
				?>
			</div>
			<div class="col-md-9">
				<?php
				$sql2 = "SELECT * FROM $a WHERE (MessageID % 2 = 0)";
				$result2 = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2) > 0) {
				$date = $row['iDate'];
				$oras = $row['iTime'];
				// output data of each row
				echo "<form name = 'frmSend' method = 'GET' action = 'sent.php'>";
					echo "<table class='table'>";
						echo "<thead>";
							echo "<tr>";
								echo "<th colspan = 3 style = 'text-align: center;'> <h3>" . $a. "</h3> </th>";
							echo "</tr>";
						echo "</thead>";
						while($row = mysqli_fetch_assoc($result2)) {
						echo "<tbody>";	
							if ($row['Sender'] == 1) {
							echo "<tr>";
								echo "<td style = 'background-color: #13b713; color: white; text-align: right;'>" . $row["Content"]. "<img src='http://localhost/mura/customer/images/".$row["layout"]."'> &nbsp <b><< You</b> <BR> <sub>". date("M d, Y", strtotime($date))." ". date("h:i A", strtotime($oras))."</sub> </td>";
							echo "</tr>";
						}
						else {
						echo "<tr>";
							echo "<td style = 'background-color: #c5ccc5;'><b>$a >></b> &nbsp" . $row["Content"]. "<img src='http://localhost/mura/customer/images/".$row["layout"]."'><BR> <sub>". date("M d, Y D", strtotime($date))." ". date("h:i A", strtotime($oras))."</sub> </td>";
						echo "</tr>";
					}
					

					

				}
				echo "<input type='text' name='toSend' value='". $a ."' hidden>";
				echo "<td><input type='text' name='textbox' class='form-control' placeholder='type message here...' style = 'width: 80%; float: left;' required>
					<input type='submit' name='send' value='Send' style = 'width: 15%; float: right;' class = 'btn btn-primary'></td>";
				echo "</tbody>";
			echo "</table></form>";
		echo "</div> </div> </div>";
	} 
	else {
	echo "<form action = 'http://localhost/cliente//userlog/index.html' method = 'GET'>" ?>

		<div style="padding: 100px;">
			<h1 style="font-size: 3em; text-align: center; margin-top: 100px; color: #83bcae;">No conversations yet with <?php echo $a; ?></h1>
		</div>

		<?php  "</form>";
	}

	mysqli_close($conn);

	?>
</div>
</div>
</div>









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