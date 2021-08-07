<?php 
//Template Name: Left side bar
//Template Post Type: post
get_header(); 
get_template_part('weblizar','breadcrumbs'); ?>
<div class="container">
	<?php get_sidebar(); ?>
	<div class="col-md-9 content_left" id="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
			<?php get_template_part('post','content'); 		
		endwhile; 
		else : 
			get_template_part('nocontent');
		endif;		
		get_template_part('post-author'); 
		weblizar_navigation_posts(); ?>		
    	<div class="clearfix divider_dashed9"></div>  
		<?php comments_template('',true); ?>
		<div class="clearfix mar_top2"></div>
	</div><!-- end content left side -->
</div><!-- end content area -->
<div class="margin_top5"></div>	
<?php get_footer(); ?>