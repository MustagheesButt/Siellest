<?php
$version = wp_get_theme()->get('Version');
wp_enqueue_style('siellest-searchMain', get_template_directory_uri() . "/assets/css/searchMain.css", array('siellest-global'), $version, 'all');

include 'header.php';
?>