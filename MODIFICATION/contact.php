<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->

<?php include("path.php"); ?>
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
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li>
          <a href="index.php">Home</a>
          <span>/ /</span>
        </li>
        <li>Contact</li>
      </ul>
    </div>
  </div>
  <!-- //short-->

  <!--contact -->
  <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-4 mb-lg-0 mb-md-5 mb-sm-4 mb-3">
          <div class="rotated-title">
            <h3 class="title mb-md-4 mb-sm-3 mb-2">Contact</h3>
            <h6 class="title-sub">Get in Touch</h6>
          </div>
        </div>
        <!--//contact-map -->
        <div class="address_mail_footer_grids col-lg-8">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.8058220951544!2d-3.346897970765124!3d34.
            22592740764547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9d935282edecb5%3A0x13408f6cd6aa114!2sECOLE%20
            LE%20MESSAGE!5e1!3m2!1sen!2sma!4v1599263842567!5m2!1sen!2sma">
            </iframe>
        </div>
        <!--contact-map -->
      </div>
      <div class="row mt-lg-5 mt-md-4 mt-3">
        <div class="col-lg-6 col-md-6 col-sm-7 contact-form-txt">
          <form action="#" method="post">
            <div class="w3pvt-w3ls-contact-mid">
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Name" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Phone" required="">
              </div>
              <div class="form-group contact-forms">
                <textarea class="form-control" placeholder="Message" rows="3" required=""></textarea>
              </div>
              <button type="submit" class="btn sent-butnn">Send</button>
            </div>
          </form>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-5">
          <div class="contact-list-grid">
            <h4>Branch 1</h4>
            <p class="pt-2">Melbourne St,South Birbane 4101</p>
            <p>Austraila</p>
          </div>
          <div class="contact-list-grid my-lg-4 my-3">
            <h4>Phone</h4>
            <p class="pt-2">(000)1122333</p>
            <p>+(000) 123 4565 32</p>
          </div>
          <div class="contact-list-grid">
            <h4>Email</h4>
            <p class="pt-2">
              <a href="mailto:info@example.com">info@example1.com</a>
            </p>
            <p class="pt-2">
              <a href="mailto:info@example.com">info@example.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//contact  -->

  <!-- footer -->
    <?php include(ROOT_PATH . "/inclouds/footer.php"); ?>
  <!--//footer -->

</body>

</html>