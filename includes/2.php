<section id="header">
  <a href="#">
    <img src="img/logo.png" class="logo" alt="logo" width="100" />
  </a>

  <div>
    <ul id="navbar">
      <li><a <?php if ($title == 'Home') echo 'class="active"'; ?> href="home.php">Home</a></li>
      <li><a <?php if ($title == 'Shop') echo 'class="active"'; ?> href="shop.php">Shop</a></li>
      <li><a <?php if ($title == 'Blog') echo 'class="active"'; ?> href="blog.php">Blog</a></li>
      <li><a <?php if ($title == 'About') echo 'class="active"'; ?> href="about.php">About</a></li>
      <li><a <?php if ($title == 'Contact') echo 'class="active"'; ?> href="contact.php">Contact</a></li>
      <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
      <a href="#" id="close"><i class="fa fa-times"></i></a>
    </ul>
  </div>
  
  <div id="mobile">
    <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
    <i id="bar" class="fa fa-bars"></i>
  </div>
</section>