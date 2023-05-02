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
  

    <secion id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>On all products</h1>
      <p>Save more with coupons & up to 70% off!</p>
      <a href="#" class="btn">Shop Now!</a>
    </secion>

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

    <section id="product1" class="section-p1"> 
      <h2>Featured Products</h2>
      <p>Summer Collections New Morden Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="img/products/f1.jpg" alt="f1 product">
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
          <img src="img/products/f2.jpg" alt="f2 product">
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
          <img src="img/products/f3.jpg" alt="f3 product">
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
          <img src="img/products/f4.jpg" alt="f4 product">
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
          <img src="img/products/f5.jpg" alt="f5 product">
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
          <img src="img/products/f6.jpg" alt="f6 product">
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
          <img src="img/products/f7.jpg" alt="f7 product">
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
          <img src="img/products/f8.jpg" alt="f8 product">
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

    <section id="banner" class="section-m1">
      <h4>Repair Services</h4>
      <h2>Up to <span>70% Off</span> All T-Shirts & Accessories</h2>
      <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1"> 
      <h2>New Arrivals</h2>
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

        <div class="pro">
          <img src="img/products/n5.jpg" alt="n5 product">
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
          <img src="img/products/n6.jpg" alt="n6 product">
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
          <img src="img/products/n7.jpg" alt="n7 product">
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
          <img src="img/products/n8.jpg" alt="n8 product">
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

    <!-- <section id="review" class="review">
      <h1 class="heading"> Customer's <span>Review</span></h1>

      <div class="swiper review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="img/user1.png" alt="user1">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates nemo aut, quod sit harum. Nostrum, minima expedita architecto minus cum laboriosam nemo debitis iusto.</p>
            <h3>John Deo</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="img/user1.png" alt="user1">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates nemo aut, quod sit harum. Nostrum, minima expedita architecto minus cum laboriosam nemo debitis iusto.</p>
            <h3>John Deo</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="img/user1.png" alt="user1">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates nemo aut, quod sit harum. Nostrum, minima expedita architecto minus cum laboriosam nemo debitis iusto.</p>
            <h3>John Deo</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="img/user1.png" alt="user1">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus voluptates nemo aut, quod sit harum. Nostrum, minima expedita architecto minus cum laboriosam nemo debitis iusto.</p>
            <h3>John Deo</h3>
            <div class="stars">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="sm-banner" class="section-p1">

      <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at mango</span>
        <button class="white">Learn More</button>
      </div>
      <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcoming season</h2>
        <span>The best classic dress is on sale at mango</span>
        <button class="white">Collection</button>
      </div>
    </section>

    <section id="banner3">
      <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>Winter Collection -50% Off</h3>
      </div>
      <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring / Summer 2023</h3>
      </div>
      <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
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
