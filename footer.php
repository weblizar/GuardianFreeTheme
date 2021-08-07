<div class="clearfix"></div>
<div class="container-fluid footer1">
	<div class="container">			
		<div class="clearfix divider_dashed1"></div>
		<?php
			if ( is_active_sidebar( 'footer-widget-area' ) ) { 
				dynamic_sidebar( 'footer-widget-area' );
			} 
		?>		
	</div>
</div>
<!-- end footer -->

<div class="clearfix"></div>
<div class="copyright_info">
		<div class="container">
			<div class="clearfix divider_dashed10"></div>
			<?php $wl_theme_options = weblizar_get_options(); ?>
			<div class="col-md-3 col-sm-3 one_third">
				<a href="<?php if(get_theme_mod( 'guardian_deve_link' )) { 
				        echo esc_url(get_theme_mod( 'guardian_deve_link' )); }  else { 
				    	echo "http://wordpress.org/"; } ?>"><?php if(get_theme_mod( 'guardian_develop_by' )) { 
				        echo sanitize_text_field(get_theme_mod( 'guardian_develop_by' )); }  else { 
				    	echo "wordpress"; } ?>
			</a>
			</div>
			<div class="col-md-5 col-sm-5 one_third animate" data-anim-type="fadeInRight">	
			<?php if(get_theme_mod( 'guardian_footer_customizationn' )) { 
				        echo sanitize_text_field(get_theme_mod( 'guardian_footer_customizationn' )); }  else { 
				    	echo " © Copyright 2020. All Rights Reserved"; 
			} ?>						
			</div>	
			<?php
				if(get_theme_mod( 'footer_section_social_media_enbled' )) 
			    { ?>
			<div class="col-md-4 col-sm-4 one_third last">			
				<ul class="footer_social_links guardian_footer_section_social_media">

					<li class="guardian_facebook_link"><a href="<?php if(get_theme_mod( 'fb_link' )) { echo 
							 	esc_url(get_theme_mod( 'fb_link' )); }  else { echo "#"; } ?>"><i class="fa fa-facebook"></i>
							 	</a>
					</li>

					<li><a href="<?php if(get_theme_mod( 'twitter_link' )) { echo esc_url(get_theme_mod( 'twitter_link' )); }  else { echo "#"; } ?>"><i class="fa fa-twitter"></i></a>
					</li>

					<li><a href="<?php if(get_theme_mod( 'linkedin_link' )) { echo esc_url(get_theme_mod( 'linkedin_link' )); }  else { echo "#"; } ?>"><i class="fa fa-linkedin"></i></a>
					</li>

					<li><a href="<?php if(get_theme_mod( 'instagram' )) { echo esc_url(get_theme_mod( 'instagram' )); }  else { echo "#"; } ?>"><i class="fa fa-instagram"></i></a>
					</li>

					<li><a href="<?php if(get_theme_mod( 'youtube_link' )) { echo esc_url(get_theme_mod( 'youtube_link' )); }  else { echo "#"; } ?>"><i class="fa fa-youtube"></i></a>
					</li>

					<li><a href="<?php if(get_theme_mod( 'vk_link' )) { echo esc_url(get_theme_mod( 'vk_link' )); }  else { echo "#"; } ?>"><i class="fa fa-rss"></i></a>
					</li> 
				</ul>
			</div>	
			<?php } ?>		
		</div>
	</div><!-- end copyright info -->
	
</div> <!-- end of header wrapper div -->

<?php 
wp_footer();
?>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a><!-- end scroll to top of the page-->	
</body>
</html>