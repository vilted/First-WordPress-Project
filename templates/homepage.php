<?php
/* Template Name: Homepage Template */
get_header();
?>

<!-- <h1>Esame homepage.php</h1> -->

<?php
	get_template_part('partials/intro');
	get_template_part('partials/about');
	get_template_part('partials/work');
	get_template_part('partials/form');
	get_template_part('partials/social_networks');
?>

<?php get_footer(); ?>