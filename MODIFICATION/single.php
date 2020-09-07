<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<?php 

include("path.php");
include(ROOT_PATH . "/database/db.php"); 

if (isset($_GET['id'])){
	$post = selectOne($table2, ['id' => $_GET['id']]);
}
else {
  header('location: ' . BASE_URL . '/gallery.php');
  exit();
}

$Random_Post = RandomOneThing($table2);

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
      <!-- nav -->
      <?php include(ROOT_PATH . "/inclouds/nav.php"); ?>
      <!-- //nav -->
    </div>
  </div>
  <!--//headder-->


  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.html">Home</a>
          <span>/ /</span>
        </li>
        <li><?php echo $post['gateauName']; ?></li>
      </ul>
    </div>
  </div>
  <!-- //short-->

  <!--single page-->
  <section class="single page py-lg-4 py-md-3 py-sm-3 py-3" id="single-page">
    <div class="container py-lg-0 py-md-4 py-sm-4 py-3">
        <!-- Po 1-->
        <div class="comments-grid-right mb-lg-4 mb-3 row mt-lg-5 mt-md-4 mt-3">
          <h4>Category : </h4>
          <h4><?php echo(selectOne($table1, ['id' => $post['gateauCategory']]) ['Category']);?></h4>
        </div>
        <div class="comments-grid-right mb-lg-4 mb-3 row mt-lg-5 mt-md-4 mt-3">
          <h4><?php echo $post['gateauName']; ?></h4>
        </div>
        <!-- Po 2-->
      <div class="row mt-lg-5 mt-md-4 mt-3">
         <img src="<?php echo BASE_URL . "/images/lesGateau/" . $post['gateauImage']; ?>" alt="news image" class="img-fluid">
      </div>
        <!-- Po 3-->
      <div class="row mt-lg-5 mt-md-4 mt-3">
        <p style="padding-bottom: 25px;" ><?php echo html_entity_decode($post['gateauRecipes']);?></p>
      </div>
        <!--//Post-->

      <!-- Recemende-->
      <div class="comments-w3layouts-grid pt-lg-5 pt-md-4 pt-3">
      <div class="row">
        <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-4 mb-3">
          <div class="rotated-title">
            <h3 class="title mb-md-4 mb-sm-3 mb-3">Single Page</h3>
            <h6 class="title-sub">recommended to you</h6>
          </div>
        </div>
        
        <div class="col-lg-4 color-img-three my-3">
          <img src="<?php echo BASE_URL . "/images/lesGateau/" . $Random_Post['gateauImage']; ?>" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-5 blog-left-sub my-3">
          <h4 class="pb-3">
            <a href="single.php?id=<?php echo $Random_Post['id'] ;?>"> <?php echo $Random_Post['gateauName'] ?></a>
          </h4>
          <p> <?php echo html_entity_decode(substr($Random_Post['gateauRecipes'], 0, 150 ) . '...'); ?></p>
          <div class="row mt-lg-4 mt-3">
            <div class="col-lg-6 col-md-6 col-sm-6 ">
              <div class="view-buttn">
                <a href="single.php?id=<?php echo $Random_Post['id'] ;?>" class="btn">Read More </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!--//Recemende-->

      
      <!-- comments -->
      <div class="comments-w3layouts-grid pt-lg-5 pt-md-4 pt-3">
      <hr style="width:50%; height:1px; background-color:black;">
        <div class="comments-grid-right mb-lg-4 mb-3">
          <h4>Our Recent Comments</h4>
        </div>
        <div class="comment-list mb-lg-4 mb-3">
          <div class="row pt-3">
            <div class="col-lg-2 col-md-3 col-sm-3 comment-imgs ">
              <img src="images/cc1.jpg" alt=" " class="img-fluid">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 single-title text-left">
              <h4>Michael Crisp</h4>
              <p class="my-2">Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit
                <br> amet scelerisque massa. Duis porta risus id urna finibus aliquet.
              </p>
              <ul>
                <li>5 December 2016
                  <i>|</i>
                </li>
                <li>
                  <a href="single.html" class="clr-two">Reply</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-lg-2 col-md-3 col-sm-3 comment-imgs ">
              <img src="images/cc2.jpg" alt=" " class="img-fluid">
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 single-title text-left">
              <h4>Michael Crisp</h4>
              <p class="my-2">Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit
                <br> amet scelerisque massa. Duis porta risus id urna finibus aliquet.
              </p>
              <ul>
                <li>5 December 2016
                  <i>|</i>
                </li>
                <li>
                  <a href="single.html" class="clr-two">Reply</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--//comments-->
        <!--comments-form-->
        <div class="pt-3 form-comment">
          <div class="mb-3 comments-grid-right text-left">
            <h4>Leave a Comment</h4>
          </div>
          <form class="pt-lg-2" action="#" method="post">
            <div class="row w3ls-contact-mid">
              <div class="col-lg-6 form-group contact-forms">
                <input type="text" class="form-control" placeholder="Name" required="">
              </div>
              <div class="col-lg-6 form-group contact-forms">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
            </div>
            <div class="form-group contact-forms mb-0">
              <textarea class="form-control" placeholder="Message" rows="2" required=""></textarea>
            </div>
            <button type="submit" class="btn mt-lg-4 mt-3 sent-butnn">Submit</button>
          </form>
          <!--//comments-form-->
        </div>
      </div>
      <!--//comments-->

    </div>
  </section>
  <!--//single page-->


  <!-- footer -->
  <?php include(ROOT_PATH . "/inclouds/footer.php"); ?>
  <!--//footer -->

</body>

</html>