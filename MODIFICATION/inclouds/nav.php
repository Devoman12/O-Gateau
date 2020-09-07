<nav>
        <div id="logo">
          <h1>
            <a href="index.php">Gateau</a>
          </h1>
        </div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
        
          <li class="active"><a href="index.php">Home</a></li>
          <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="about.php">About</a></li>
          <li><a href="service.php">Services</a></li>
          <li class="mx-lg-3 mx-md-2 my-md-0 my-1"> <a href="gallery.php" class="drop-text">Gallery</a></li>
          <li><a href="contact.php">Contact Us</a></li>
					<li><a href="<?php echo BASE_URL . '/LoginForm/login.php'; ?>"; ?><i class="fa fa-lock"></i> Login</a></li>
								
        </ul>
</nav>

      