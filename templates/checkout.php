<?php
/**
* Template Name: Checkout Canvas
*
* @package WordPress
* @subpackage siellest
* @since Siellest 1.0
*/

get_header('checkout');
?>

<main id="main" class="main gutter--small-up-normal" role="main">
  <?php
  include get_template_directory() . '/inc/pages/checkout.php';
  ?>
</main>

<?php
get_footer('checkout');
?>