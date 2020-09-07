<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->

<?php 

include("path.php");
include(ROOT_PATH . "/database/db.php"); 

$Gateaus = selectAll($table2);
$Gateauss = selectAllL($table2);


?>
<!DOCTYPE html>
<html lang="zxx">

<!--head -->
<?php include(ROOT_PATH . "/inclouds/head.php"); ?>
<!--head -->

<body>
  <div class="main-top" id="home">
    <div class="headder-top">
      <!-- nav -->
      <?php include(ROOT_PATH . "/inclouds/nav.php"); ?>
      <!-- //nav -->
    </div>

    <!-- banner -->
    <div class="container">
      <div class="row main-banner">
        <div class="col-lg-4 col-md-5 style-banner ">
          <div class="banner-rotated">
            <h4>
              <span> F</span>
            </h4>
            <h4>
              <span> r</span>
            </h4>
            <h4>
              <span> e</span>
            </h4>
            <h4>
              <span> s</span>
            </h4>
            <h4>
              <span> h</span>
            </h4>
          </div>
          <div class="banner-rotated">
            <h4>
              <span> C</span>
            </h4>
            <h4>
              <span> a</span>
            </h4>
            <h4>
              <span> k</span>
            </h4>
            <h4>
              <span> e</span>
            </h4>
            <h4>
              <span> s</span>
            </h4>
          </div>
          <h5 class="mt-lg-4 mt-3">Delicious Cakes for Your Special Event
          </h5>
        </div>
        <div class="col-lg-8 col-md-7 banner-imgs text-center">
          <div class="row no-gutters">
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb2.jpg" alt="news image" class="img-fluid">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb1.jpg" alt="news image" class="img-fluid ">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb3.jpg" alt="news image" class="img-fluid">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb5.jpg" alt="news image" class="img-fluid ">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb4.jpg" alt="news image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->

 <!-- about -->
  <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 title-right-side my-3">
          <div class="rotated-title">
            <h3 class="title mb-lg-4 mb-md-3 mb-2"> About</h3>
            <h6 class="title-sub">who are we</h6>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
          <span class="fa fa-bars mb-3" aria-hidden="true"></span>
          <h4>Recipes</h4>
          <div class="about-para-txt mt-2">
            <p>Lorem ipsum dolor sit amet eiusmod tempor incididunt ut labore et consectetur adipiscing</p>
          </div>
          <div class="view-buttn mt-md-4 mt-3">
            <a href="single.html" class="btn">Read More </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
          <span class="fa fa-diamond mb-3" aria-hidden="true"></span>
          <h4>Products</h4>
          <div class="about-para-txt mt-2">
            <p>Lorem ipsum dolor sit amet eiusmod tempor incididunt ut labore et consectetur adipiscing</p>
          </div>
          <div class="view-buttn mt-md-4 mt-3">
            <a href="single.html" class="btn">Read More </a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
          <span class="fa fa-birthday-cake mb-3" aria-hidden="true"></span>
          <h4>Cake Classes</h4>
          <div class="about-para-txt mt-2">
            <p>Lorem ipsum dolor sit amet eiusmod tempor incididunt ut labore et consectetur adipiscing</p>
          </div>
          <div class="view-buttn mt-md-4 mt-3">
            <a href="single.html" class="btn">Read More </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about -->

  <!-- Online Order -->
  <section class="advertise-count">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-6 col-md-6 fashion-collet-txt text-center">
          <h5>Online Order</h5>
          <h6 class="mt-lg-4 mt-3"> Get 25%/off</h6>
          <p class="mt-2">sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet sit amet, eiusmod tempor incididunt ut labore et
            consectetur adipiscing sed do eiusmod</p>
        </div>
        <div class="col-lg-6 col-md-6 text-center">
          <div class="order-show-w3ls">
            <h5> Order Now</h5>

            <ul class="mt-lg-4 mt-3">
              <li>
                <p>
                  <span>Call</span> +123 4567 890</p>
              </li>
              <li class="mt-lg-3 mt-2">
                <p>
                  <span> Email</span> +123 4567 890</p>
              </li>
            </ul>
            <div class="order-buttn mt-lg-4 mt-3">
              <a href="contact.html" class="btn">Order Now </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//Online Order -->

  <!-- service -->
  <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-3 col-md-4 my-3">
          <div class="rotated-title">
            <h3 class="title mb-lg-4 mb-md-3 mb-2">Service</h3>
            <h6 class="title-sub">What We dO</h6>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 service-grid-top position-relative my-3">
          <img src="images/bb1.jpg" alt="news image" class="img-fluid">
          <div class="ser-fashion-grid ser-fashion-wthree">
            <div class="about-icon mb-md-4 mb-3">
              <span class="fa fa-snowflake-o" aria-hidden="true"></span>
            </div>
            <div class="ser-sevice-grid">
              <h4 class="pb-3">Seasonal Pastries</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mid-row-grids">
        <div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
          <div class="ser-fashion-wthree">
            <div class="about-icon mb-md-4 mb-3">
              <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
            </div>
            <div class="ser-sevice-grid">
              <h4 class="pb-3">Best Service</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
          <div class="ser-fashion-wthree">
            <div class="about-icon mb-md-4 mb-3">
              <span class="fa fa-laptop" aria-hidden="true"></span>
            </div>
            <div class="ser-sevice-grid">
              <h4 class="pb-3">Online Order</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
          <div class="ser-fashion-wthree">
            <div class="about-icon mb-md-4 mb-3">
              <span class="fa fa-smile-o" aria-hidden="true"></span>
            </div>
            <div class="ser-sevice-grid">
              <h4 class="pb-3">Door Delivery</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 service-grid-wthree my-3">
          <div class="ser-fashion-wthree">
            <div class="about-icon mb-md-4 mb-3">
              <span class="fa fa-users" aria-hidden="true"></span>
            </div>
            <div class="ser-sevice-grid">
              <h4 class="pb-3">Event Catering</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //service -->

  <!-- menu -->
  <section class="collection py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
    
      <!--row 1-->
      <div class="row">
        <div class="col-lg-3 col-md-3 title-right-side my-3">
          <div class="rotated-title">
            <h3 class="title mb-lg-4 mb-md-3 mb-2">New Menu</h3>
            <h6 class="title-sub">Awesome Taste</h6>
          </div>
        </div>
        <div class="col-lg-4 col-md-3 collective-images position-relative">
          <img src="images/bb1.jpg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-5 col-md-5 collection-w3layouts my-3">
          <h4>Birthday Cake</h4>
          <p class="mt-2">sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, eiusmod tempor incididunt
            ut labore et consectetur adipiscing sed do eiusmod</p>
          <div class="view-buttn mt-lg-5 mt-md-4 mt-3">
            <a href="single.html" class="btn">Read More </a>
          </div>
        </div>
      </div>
      <!--// row 1-->

      
      <!--row 2-->
      <?php foreach($Gateauss as $key => $Gateau): ?>
      <div class="row mid-row-grids">
        <div class="col-lg-5 col-md-6 collective-images position-relative">
          <img src="<?php echo BASE_URL . "/images/lesGateau/" . $Gateau['gateauImage']; ?>" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-7 col-md-6 collection-w3layouts my-3">
          <h4><?php echo $Gateau['gateauName']; ?></h4>
          <p class="mt-2"> <?php echo html_entity_decode(substr($Gateau['gateauRecipes'], 0, 150 ) . '...'); ?> </p>
          <div class="view-buttn mt-lg-5 mt-md-4 mt-3">
            <a href="single.php?id=<?php echo $Gateau['id'] ;?>" class="btn">Read More </a>
          </div>
        </div>
      </div>
      <?php endforeach ;?>
      <!--// row 2-->

    
    </div>
  </section>
  <!--//menu -->



  <section class="collection py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="text-center">
      <div class="view-buttn">
        <a href="single.php?all" class="btn">Read More </a>
      </div>
    </div>
  </section>




  <!-- footer -->
  <?php include(ROOT_PATH . "/inclouds/footer.php"); ?>
  <!--//footer -->

</body>

</html>