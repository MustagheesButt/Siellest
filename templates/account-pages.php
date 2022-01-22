<?php
/**
* Template Name: Account Pages
*
* @package WordPress
* @subpackage siellest
* @since Siellest 1.0
*/


get_header();
?>

<main id="main" class="main account gutter--small-up-normal" role="main">
  <?php
  if ( have_posts() )
  {
      while ( have_posts() )
      {
          the_post();
          // $id = get_the_ID();
          // if ($id === 46 || $id === 49) {
            the_content();
          // } else {
          //   echo get_the_content();
          // }
      }
  }
  ?>
</main>

<?php
get_footer();
?>