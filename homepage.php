<?php
// Template Name: Home Page
get_header(); ?>
<?php 
if (guardian_theme_is_weblizar_companion_active()) { 
	
	$service_home = absint(get_theme_mod( 'slider_home','1' )) ;
	if ( $service_home == "1" ) {
		do_action( 'wl_companion_slider_guardian');
	} ?>

	<?php get_template_part('home','services'); ?>

	<?php get_template_part('home','blog'); ?>

<?php } else {
	get_template_part( 'home','no_content' ); 
} ?>
<?php get_footer(); ?>