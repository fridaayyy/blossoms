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
  <section class="carousel slide cid-r7KQ4ddvkt" data-interval="false" id="slider1-2">



    <div class="full-screen">
      <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false">
        <ol class="carousel-indicators">
          <li data-app-prevent-settings="" data-target="#slider1-2" data-slide-to="0">
          </li>
          <li data-app-prevent-settings="" data-target="#slider1-2" data-slide-to="1">
          </li>
          <li data-app-prevent-settings="" data-target="#slider1-2" class=" active" data-slide-to="2">
          </li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/img-7216-2000x1333.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <img src="assets/images/img-7216-2000x1333.jpg">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-center">
                    <h2 class="mbr-fonts-style display-1">Welcome to<br>MURA Blossoms<br>eMarket</h2>
                    <h2 class="mbr-fonts-style display-5">The buyers must have an account first before proceeding.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/img-7382-2000x1333.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <img src="assets/images/img-7382-2000x1333.jpg">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-left">
                    <h2 class="mbr-fonts-style display-1">Pick any flower you want we had.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slider-fullscreen-image " data-bg-video-slide="false" style="background-image: url(assets/images/img-7237-2000x1333.jpg);">
            <div class="container container-slide">
              <div class="image_wrapper">
                <img src="assets/images/img-7237-2000x1333.jpg">
                <div class="carousel-caption justify-content-center">
                  <div class="col-10 align-right">
                    <h2 class="mbr-fonts-style display-1">Beautiful and Fresh flowers at lovable price.</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-2">
          <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-2">
          <span aria-hidden="true" class="mbri-right mbr-iconfont">
          </span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </section>

  <section class="features8 cid-r7KPks9LFy mbr-parallax-background" id="features8-1">





    <div class="container">
      <div class="row">

        <?php 
        $sql = "SELECT * FROM products";
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
            
            <div class="card  col-12 col-md-4">
              <form action="selected item/" method="POST">
                <div class="card-img">
                  <?php echo "<img src='../../adminmura/images/".$d."'>"; ?>
                </div>
                <div class="card-box align-center">
                  <h4 class="card-title mbr-fonts-style display-7">
                    <?php echo "<h3 style='color: white;'>".$a."</h3>"; ?>
                    <?php echo "<h6 style='color: white;'>₱".$b.".00</h6>"; ?>
                  </h4>
                  <p class="mbr-text mbr-fonts-style display-7">
                    <?php echo $c; ?>
                    <?php echo "<input type='text' name='key' value='".$e."' hidden>"; ?>
                  </p>
                  <div class="mbr-section-btn text-center">
                    <button type="submit" class="btn btn-secondary display-4">
                      I like this!
                    </button>
                  </div>
                </div>
              </form>
            </div>
            
            <?php 
          }} ?>





        </div>
      </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/parallax/jarallax.min.js"></script>
    <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/slidervideo/script.js"></script>


  </body>
  </html>