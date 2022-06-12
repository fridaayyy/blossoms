<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mura";

$Admin_User = $_GET['user'];
$Admin_Pass = $_GET['password'];
$cryptUser = bin2hex($Admin_User);
$cryptPass = bin2hex($Admin_Pass);


$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
 die("Error: ". mysqli_connect_error());
} 

$sql = "SELECT * FROM admin WHERE (UserName = '$cryptUser') AND (Password = '$cryptPass')";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($results)) { 

    $fname = $row['FirstName'];
    $lname = $row['LastName'];
    $u = $row['UserName'];
    $p = $row['Password'];
    $i = $row['img'];
    $em = $row['Email'];
    $id = $row['adminID'];
    echo " "
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
        <title><?php echo $fname." ". $lname; ?></title>

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
        <div class="page-wrapper">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop3 d-none d-lg-block">
                <div class="section__content section__content--p35">
                    <div class="header3-wrap">
                        <div class="header__logo">
                            <a href="#">
                                <img src="headlogo.png" alt="CoolAdmin" />
                            </a>
                        </div>
                        <div class="header__navbar">
                            <ul class="navbar__list nav" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#1home" role="tab" aria-controls="1home" aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#1profile" role="tab" aria-controls="1profile" aria-selected="false">Records</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#1contact" role="tab" aria-controls="1contact" aria-selected="false">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  target="new" href="messages/index.php?read=ej">My Messages</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header__tool">
                            <div class="header-button-item has-noti js-item-menu">
                                <i class="zmdi zmdi-notifications"></i>
                                <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                    <div class="notifi__title">
                                        <p>Your Notifications</p>
                                    </div>
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
                                 $sql = "SELECT * FROM transactions ORDER BY TransID DESC LIMIT 5";
                                 $results = mysqli_query($conn, $sql);

                                 if (mysqli_num_rows($results) > 0) {
                // output data of each row
                                  while($row = mysqli_fetch_assoc($results)) {
                                    ?>
                                    <div class="notifi__item">
                                        <div class="content">
                                            <p>
                                                <?php echo $row['Name']." ". $row['Content'] . " <b>" . $row['info']."</b>"; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }

                            ?>

                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item js-item-menu">

                    </div>
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <?php echo "<img src='images/".$i."'>"; ?>
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#"><?php echo $fname." ". $lname; ?></a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <?php echo "<img src='images/".$i."'>"; ?>
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#"><?php echo $fname." ". $lname; ?></a>
                                        </h5>
                                        <span class="email"><?php echo $em; ?></span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="./">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- END HEADER DESKTOP-->

            <!-- HEADER MOBILE-->
            <header class="header-mobile header-mobile-2 d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="headlogo.png" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="navbar-mobile">
                    <div class="container-fluid">
                        <ul class="navbar-mobile__list nav list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#1home" role="tab" aria-controls="1home" aria-selected="true">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#1profile" role="tab" aria-controls="1profile" aria-selected="false">Records</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#1contact" role="tab" aria-controls="1contact" aria-selected="false">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  href="messages/index.php?read=ej" target="new" aria-selected="false">Messages</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="sub-header-mobile-2 d-block d-lg-none">
                <div class="header__tool">
                   <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <?php echo "<img src='images/".$i."'>"; ?>
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#"><?php echo $fname." ". $lname; ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <?php echo "<img src='images/".$i."'>"; ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?php echo $fname." ". $lname; ?></a>
                                    </h5>
                                    <span class="email"><?php echo $em; ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END HEADER MOBILE -->

                        <!-- PAGE CONTENT-->
                        <div class="page-content--bgf7">

                            <div class="">
                              <div class="section__content section__content--p30">

                               <div class="tab-content pl-3 p-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="1home" role="tabpanel" aria-labelledby="home-tab">
                                    <h1>Dashboard</h1>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>Hi, <?php echo $fname."!"; ?></h4>
                                            </div>
                                            <div class="card-body">

                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="2home-tab" data-toggle="tab" href="#2home" role="tab" aria-controls="home" aria-selected="true">Transactions</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="2profile-tab" data-toggle="tab" href="#2profile" role="tab" aria-controls="profile" aria-selected="false">Customers</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="2contact-tab" data-toggle="tab" href="#2contact" role="tab" aria-controls="contact" aria-selected="false">Sales</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content pl-3 p-1" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="2home" role="tabpanel" aria-labelledby="home-tab">
                                                        <h3>Happenings around MURA Blossoms eMarket</h3>
                                                        <?php 
                                                        $sql = "SELECT * FROM transactions ORDER BY TransID DESC";
                                                        $results = mysqli_query($conn, $sql);

                                                        if (mysqli_num_rows($results) > 0) {
                // output data of each row
                                                          while($row = mysqli_fetch_assoc($results)) {
                                                            ?>
                                                            <div class="notifi__item">
                                                                <div class="content">
                                                                    <p>
                                                                        <?php echo $row['Name']." ". $row['Content'] . " <b>" . $row['info']."</b>"; ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <div class="tab-pane fade" id="2profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <h3>Customers</h3>
                                                    <p>Some content here.</p>
                                                </div>
                                                <div class="tab-pane fade" id="2contact" role="tabpanel" aria-labelledby="contact-tab">
                                                    <h3>Sales</h3>
                                                    <p>Some content here.</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="1profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h1>Your records</h1>
                                <div class="col-md-6">
                                    <div class="card border border-secondary">
                                        <div class="card-header">
                                            <strong class="card-title">Add Product</strong>
                                        </div>
                                        <div class="card-body">
                                            <?php 
                                            echo "<form action='addprod.php' method='POST' enctype='multipart/form-data'>
                                            <div class = 'row'>
                                            <div class='col-md-6'>
                                            <div class='form-group'>
                                            <label>Product Name</label>
                                            <input class='au-input au-input--full' type='text' name='pname' placeholder='Enter product name...' Required>
                                            </div>
                                            </div>

                                            <div class='col-md-6'>
                                            <div class='form-group'>
                                            <label>Product Price</label>
                                            <input class='au-input au-input--full' type='text' name='pprice' placeholder='Enter product price...' Required>
                                            </div>
                                            </div>

                                            <div class='col-md-6'>
                                            <div class='form-group'>
                                            <label>Product Description</label>
                                            <input class='au-input au-input--full' type='text' name='pdesc' placeholder='Enter product price...' Required>
                                            </div>
                                            </div>

                                            <div class='col-md-6'>
                                            <div class='form-group'>
                                            <label>Product Photo</label>
                                            <input class='au-input au-input--full' type='file' name='pphoto' Required>
                                            </div>
                                            </div>

                                            <div class='col-md-6' hidden>
                                            <div class='form-group'>
                                            <label>Email</label>
                                            <input class='au-input au-input--full' type='text' name='user' value='".$Admin_User."' readonly>
                                            <input class='au-input au-input--full' type='text' name='pass' value='".$Admin_Pass."' readonly>
                                            </div>
                                            </div>

                                            <div class='col-md-12'>
                                            <div class='form-group'>
                                            <button class='au-btn au-btn--block au-btn--green m-b-20' type='submit' name='btnaddprod'>Add this new product</button>
                                            </div>
                                            </div>
                                            </div>
                                            </form>";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="1contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h1>Your Profile</h1>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Hi, <?php echo $fname."!"; ?></h4>
                                        </div>
                                        <div class="card-body">

                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="2home-tab" data-toggle="tab" href="#3home" role="tab" aria-controls="home" aria-selected="true">Your Information</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="2profile-tab" data-toggle="tab" href="#3profile" role="tab" aria-controls="profile" aria-selected="false">Edit Information</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                                <div class="tab-pane fade show active" id="3home" role="tabpanel" aria-labelledby="home-tab">
                                                    <h3>This is your information</h3>
                                                    <?php 
                                                    echo "<div class = 'row'>
                                                    <div class='col-md-6'>
                                                    <div class='form-group'>
                                                    <label>First Name</label>
                                                    <input class='au-input au-input--full' type='text' name='user' value='".$fname."' readonly>
                                                    </div>
                                                    </div>

                                                    <div class='col-md-6'>
                                                    <div class='form-group'>
                                                    <label>Last Name</label>
                                                    <input class='au-input au-input--full' type='text' name='user' value='".$lname."' readonly>
                                                    </div>
                                                    </div>

                                                    <div class='col-md-6'>
                                                    <div class='form-group'>
                                                    <label>Username</label>
                                                    <input class='au-input au-input--full' type='text' name='user' value='".$Admin_User."' readonly>
                                                    </div>
                                                    </div>

                                                    <div class='col-md-6'>
                                                    <div class='form-group'>
                                                    <label>Password</label>
                                                    <input class='au-input au-input--full' type='password' name='user' value='".$Admin_Pass."' readonly>
                                                    </div>
                                                    </div>

                                                    <div class='col-md-6'>
                                                    <div class='form-group'>
                                                    <label>Email</label>
                                                    <input class='au-input au-input--full' type='text' name='user' value='".$em."' readonly>
                                                    </div>
                                                    </div>

                                                    <div class='col-md-6'>
                                                    <div class='form-group'>
                                                    <img src='images/".$i."'>
                                                    </div>
                                                    </div>


                                                    </div>";
                                                    ?>
                                                </div>
                                                <div class="tab-pane fade" id="3profile" role="tabpanel" aria-labelledby="profile-tab">
                                                    <form action="updateAdmin.php" method="POST">  
                                                        <h3>Edit</h3>
                                                        <?php 
                                                        echo "<div class = 'row'>
                                                        <div class='col-md-6'>
                                                        <div class='form-group'>
                                                        <label>First Name</label>
                                                        <input class='au-input au-input--full' type='text' name='fn' value='".$fname."' readonly>
                                                        </div>
                                                        </div>

                                                        <div class='col-md-6'>
                                                        <div class='form-group'>
                                                        <label>Last Name</label>
                                                        <input class='au-input au-input--full' type='text' name='ln' value='".$lname."' readonly>
                                                        </div>
                                                        </div>

                                                        <div class='col-md-6'>
                                                        <div class='form-group'>
                                                        <label>Username</label>
                                                        <input class='au-input au-input--full' type='text' name='user' value='".$Admin_User."' Required>
                                                        </div>
                                                        </div>

                                                        <div class='col-md-6'>
                                                        <div class='form-group'>
                                                        <label>Password</label>
                                                        <input class='au-input au-input--full' type='password' name='pass' value='".$Admin_Pass."' Required>
                                                        </div>
                                                        </div>

                                                        <div class='col-md-6'>
                                                        <div class='form-group'>
                                                        <label>Email</label>
                                                        <input class='au-input au-input--full' type='text' name='email' value='".$em."' Required>
                                                        <input class='au-input au-input--full' type='text' name='key' value='".$id."' hidden>
                                                        </div>
                                                        </div>

                                                        <div class='col-md-6'>
                                                        <div class='form-group'>
                                                        <img src='images/".$i."'>
                                                        <button class='au-btn au-btn--block au-btn--green m-b-20' type='submit'>Save</button>
                                                        </div>
                                                        </div>


                                                        </div>";
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <?php 
            echo "";
        }
    }
    else
      { ?>

        <div style="padding: 100px;">
          <h1 style="font-size: 5em; text-align: center; margin-top: 100px; font-family: Microsoft Sans Serif;">Login Error!</h1>
          <h3 style=" text-align: center; margin-top: 100px; font-family: Microsoft Sans Serif;">Please be careful when entering your Username and Password.</h3>
          <br> <br>
          <center>
            <a href = "index.php" style="font-weight: bold; font-family: Microsoft Sans Serif;">Try Again?</a>
        </center>
    </div>

    <?php 
}
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