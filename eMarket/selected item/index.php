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



?>
<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  <title>MB eMarket</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section content5 cid-r7MBqO36cx mbr-parallax-background" id="content5-1">





    <div class="container">
      <div class="media-container-row">
        <div class="title col-12 col-md-8">
          <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
          MURA Blossoms eMarket</h2>



        </div>
      </div>
    </div>
  </section>

  <section class="engine"><a href="https://mobirise.ws">Mobirise</a></section><section class="counters2 counters cid-r7Myv7NX3T" id="counters2-0">





    <div class="container pt-4 mt-2">
      <div class="media-container-row">
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
            <div class="media-block" style="width: 50%;">
              <h2 class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">
                <?php echo $a; ?>
              </h2>
              <h3 class="mbr-section-subtitle pb-5 align-left mbr-fonts-style display-5">
                <?php echo $c; ?></h3>
                <div class="mbr-figure">
                  <?php echo "<img src='http://localhost/adminmura/images/".$d."'>"; ?>
                </div>
              </div>
              <div class="cards-block">
                <div class="cards-container">
                  <div class="card px-3 align-left col-12 col-md-6">
                    <div class="panel-item p-3">
                      <div class="card-img pb-3">
                        <span class="mbr-iconfont pr-2 mbri-sale" style="font-size: 30px;"></span>
                        <h3 class=" py-3 mbr-fonts-style display-5">₱</h3>
                        <h3 class="count py-3 mbr-fonts-style display-5">
                          <?php echo $b.".00"; ?></h3>
                          <h3 class=" py-3 mbr-fonts-style display-5">.00</h3>
                        </div>
                        <div class="card-text">
                          <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">This item is eligible for FREE Express Delivery (delivery within 3 hours)</h4>
                          <p class="mbr-content-text mbr-fonts-style display-7">- A simple and joyful bouquet full of sunshine
                            <br>
                            <br>- A lovely gift to thank someone or wish them well
                            <br>
                            <br>- Yellow Gerberas and mums beautifully arranged and nicely wrapped</p>
                          </div>
                        </div>
                      </div>
                      <form action="cart/" method="POST">
                        <?php echo "<input type='text' mbr-section-title pb-3 align-left mbr-fonts-style display-2 name='key' value='".$e."' hidden>"; ?>



                      </div>
                      <div class="mbr-section-btn text-center">

                        <button type="submit" class="btn btn-secondary display-4">
                          Get this
                        </button>
                        <?php }} ?>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </section>


            <script src="assets/web/assets/jquery/jquery.min.js"></script>
            <script src="assets/popper/popper.min.js"></script>
            <script src="assets/tether/tether.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/smoothscroll/smooth-scroll.js"></script>
            <script src="assets/parallax/jarallax.min.js"></script>
            <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
            <script src="assets/theme/js/script.js"></script>


          </body>
          </html>