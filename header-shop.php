<?php
$version = wp_get_theme()->get('Version');
wp_enqueue_style('siellest-productMain', get_template_directory_uri() . "/assets/css/productMain.css", array('siellest-global'), $version, 'all');

include 'header.php';
?>

