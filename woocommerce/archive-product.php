<?php
get_header('archive-product', array( 'action' => 'Search-Show', 'title' => single_term_title('', false) ));

include get_template_directory() . '/template-parts/archive-product/main.php';

get_footer('archive-product');
?>