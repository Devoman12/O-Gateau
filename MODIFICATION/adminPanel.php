<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
  <?php 
  
  include("path.php"); 
  include(ROOT_PATH . "/database/control.php");
  

  $categorys = selectAll($table1);
  $Gateaus = selectAll($table2);
  


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
      <nav>
        <div id="logo">
          <h1>
            <a href="<?php echo BASE_URL . '/logout.php'; ?>">Gateau</a>
          </h1>
        </div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
					<li><a href="<?php echo BASE_URL . '/adminPanel.php' ?>"><?php echo $_SESSION['name'] ?></a></li>
          <li class="mx-lg-3 mx-md-2 my-md-0 my-1"> <a href="<?php echo BASE_URL . '/logout.php'; ?>" class="drop-text">Logout</a></li>
        </ul>
      </nav>
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
        <li>Admin Panel </li>
      </ul>
    </div>
  </div>
  <!-- //short-->

  
  <!-- Ajouter Gateau -->
  <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-4 mb-3">
          <div class="rotated-title">
            <h3 class="title mb-md-4 mb-sm-3 mb-3"> Ajouter Gateau</h3>
            <h6 class="title-sub">who are we</h6>
          </div>
        </div>

        <div class="col-lg-6 col-md-8 text-right about-two-grids">
          <div class="about-para-txt">

            <form action="adminPanel.php" method="post" enctype="multipart/form-data">
              <div class="w3pvt-w3ls-contact-mid">
                <div class="form-group contact-forms" >
                  <input type="text" name="Name" class="form-control" placeholder="Gateau Name" required="">
                </div>
                  
                <div class="form-group contact-forms" >
                  <select class="form-control" name="category">
                    <option value="category">category</option>
                    <?php foreach($categorys as $key => $category ): ?>
                      <option value="<?php echo $category['id'] ?>"><?php echo $category['Category'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-group contact-forms" >
                  <textarea id="editor" class="form-control" name="Recipes" placeholder="Recipes" rows="3" required=""></textarea>
                </div>

                <div class="form-group contact-forms">
                  <input type="file" class="form-control" name="image" id="gatile-img" required="">
                </div>

                <button type="submit" name="add-Gateau" class="btn sent-butnn">Send</button>
              </div>
            </form>

          </div>
        </div>

        <div class="col-lg-3 col-md-4 bout-fashion-one text-center">
          <img src="images/bb2.jpg" alt="news image" class="img-fluid">
        </div>

      </div>
    </div>
  </section>
  <!-- //Ajouter Gateau -->


   <!-- Ajouter category -->
   <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about2">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        
        <div class="col-lg-3 mb-lg-0 mb-md-5 mb-sm-4 mb-3">
          <div class="rotated-title">
            <h3 class="title mb-md-4 mb-sm-3 mb-3"> Ajouter category</h3>
            <h6 class="title-sub">who are we</h6>
          </div>
        </div>
        <div class="col-lg-6 col-md-8 text-right about-two-grids">
          <div class="about-para-txt">
            <form action="adminPanel.php" method="post">
                <div class="w3pvt-w3ls-contact-mid">
                <div class="form-group contact-forms">
                    <input type="text" name="C-name" class="form-control" placeholder="Category Name" required="">
                </div>
                  <button type="submit" name="add-C" class="btn sent-butnn">Send</button>
                </div>
            </form>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 bout-fashion-one text-center">
          <img src="images/g2.jpg" alt="news image" class="img-fluid">
        </div>

      </div>
    </div>
  </section>
  <!-- //Ajouter category -->


  <!--//counter -->
  <section class="stats-count py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row text-center">
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 number-w3three-info my-3">
          <h5>700</h5>
          <h6 class="pt-2">Smile</h6>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 number-w3three-info my-3">
          <h5>250 +</h5>
          <h6 class="pt-2">Collection</h6>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 number-w3three-info my-3">
          <h5>150</h5>
          <h6 class="pt-2">Coffee</h6>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-6 number-w3three-info my-3">
          <h5>125</h5>
          <h6 class="pt-2">Tea</h6>
        </div>
      </div>
    </div>
  </section>
  <!--//counter -->

   <!-- short -->
   <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li> <a href="index.php">Tout les Gâteau</a> </li>
      </ul>
    </div>
  </div>
  <!-- //short-->

  <section class="about py-lg-3 py-md-2 py-sm-2 py-2" id="about3">
    			<!-- Style for table -->
          <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            tr:hover {background-color: #A7f5f7;}
				</style>
			<!-- /Style for table -->
			<table>
        <thead>
          <th>N</th>
          <th>name</th>
          <th>category</th>
          <th colspan="2">Action</th>
        </thead>
        <tbody>
          <?php foreach($Gateaus as $key => $gateau): ?>
            <tr>
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $gateau['gateauName'] ?></td>
              <td><?php echo(selectOne($table1, ['id' => $gateau['gateauCategory']]) ['Category']); ?></td>
              <td> edit </td>
              <td><a href="adminPanel.php?delate_G_id=<?php echo $gateau['id']; ?>">Delate</a></td>
            </tr>
          <?php endforeach ;?>
        </tbody>
      </table>
 </section>

  <!-- short -->
  <div class="using-border py-3">
    <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
        <li> <a href="index.php">les category</a> </li>
      </ul>
    </div>
  </div>
  <!-- //short-->


  <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about3">
    			<!-- Style for table -->
          <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            tr:hover {background-color: #A7f5f7;}
				</style>
			<!-- /Style for table -->
			<table>
        <thead>
          <th>N</th>
          <th>name</th>
          <th colspan="2">Action</th>
        </thead>
        <tbody>
          <?php foreach($categorys as $key => $category): ?>
            <tr>
              <td><?php echo $key + 1; ?></td>
              <td><?php echo $category['Category'] ?></td>
              <td> edit </td>
              <td><a href="adminPanel.php?delate_C_id=<?php echo $category['id']; ?>">Delate</a></td>
            </tr>
          <?php endforeach ;?>
        </tbody>
      </table>
 </section>
</body>

</html>