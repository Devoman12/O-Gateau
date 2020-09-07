<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 

include("path.php");
include(ROOT_PATH . "/database/db.php"); 


?>
<!DOCTYPE html>
<html lang="zxx">



<!--head -->
<?php include(ROOT_PATH . "/inclouds/head.php"); ?>
<!--head -->

<body>
  <!--headder-->
  <div class="header-outs inner_page-banner " id="home">
    <div class="headder-top">
      <!--//navigation section -->
       <!-- nav -->
       <?php include(ROOT_PATH . "/inclouds/nav.php"); ?>
      <!-- //nav -->
    </div>
  </div>
  <!--//headder-->

  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.html">Home</a>
          <span>/ /</span>
        </li>
        <li>Gallery</li>
      </ul>
    </div>
  </div>
  <!-- //short-->

  <!--Gallery-->
  <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        
        
        
        <?php foreach($Gateaus as $key => $Gateau): ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-6 gallery-img-grid p-1 ">
          <a href="<?php echo '#' . $Gateau['id']; ?>">
            <center>
              <img src="<?php echo BASE_URL . "/images/lesGateau/" . $Gateau['gateauImage']; ?>" alt="news image" class="img-fluid" >
            </center>
          </a>
        </div>
        <?php endforeach ;?>
        

      </div>
    </div>
    

    <!-- popup-->
    <?php foreach($Gateaus as $key => $Gateau): ?>
    <div id="<?php echo $Gateau['id']; ?>" class="popup-effect">
      <div class="popup">
        <img src="<?php echo BASE_URL . "/images/lesGateau/" . $Gateau['gateauImage']; ?>" alt="Popup Image" class="img-fluid" />
        <a class="close" href="#gallery">&times;</a>
        <p><?php echo $Gateau['gateauName']; ?> </p>
        <a href="single.php?id=<?php echo $Gateau['id'] ;?>" class="btn">Read More </a>
      </div>
    </div>
    <?php endforeach ;?>
    <!-- //popup -->
    
    
    
  </section>
  <!--//Gallery-->

  <!-- footer -->
    <?php include(ROOT_PATH . "/inclouds/footer.php"); ?>
  <!--//footer -->
</body>

</html>