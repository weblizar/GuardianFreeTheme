<?php get_header(); ?>
<div class="page_title2">
	<div class="container">
	    <div class="col-md-12 two_third">    
	    	<div class="title">
			<h1><?php printf( __( 'Category Archives: %s', 'guardian' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
			</div>       
	        <?php weblizar_breadcrumbs(); ?>
	    </div>    
	</div>
</div><!-- end page title -->
<div class="clearfix"></div>		
<div class="container">	
	<div class="col-md-9 content_left" id="main">
		<?php 
		if ( have_posts()): 
			while ( have_posts() ): the_post();
				get_template_part('loop'); ?>		
			<?php endwhile; 
		endif; 
		?>
		<div class="text-center wl-theme-pagination">
	        <?php echo esc_html( the_posts_pagination( array( 'mid_size' => 2 ) ) ); ?>
	        <div class="clearfix"></div>
	    </div>
		<div class="clearfix divider_dashed9"></div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>	