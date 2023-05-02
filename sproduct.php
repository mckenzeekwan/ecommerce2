<?php
  //connect to database 
  require_once('./helpers/database.php');

    //load header and footer 
    $title = 'Home';
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

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="f1 product">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" width="100%" class="small-img" alt="f1 product small img">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" width="100%" class="small-img" alt="f2 product small img">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" width="100%" class="small-img" alt="f3 product small img">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" width="100%" class="small-img" alt="f4 product small img">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h6>Home / T-Shirts</h6>
            <h4>Men's Fashion T-Shirts</h4>
            <h2>$139.00</h2>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>Large</option>
                <option>Medium</option>
                <option>Small</option>
                <option>XS</option>
                <option>XXS</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid fuga ipsa quidem facere odit iure, sunt veniam adipisci libero. Assumenda, deleniti illo veniam repudiandae animi quasi eveniet blanditiis sapiente velit voluptatum unde delectus fugit ullam molestiae error aliquam est odit architecto. Fugit maxime quos iure magni ut iste qui commodi, dignissimos ad, repudiandae vitae porro mollitia quo exercitationem ex libero voluptatum dolorum? Voluptas optio adipisci aliquam temporibus iure! Quod, earum!</span>
        </div>
    </section>

    <section id="product1" class="section-p1"> 
      <h2>Featured Products</h2>
      <p>Summer Collections New Morden Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="img/products/n1.jpg" alt="n1 product">
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
          <img src="img/products/n2.jpg" alt="n2 product">
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
          <img src="img/products/n3.jpg" alt="n3 product">
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>

        <div class="pro">
          <img src="img/products/n4.jpg" alt="n4 product">
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>$78</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
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
