<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function goBack() {
			window.history.back();
			window.history.reload();
		}
	</script>
	<link rel="shortcut icon" href="../biglogo.png" type="image/x-icon">
	<title>Message Sent</title>
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mura";

	$a = $_POST['mes'];
	$b = $_POST['fifi'];
	$c = $_POST['pw'];





	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
	{
		die("Error: ". mysqli_connect_error());
	}
// FOR LAYOUT
	if (isset($_POST['btnLayoutSend'])) {
  	// Get image name
		$litrato = $_FILES['layoutPic']['name'];

  	// image file directory
		$target = "images/".basename($litrato);
		if (move_uploaded_file($_FILES['layoutPic']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
	}


	$sql = "INSERT INTO $b (Content, Sender, iDate, iTime, layout) VALUES ('$a', '0', now(), now(), '')";
	$results = mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) {
		?>
		<div>
			<center>
				<h3>Your message was succesfully sent.</h3>
				<?php echo "<h5><a href='index.php?UNli=". $b ."&PWli=". $c ."'>OK</a></h5>"  ?>

			</center>
		</div>
		<?php 
	} else {
		echo "An error occured!" . mysqli_error($conn);
	}



	mysqli_close($conn);

	?>
</body>
</html>