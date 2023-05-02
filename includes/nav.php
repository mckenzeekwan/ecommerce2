  <!-- Display the navbar with the active class on the current page -->
  <section id="header">
      <a href="#"
        ><img src="img/logo.png" class="logo" alt="logo" width="100"
      /></a>

      <div>
        <ul id="navbar">
          <?php
            foreach ($pages as $link => $page_title) {
              // Add the active class to the current page link
              $class = ($page == $link) ? 'active' : '';
              echo '<li><a class="' . $class . '" href="' . $link . '">' . $page_title . '</a></li>';
            }
          ?>
          <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
          </li>
          <a href="#" id="close"><i class="fa fa-times"></i></a>
        </ul>
        
      </div>
      <div id="mobile">
        <a href="cart.php"><i class="fa fa-shopping-bag"></i></a>
        <i id="bar" class="fa fa-bars"></i>
      </div>
</section>