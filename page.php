<?php
$post_name = get_post()->post_name;
$pages = array_diff( scandir(getcwd() . '/wp-content/themes/siellest/inc/pages/'), array('.', '..') );

get_header('', [ 'action' => get_post_meta(get_the_ID(), 'action', true) ]);
?>

<main id="main" class="main <?= get_post_meta(get_the_ID(), 'container_classes', true) ?>" role="main">
    <?php

    if (in_array("{$post_name}.php", $pages))
    {
      include "inc/pages/{$post_name}.php";
    }
    elseif ( have_posts() )
    {
        while ( have_posts() )
        {
            the_post();
            $id = get_the_ID();
            if ($id === 46 || $id === 49) {
              the_content();
            } else {
              echo get_the_content();
            }
        }
    }
    ?>
</main>

<?php
get_footer();
?>