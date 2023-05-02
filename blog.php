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


    <section id="page-header" class="blog-header">
      <h2>#readmore</h2>
      <p>Read all case studies about our products! </p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/blog1.jpg" alt="blog1">
            </div>
            <div class="blog-details">
                <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi dolorum sequi dignissimos maiores asperiores, magnam laboriosam quibusdam impedit quam!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/blog2.jpg" alt="blog2">
            </div>
            <div class="blog-details">
                <h4>How to Style a Quiff</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi dolorum sequi dignissimos maiores asperiores, magnam laboriosam quibusdam impedit quam!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/04</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/blog3.jpg" alt="blog3">
            </div>
            <div class="blog-details">
                <h4>Must-Have Skater Girl Items</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi dolorum sequi dignissimos maiores asperiores, magnam laboriosam quibusdam impedit quam!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>12/01</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/blog4.jpg" alt="blog4">
            </div>
            <div class="blog-details">
                <h4>Runway-Inspired Trends</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi dolorum sequi dignissimos maiores asperiores, magnam laboriosam quibusdam impedit quam!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>16/01</h1>
        </div>

        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/blog6.jpg" alt="blog6">
            </div>
            <div class="blog-details">
                <h4>AW20 Menswear Trends</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi dolorum sequi dignissimos maiores asperiores, magnam laboriosam quibusdam impedit quam!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>10/03</h1>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
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
