
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../biglogo.png" type="image/x-icon">
   <title>MURA Blossoms</title>
   <!-- BOOTSTRAP STYLES-->
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <!-- FONTAWESOME ICONS STYLES-->
   <link href="assets/css/font-awesome.css" rel="stylesheet" />
   <!--CUSTOM STYLES-->
   <link href="assets/css/style.css" rel="stylesheet" />
   <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mura";

    $Admin_User = $_GET['UNli'];
    $Admin_Pass = $_GET['PWli'];
    $cryptPass = bin2hex($Admin_Pass);


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
    {
     die("Error: ". mysqli_connect_error());
 } 

 $sql = "SELECT * FROM customer_register WHERE (Username = '$Admin_User') AND (Password = '$cryptPass')";
 $results = mysqli_query($conn, $sql);

 if (mysqli_num_rows($results) > 0) {
    // output data of each row
  while($row = mysqli_fetch_assoc($results)) { 
    echo " "

    ?>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="#">MURA Blossoms
                    <sub><i>Customer</i></sub>
                </a>
            </div>

            <div class="notifications-wrapper">
                <ul class="nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../login.php"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mura";

        $Admin_User = $_GET['UNli'];
        $Admin_Pass = $_GET['PWli'];
        $cryptPass = bin2hex($Admin_Pass);


        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!$conn)
        {
         die("Error: ". mysqli_connect_error());
     } 

     $sql = "SELECT * FROM customer_register WHERE (Username = '$Admin_User') AND (Password = '$cryptPass')";
     $results = mysqli_query($conn, $sql);

     if (mysqli_num_rows($results) > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($results)) { 
        $fn = $row['FirstName'];
        $ln = $row['LastName'];
        $em = $row['email'];
        $phone = $row['Mobile'];
        $un = $row['Username'];
    }}

    ?>
    <nav  class="navbar-default navbar-side nav-pills" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <div class="panel-body">
                    <ul class="nav">
                       <li>
                        <a  href="#"> <strong> <?php echo $fn." ". $ln; ?> </strong></a>
                    </li>
                    <li class="active"><a href="#home-pills" data-toggle="tab">Profile</a>
                    </li>
                    <li class=""><a href="#messages-pills" data-toggle="tab">Messages</a>
                    </li>
                </ul>


            </div>

        </ul>
    </div>

</nav>
<!-- /. SIDEBAR MENU (navbar-side) -->
<div id="page-wrapper" class="page-wrapper-cls">
    <div id="page-inner">

        <div class="tab-content">

            <div class="tab-pane fade active in" id="home-pills">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Welcome, <?php echo $fn."!"; ?></h1>
                    </div>
                </div>

                <h4>My Profile</h4>
                <div class="row">
                    <div class="col-md-4">
                        <form action="editCustomer.php" method="POST">
                            <p style="font-weight: bold;" >First Name: </p>
                            <input type="text" name="" <?php echo "value='".$fn."'"; ?>>
                            <p style="font-weight: bold;" >Last Name: </p>
                            <input type="text" name="" <?php echo "value='".$ln."'"; ?>>
                            <p style="font-weight: bold;" >Email: </p>
                            <input type="text" name="" <?php echo "value='".$em."'"; ?>>
                            <p style="font-weight: bold;" >Mobile: </p>
                            <input type="text" name="" <?php echo "value='".$phone."'"; ?>>
                            <p style="font-weight: bold;" >Username: </p>
                            <input type="text" name="" <?php echo "value='".$un."'"; ?>>
                            <p style="font-weight: bold;" >Password: </p>
                            <input type="password" name="" <?php echo "value='".$Admin_Pass."'"; ?>>
                            <br>
                            <input type="submit" name="" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="messages-pills">
                <div class="row">

                    <div class="col-md-6">
                        <form action="sendLayout.php" method="POST" enctype="multipart/form-data">
                            <h4>Submit your layout now</h4>
                            <?php 
                            echo "<div class='form-group'>
                            <div hidden>
                            <input type='text' class='form-control' name='pw' data-form-field='Name' hidden id='name-form1-a' value = ". $Admin_Pass . ">
                            <input type='text' class='form-control' name='fifi' data-form-field='Name' hidden id='name-form1-a' value = ". $Admin_User . ">
                            </div>
                            </div>";
                            ?>
                            <input type="file" name="layoutPic" class="form-control">
                            <input type="submit" name="btnLayoutSend" class="btn btn-primary" value="Send">
                        </form>
                    </div>

                    <div class="col-md-6">
                        <h4>Message Us!</h4>
                        <?php 


                        $sql = "SELECT * FROM $un WHERE (MessageID % 2 = 0)";
                        $result = mysqli_query($conn, $sql);

                        echo "<div class='tile'>
                        <div class='tile-body'>";
                        echo "<table class='table table-hover table-bordered' id='sampleTable'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th colspan = 3 style = 'text-align: center;'> <h4> Your conversation with MURA Blossoms eMarket.</h4> </th>";
                        echo "</tr>";
                        echo "</thead>";

                        if (mysqli_num_rows($result) > 0) {
    // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                              $petsa = $row['iDate'];
                              $oras = $row['iTime'];
                              echo "<tbody>"; 
                              if ($row['Sender'] == 0) {
                                echo "<tr>";
                                echo "<td style = 'background-color: #13b713; color: white; text-align: right;'>" . $row["Content"]. " &nbsp 
                                <img src='images/".$row['layout']."' style='width: 100%;'>
                                <b><< You</b> <BR> <sub>". date("M d, Y", strtotime($petsa))." ". date("h:i A", strtotime($oras)) ."</sub> </td>";
                                echo "</tr>";
                            }
                            else {
                                echo "<tr>";
                                echo "<td style = 'background-color: #c5ccc5; text-align: left'><b>AMMAN >></b> &nbsp " . $row["Content"]. "<BR> <sub>". date($row['iDate'])." ". $row['iTime']."</sub> </td>";
                                echo "</tr>";
                            }

                            echo "</tbody>";

                        }
                        echo "</table>";
                    } else {
                        echo "<td>0 results</td>";
                    }


                    echo "
                    <form action='sent.php' method='POST'>
                    <div class='form-group'>
                    <div hidden>
                    <input type='text' class='form-control' name='pw' data-form-field='Name' hidden id='name-form1-a' value = ". $Admin_Pass . ">
                    <input type='text' class='form-control' name='fifi' data-form-field='Name' hidden id='name-form1-a' value = ". $Admin_User . ">
                    </div>
                    <input type='text' class='form-control' id='pwd' placeholder='Send a message?' name='mes' required=>
                    <input type='Submit' name='btnSend' value='Send' class='btn btn-primary'>
                    </div>
                    </form>";

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<footer >
    &copy; 2018 MURA Blossoms eMarket |
</footer>
<?php 
echo "";
}}
else
{
    ?>
    <center>
        <div class="col-md-4 col-sm-4" style="height: 100%; width: 100%;">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h2>MURA Blossoms eMarket</h2>
                </div>
                <div class="panel-body" style="height: 30%; width: 30%;">
                    <form action="index.php" method="GET">
                        <hr>
                        <h3>
                            Enter your <span class="hilighter" data-component-list="HilightComponent">username</span>
                        </h3>
                        <p>
                            <input type="text" name="UNli" placeholder="Username goes here..." class="form-control" autofocus="" required="">
                        </p>
                        <h3>
                            Enter your <span class="hilighter"  data-component-list="HilightComponent">password</span>
                        </h3>
                        <p>
                            <input  class="form-control" type="password" name="PWli" placeholder="Password goes here..." required="">
                        </p>
                        <hr>
                        <input type="submit" class="btn btn-danger" value="Login">
                        <hr>
                    </form>
                </div>
                <div class="panel-footer">
                    <h4>Login error! Please enter your information correctly!</h4>
                </div>
            </div>
        </div>
    </center>
    <?php
}
?>
<!-- /. FOOTER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
