<?php
get_header(); 
get_template_part('weblizar','breadcrumbs'); ?>
<div class="container">
	<div class="col-md-9 content_left" id="main">
		<?php if ( have_posts()): 
			while ( have_posts() ): the_post(); 
				get_template_part('loop');
			endwhile;
		endif;?>
		<div class="text-center wl-theme-pagination">
	        <?php echo esc_html( the_posts_pagination( array( 'mid_size' => 2 ) ) ); ?>
	        <div class="clearfix"></div>
	    </div>
	</div><!-- end content left side -->
	<?php get_sidebar(); ?>
</div><!-- end content area -->
<?php get_footer(); ?>