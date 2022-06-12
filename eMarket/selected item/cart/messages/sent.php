<!DOCTYPE html>
<html>
<head>
	<title>Message Sent</title>
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mura";

	$a  = $_GET['toSend'];
	$b = $_GET['textbox'];

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
	{
		die("Error: ". mysqli_connect_error());
	}


	$sql = "INSERT INTO $a (Content, Sender, iDate, iTime) VALUES ('$b', '1', now(), now())";
	$results = mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) {
		?>
		<div>
			<center>
				<h3>Your message was succesfully sent.</h3>
				<?php echo "<h5><a href='index.php?read=".$a."'>OK</a></h5>"  ?>
				
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