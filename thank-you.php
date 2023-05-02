<?php
// Load Header & Footer
$title = 'Thank You';
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

<!-- Main Content -->
<section class="thankyou-header">
    <h1>Thank You</h1>
    <p>Thank you for contacting us. We will get back to you within 3 business days.</p>
</section>

<!-- Load Footer -->
<?php
require_once('./includes/footer.php');
?>