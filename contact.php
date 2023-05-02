<?php
// Initialize Form Variables to Empty String
$name = $email = $message = $subject = "";
$name_err = $email_err = $message_err = $subject_err = "";

// PROCESS FORM SUBMIT
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get Form Data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate Form Data
    $noErrors = true;

    if (empty($name)) {
        $noErrors = false;
        $name_err = "Please enter your name.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $noErrors = false;
        $email_err = "Please enter a valid email address.";
    }

    if (empty($subject)) {
        $noErrors = false;
        $subject_err = "Please enter a subject.";
    }

    if (empty($message)) {
        $noErrors = false;
        $message_err = "Please enter a message.";
    }

    // Form Valid -> Add Contact Data to DB
    if ($noErrors) {
        // Connect to Database
        require_once("./helpers/database.php");

        // Add Contact Us Data to contactus table in Database
        $sql = 'INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)';
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$name, $email, $subject, $message]);

        // Redirect to Thank You Page
        header("Location: ./thank-you.php");
    }
}
    //load header and footer 
    $title = 'Contact Us';
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


    <section id="page-header" class="contact-header">
      <h2>#let's_talk</h2>
      <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>56 Glassford Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>123-456-7890</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Saturday: 9:00am to 4:00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d19758.67092646036!2d-1.2619654728492904!3d51.75436141601334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1soxford%20universoty!5e0!3m2!1sen!2sca!4v1683001166940!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="" method="POST" novalidate>
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name" name="name" id="name" value="<?= $name; ?>">
            <span><?= $name_err; ?></span>

            <input type="email" placeholder="E-mail" name="email" id="email" value="<?= $email; ?>">       
            <span><?= $email_err; ?></span>

            <input type="text" placeholder="Subject" name="subject" id="subject" value="<?= $subject; ?>">
            <span><?= $subject_err; ?></span>

            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"><?= $message ?></textarea>
            <span><?= $message_err; ?></span>

            <button type="submit" value="submit" class="normal">Submit</button>
        </form>
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
