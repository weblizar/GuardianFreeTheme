<?php get_header(); ?>
<div class="page_title2">
	<div class="container">
	    <div class="two_third">    
	    	<div class="title">
				<h1><?php printf( __( 'Search Results for: %s', 'guardian' ), '<span>' . get_search_query() . '</span>'  ); ?></h1>
			</div>
	    </div>    
	    <div class="one_third last">    
	    	<div class="site-search-area">        
	    		<?php get_search_form(); ?>
			</div><!-- end site search -->        
	    </div>    
	</div>
</div><!-- end page title -->
<div class="clearfix"></div>		
<div class="container">	
	<div class="col-md-9 content_left" id="main">	
		<?php 
		if ( have_posts()): 
			while ( have_posts() ): the_post();
				get_template_part('post','content'); ?>		
			<?php endwhile;	?> 
			<div class="text-center wl-theme-pagination">
		        <?php echo esc_html( the_posts_pagination( array( 'mid_size' => 2 ) ) ); ?>
		        <div class="clearfix"></div>
		    </div>
		<?php
		else :
			get_template_part( 'nocontent' );
		endif;?>	
		<div class="clearfix mar_top2"></div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>	