<?php
  //connect to database 
  require_once('./helpers/database.php');
  
    //load header and footer 
    $title = 'Blog';
    require_once('./includes/header.php');

    // get the current page name
    $page = basename($_SERVER['PHP_SELF']);

    // define an array of page titles and their corresponding links
    $pages = array(
      'home.php' => 'Home',
      'shop.php' => 'Shop',
      'blog.php' => 'Blog',
      'about.php' => 'About',
      'contact.php' => 'Contact'
    );
    require_once('./includes/nav.php');

?>


    <section id="page-header" class="about-header">
      <h2>#KnowUs</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing </p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="a6 about">
        <div>
            <h2>Who Are We?</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda amet ea esse quam eum dolorem et eaque saepe, debitis unde mollitia eligendi deleniti, vel numquam culpa, molestias natus. Doloremque exercitationem error atque cumque nostrum minus aspernatur commodi unde voluptatum expedita, rerum id quasi quis. Harum.</p>
            <abbr title="">Creating stunning images with as much or a little control as you like thanks to a choice of Basic and Creative modes.</abbr>

            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%" >Creating stunning images with as much or a little control as you like thanks to a choice of Basic and Creative modes.</marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/about/1.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="img/features/f1.png" alt="f1">
        <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f2.png" alt="f2">
        <h6>Online Order</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f3.png" alt="f3">
        <h6>Save Money</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f4.png" alt="f4">
        <h6>Promotions</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f5.png" alt="f5">
        <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f6.png" alt="f6">
        <h6>F24/7</h6>
      </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletter</h4>
        <p>Get E-mail updates about our latest shops and <span>special offers.</span></p>
      </div>
      <div class="form">
        <input type="email" placeholder="Your email address">
        <button class="normal">Sign Up</button>
      </div>
    </section>

  <?php
    //load footer
    require_once('./includes/footer.php')
  ?>
  </body>
</html>
