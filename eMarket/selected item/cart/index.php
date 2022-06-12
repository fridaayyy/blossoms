<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mura";





$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
   die("Error: ". mysqli_connect_error());
} 
$a = $_POST['key'];

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

    <!-- pag wala pang laman yung table ng admin -->
    <div class="page-wrapper">
        <div style="background: linear-gradient(to bottom, #b3c3f8, #607edd);">
            <div class="container">
                <div class="row">
                    <?php 
                    $a = $_POST['key'];
                    $sql = "SELECT * FROM products WHERE productID = $a";
                    $results = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($results) > 0) {
    // output data of each row
                      while($row = mysqli_fetch_assoc($results)) { 

                        $a = $row['ProdName'];
                        $b = $row['ProdPrice'];
                        $c = $row['ProdDesc'];
                        $d = $row['ProdPhoto'];
                        $e = $row['productID'];

                        ?>
                        <div class="login-content col-md-6">
                            <div class="login-logo">
                                <p id="gradientmoto" style="font-weight: bolder; font-size: 1em;">This is your order summary</p>
                            </div>
                            <div class="login-form">
                                <div class="form-group">
                                    <h1><?php echo $a;?></h1>
                                    <?php echo "<img src='http://localhost/adminmura/images/".$d."'>"; ?>
                                    <h2>₱<?php echo $b; }}?>.00</h2>
                                </div>
                            </div>
                        </div>


                        <div class="login-content col-md-6">
                            <div class="login-logo">
                                <p id="gradientmoto" style="font-weight: bolder; font-size: 2em;">MURA Blossoms eMarket</p>
                                <p id="gradientmoto" style="font-weight: bolder; font-size: 1em;">Please fill up the form</p>
                            </div>
                            <div class="login-form">
                                <form action="submit order.php" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <h1><?php echo "<input type='text' name='key' value='".$e."' hidden>";?></h1>
                                        <input class="au-input au-input--full" type="text" name="user" placeholder="Enter username" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="au-input au-input--full" type="password" name="pass" placeholder="Enter password" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>When to deliver?</label>
                                        <input class="au-input au-input--full" type="date" name="datedeliver" placeholder="Enter address" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Where to deliver?</label>
                                        <input class="au-input au-input--full" type="text" name="address" placeholder="Enter address" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Province</label>
                                        <input class="au-input au-input--full" type="text" name="province" placeholder="Enter province" required="">
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="btnNewAdmin">Submit</button>

                                </form>
                            </div>
                        </div>
                        <!-- totalization of price -->

                    </div>
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
<!-- end document-->