<?php        
/*	*Theme Name	: Guardian
	*Theme Core Functions and Codes
*/
	define('gr_td' , 'guardian');
	require( get_template_directory() . '/class-tgm-plugin-activation.php' );
	require( get_template_directory() . '/core/menu/default_menu_walker.php' ); // for Default Menus
	require( get_template_directory() . '/core/menu/weblizar_nav_walker.php' ); // for Custom Menus	
	require( get_template_directory() . '/core/comment-function.php' );	
	require( get_template_directory() . '/core/custom-header.php' );	

	define('guardian_THEME_URL','https://weblizar.com/themes/guardian-premium-theme/');
	define('guardian_THEME_REVIEW_URL','https://wordpress.org/support/theme/guardian/');	


	/* Get the plugin */
	if ( ! function_exists( 'guardian_theme_is_weblizar_companion_active' ) ) {
	    function guardian_theme_is_weblizar_companion_active() {
	        require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	        if ( is_plugin_active(  'weblizar-companion/weblizar-companion.php' ) ) {
	            return true;
	        } else {
	            return false;
	        }
	    }
	} 
	
	//Sane Defaults
	function weblizar_default_settings() {	
	$ImageUrl  = get_template_directory_uri() ."/images/slide-1.jpg";
	$ImageUrl2 = get_template_directory_uri() ."/images/slide-2.jpg";
	$ImageUrl3 = get_template_directory_uri() ."/images/slide-3.jpg";
	return $theme_options = array(
			//Logo and Fevicon header			
			'upload__header_image'=>'',
			'upload_image_logo'=>'',
			'height'=>'50',
			'width'=>'180',
			'text_title'=>'off',
			'custom_css'=>'',
			'services_home' => 'on',
			'blog_home' => 'on',
			'editor_home' =>'on',
			'blog_title' => '',
			'excerpt_blog'=>'55',
			'guardian_blog_title' =>__('Our Latest Blog','guardian'),
			'home_blog_description' =>__('Latest Blog','guardian'),
				
			'guardian_slider'=>'1',
			'slider_image_speed'=>'2000',
			'slide_image' => $ImageUrl,
			'slide_title' => __('Responsive Theme','guardian'),
			'slide_desc' => __('Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet','guardian'),
			'slide_btn_text' => __('Read More','guardian'),
			'slide_btn_link' => '#',
			
			'slide_image_1' => $ImageUrl2,
			'slide_title_1' => __('Custom Layout','guardian'),
			'slide_desc_1' => __('Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet','guardian'),
			'slide_btn_text_1' => __('Read More','guardian'),
			'slide_btn_link_1' => '#',
			
			'slide_image_2' => $ImageUrl3,
			'slide_title_2' => __('Touch Slider','guardian'),
			'slide_desc_2' => __('Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet','guardian'),
			'slide_btn_text_2' => __('Read More','guardian'),
			'slide_btn_link_2' => '#',
			
			//Service
			'home_service_title'=>__('Multi purpose Our service','guardian'),
			'home_service_description'=>__('Lorem Ipsum is simply dummy text of the printing and typesetting industry.','guardian'),
			
			'service_1_title'=>__("Idea",'guardian'),
			'service_1_icons'=>"fa-google",
			'service_1_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.",'guardian'),
			'service_1_link'=>"#",
			
			'service_2_title'=>__("Records",'guardian'),
			'service_2_icons'=>"fa-database",
			'service_2_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.",'guardian'),
			'service_2_link'=>"#",
			
			'service_3_title'=>__("WordPress",'guardian'),
			'service_3_icons'=>"fa-wordpress",
			'service_3_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.",'guardian'),
			'service_3_link'=>"#",
			
			'service_4_title'=>__("Responsive",'guardian'),
			'service_4_icons'=>"fa-laptop",
			'service_4_text'=>__("There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.",'guardian'),
			'service_4_link'=>"#",
			
			//Editor Option
			'editor_home' => '#',
			'editor_extra_text' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry','guardian'),
			
			//call out
			'call_out_text' =>__('Yepp! This is just a design for your awesome website and i am sure you gona love','guardian'),			
			'call_out_link'=>'#',
			'call_out_button_text'=>__('Purchase Now!','guardian'),
			'call_out_button_target'=>'on',
			
			
			//Social media links
			'contact_email'=>__('guardian@gmail.com','guardian'),
			'contact_phone_no'=>__('1 4488 8000 4500','guardian'),
			'header_section_social_media_enbled'=>'on',
			'footer_section_social_media_enbled'=>'on',
			
			'twitter_link' => "https://twitter.com/",
			'facebook_link' => "https://facebook.com",
			'linkedin_link' => "http://linkedin.com/",
			'flicker_link' => "https://www.flickr.com/",
			'youtube_link' => "https://www.youtube.com/",
			'rss_link' => "https://www.rss.com/",
			
			
			//footer customization 
			'footer_customizations' => __('Copyright @ 2019','guardian'),
			'developed_by_text' => __(' Developed By','guardian'),
			'developed_by_weblizar_text' => '',
			'developed_by_link' => '',
			
			'terms_of_use_text' =>__('Terms of Use','guardian'),
			'terms_of_use_link' =>'#',
			
			'Privacy_policy_text' =>__('Privacy Policy','guardian'),
			'Privacy_policy_link' =>'#',
			
			// Google Font Family
			'main_heading_font' => 'Open Sans',
			'menu_font' => 'Open Sans',
			'theme_title' => 'Open Sans',
			'desc_font_all' => 'Open Sans',
			'btn_text' => 'Open Sans',
		);
		return apply_filters( 'guardian_options', $wl_theme_options );
}
	function weblizar_get_options() {
	    // Options API
	    return wp_parse_args( 
	        get_option( 'guardian_options', array() ), 
	        weblizar_default_settings() 
	    );    
	}
		
	/*After Theme Setup*/
	add_action( 'after_setup_theme', 'weblizar_setup' ); 	
	function weblizar_setup() {	

		add_theme_support( 'title-tag' );
		
		/* Enable support for Woocommerce */
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
	        add_theme_support( 'wc-product-gallery-lightbox' );
	        add_theme_support( 'wc-product-gallery-slider' );

		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 630; //px
	
		// Load text domain for translation-ready
		load_theme_textdomain( 'guardian', get_template_directory() . '/core/lang' );
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'guardian' ) );
		add_theme_support( 'customize-selective-refresh-widgets' );

		/* Gutenberg */
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );

		/* Add editor style. */
		add_theme_support( 'editor-styles' );
		add_theme_support( 'dark-editor-style' );

		/* Allow shortcodes in widgets. */
		add_filter( 'widget_text', 'do_shortcode' );
		
		// Logo
		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 250,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		));
			
		// theme support 	
		add_theme_support( 'automatic-feed-links'); 

		$args = array( 
			'default-color' => 'fff' 
		);
		add_theme_support( 'custom-background', $args );

		add_editor_style( 'custom-editor-style.css' );
		
	
	/*==================
	* Crop image for blog
	* ==================*/	
		//About-Us Post Thumb
		add_image_size('about_post_thumb',1140, 380,true);
		//Blogs thumbs
		add_image_size('home_post_thumb',360,180,true);	
		add_image_size('wl_page_thumb',730,350,true);
		add_image_size('wl_pageff_thumb',1170,350,true);
		add_image_size('small_thumbs',1170,520,true); //2-Column
		add_image_size('recent_blog_img',64,64,true);	
	}
	// Read more tag to formatting in blog page 
	function weblizar_content_more($more) {  
		global $post;							
	   	return '<a href="'.get_permalink().'">'.__('read more...','guardian');'</a>';
	}   
	add_filter( 'the_content_more_link', 'weblizar_content_more' );
	
	
	// Replaces the excerpt "more" text by a link
	function weblizar_new_excerpt_more($more) {
       	global $post;
		return '';
	}
	add_filter('excerpt_more', 'weblizar_new_excerpt_more');
	
	/*
	* guardian widget area
	*/
	add_action( 'widgets_init', 'guardian_widgets_init');
	function guardian_widgets_init() {
		//register_widget('wl_flickr_widget');
		/*sidebar*/
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'guardian' ),
			'id'            => 'sidebar-primary',
			'description'   => __( 'The primary widget area', 'guardian' ),
			'before_widget' => '<div id="%1$s" class="col-md-12 sidebar_widget %2$s">',
			'after_widget'  => '</div><div class="clearfix margin_top3"></div>',
			'before_title'  => '<div class="col-md-12 sidebar_title"><h4>',
			'after_title'   => '</h4></div>'
		) );
		/** footer widget area **/
		register_sidebar( array(
			'name'          => __( 'Footer Widget Area', 'guardian' ),
			'id'            => 'footer-widget-area',
			'description'   => __( 'footer widget area', 'guardian' ),
			'before_widget' => '<div id="%1$s" class="col-md-3 one_fourth animate fadeInUp %2$s" data-anim-type="fadeInUp"><div class="qlinks">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="lmb">',
			'after_title'   => '</h4>',
		) );             
	}
	
	/*==================
	* Guardian theme css and js
	* ==================*/
	function guardian_scripts() {	
		// Google fonts 	
		 wp_enqueue_style('OpenSansRegular','//fonts.googleapis.com/css?family=Open+Sans');
                 wp_enqueue_style('OpenSansBold','//fonts.googleapis.com/css?family=Open+Sans:700');
                 wp_enqueue_style('OpenSansSemiBold','//fonts.googleapis.com/css?family=Open+Sans:600');
                 wp_enqueue_style('RobotoRegular','//fonts.googleapis.com/css?family=Roboto');
		 wp_enqueue_style('RobotoBold','//fonts.googleapis.com/css?family=Roboto:700');
		 wp_enqueue_style('RalewaySemiBold','//fonts.googleapis.com/css?family=Raleway:600');
		 wp_enqueue_style('Courgette','//fonts.googleapis.com/css?family=Courgette');
		
		$wl_theme_options = weblizar_get_options();
		$font_var         = '300,400,600,700,900,300italic,400italic,600italic,700italic,900italic';
		$http             = (!empty($_SERVER['HTTPS'])) ? "https" : "http";
			
		$main_heading_font = str_replace(' ' , '+', $wl_theme_options['main_heading_font']);
		wp_enqueue_style('googleFonts', $http . '://fonts.googleapis.com/css?family=' . $main_heading_font . ':' . $font_var);

		$menu_font = str_replace(' ' , '+', $wl_theme_options['menu_font']);
		wp_enqueue_style('menu_font', $http . '://fonts.googleapis.com/css?family=' . $menu_font . ':' . $font_var);

		$theme_title = str_replace(' ' , '+', $wl_theme_options['theme_title']);
		wp_enqueue_style('theme_title', $http . '://fonts.googleapis.com/css?family=' . $theme_title . ':' . $font_var);

		$desc_font_all = str_replace(' ' , '+', $wl_theme_options['desc_font_all']);
		wp_enqueue_style('desc_font_all', $http . '://fonts.googleapis.com/css?family=' . $desc_font_all . ':' . $font_var);
		

		wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css'); 
		//wp_enqueue_style('font-awesome-581', get_template_directory_uri(). '/css/font-awesome-5.8.1/css/fontawesome.min.css');
		wp_enqueue_style( 'font-awesome-581', get_template_directory_uri(). '/css/font-awesome-5.8.1/css/all.css');
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome-4.7.0/css/font-awesome.css');
		wp_enqueue_style( 'responsive-leyouts', get_template_directory_uri() . '/css/responsive-leyouts.css');
		wp_enqueue_style( 'mainmenu-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');		
		wp_enqueue_style( 'mainmenu-menu', get_template_directory_uri() . '/css/menu.css');
		wp_enqueue_style( 'mainmenu-sticky', get_template_directory_uri() . '/css/sticky.css');
		wp_enqueue_style( 'swiper-css', get_template_directory_uri() . '/css/swiper.css');
		wp_enqueue_style( 'theme-animtae-css', get_template_directory_uri() . '/css/theme-animtae.css');
		wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');		
		// carousel Slider
		wp_enqueue_style( 'carousel-style', get_template_directory_uri() . '/css/carousel.css');		
		// Js
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/js/bootstrap.js',array( 'jquery' ), true, true );	
		wp_enqueue_script( 'menu-js', get_template_directory_uri() .'/js/menu.js', array( 'jquery' ), true, true );	
		wp_enqueue_script( 'swiper-js', get_template_directory_uri() .'/js/swiper.js', array( 'jquery' ), true, true );	
		wp_enqueue_script( 'custom-js', get_template_directory_uri() .'/js/custom.js', array( 'jquery' ), true, true );

		if ( ! empty ( $wl_theme_options['guardian_slider'] ) &&  $wl_theme_options['guardian_slider'] == '1' ) {
                $guardian_slider = true;
        } else {
                $guardian_slider = false;
        }

        $ajax_data = array(
                'guardian_slider' => $guardian_slider,
                'image_speed'     => $wl_theme_options['slider_image_speed'],
        );

        wp_enqueue_script( 'guardian-ajax-front', get_template_directory_uri() . '/js/guardian-ajax-front.js', array( 'jquery' ), true, true );
        wp_localize_script( 'guardian-ajax-front', 'ajax_admin', array(
                'ajax_url'    => admin_url( 'admin-ajax.php' ),
                'admin_nonce' => wp_create_nonce( 'admin_ajax_nonce' ),
                'ajax_data'   => $ajax_data,
        ) );

		if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 	
	}
	add_action('wp_enqueue_scripts', 'guardian_scripts');
	
	
	/*==================
	* Add Class Gravtar
	* ==================*/
	add_filter( 'get_avatar', 'weblizar_gravatar_class' );
	function weblizar_gravatar_class( $class ) {
	    $class = str_replace( "class='avatar", "class='author_detail_img", $class );
	    return $class;
	}
	
	/****--- Navigation for POSTS, Author, Category , Tag , Archive ---***/	
	function weblizar_navigation() { ?>
		<div class='pagination'>
			<nav id="wblizar_nav">
				<span class="nav-previous"><?php previous_posts_link('&laquo; Older Post'); ?></span>
				<span class="nav-next"><?php next_posts_link('Newer Post &raquo;'); ?></span> 
			</nav>
		</div><?php
	}	
	
	/****--- Navigation for Single ---***/
	function weblizar_navigation_posts(){ ?>	
		<nav id="wblizar_nav">
			<span class="nav-previous"><?php previous_post_link('&laquo; %link'); ?></span>
			<span class="nav-next"><?php next_post_link('%link &raquo;'); ?></span> 
		</nav><?php 
	}
	/* Breadcrumbs  */
	function weblizar_breadcrumbs() {
	    $delimiter = '';
	    $home      = __('Home','guardian'); // text for the 'Home' link
	    $before    = ''; // tag before the current crumb
	    $after     = ''; // tag after the current crumb
	    echo '<div class="pagenation">';
	    global $post;
	    $homeLink = esc_url(home_url());
	    echo '<a href="' . $homeLink . '">' . $home . '</a> <i>/</i>' . $delimiter . ' ';
	    if (is_category()) {
	        global $wp_query;
	        $cat_obj = $wp_query->get_queried_object();
	        $thisCat = $cat_obj->term_id;
	        $thisCat = get_category($thisCat);
	        $parentCat = get_category($thisCat->parent);
	        if ($thisCat->parent != 0)
	            echo( esc_html(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ')));
	        echo $before . __('Archive by category "','guardian') . single_cat_title('', false) . '"' . $after;
	    } elseif (is_day()) {
	        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> <i>/</i> ' . $delimiter . ' ';
	        echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> <i>/</i> ' . $delimiter . ' ';
	        echo $before . get_the_time('d') . $after;
	    } elseif (is_month()) {
	        echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> <i>/</i>' . $delimiter . ' ';
	        echo $before . get_the_time('F') . $after;
	    } elseif (is_year()) {
	        echo $before . get_the_time('Y') . $after;
	    } elseif (is_single() && !is_attachment()) {
	        if (get_post_type() != 'post') {
	            $post_type = get_post_type_object(get_post_type());
	            $slug = $post_type->rewrite;
	            echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> <i>/</i> ' . $delimiter . ' ';
	            echo $before . esc_html(get_the_title()) . $after;
	        } else {
	            $cat = get_the_category();
	            $cat = $cat[0];
	            //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
	            echo $before . esc_html(get_the_title()) . $after;
	        }
	    } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
	        $post_type = get_post_type_object(get_post_type());
			$count_posts = wp_count_posts()->publish;
			if($count_posts != '') {
	        echo $before . $post_type->labels->singular_name . $after;
			}
	    } elseif (is_attachment()) {
	        $parent = get_post($post->post_parent);
	        $cat = get_the_category($parent->ID);
	        $cat = $cat[0];
	        echo esc_html(get_category_parents($cat, TRUE, ' ' . $delimiter . ' '));
	        echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> <i>/</i> ' . $delimiter . ' ';
	        echo $before . esc_html(get_the_title()) . $after;
	    } elseif (is_page() && !$post->post_parent) {
	        echo $before . esc_html(get_the_title()) . $after;
	    } elseif (is_page() && $post->post_parent) {
	        $parent_id = $post->post_parent;
	        $breadcrumbs = array();
	        while ($parent_id) {
	            $page = get_page($parent_id);
	            $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' .esc_html( get_the_title($page->ID)) . '</a> <i>/</i>';
	            $parent_id = $page->post_parent;
	        }
	        $breadcrumbs = array_reverse($breadcrumbs);
	        foreach ($breadcrumbs as $crumb)
	            echo $crumb . ' ' . $delimiter . ' ';
	        echo $before . esc_html(get_the_title()) . $after;
	    } elseif (is_search()) {
	        echo $before . __('Search results for "','guardian') . get_search_query() . '"' . $after;
	    } elseif (is_tag()) {
	        echo $before . __('Posts tagged "','guardian') . single_tag_title('', false) . '"' . $after;
	    } elseif (is_author()) {
	        global $author;
	        $userdata = get_userdata($author);
	        echo $before . __('Articles posted by ','guardian') . $userdata->display_name . $after;
	    } elseif (is_404()) {
	        echo $before . __('Error 404','guardian') . $after;
	    }
	    if (get_query_var('paged')) {
	        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
	            echo ' (';
	        //echo __('Page', 'guardian') . ' ' . get_query_var('paged');
	        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
	            echo ')';
	    }
	    echo '</div>';
	}
	
	//Plugin Recommend
add_action('tgmpa_register','Guardian_plugin_recommend');
function Guardian_plugin_recommend(){
	$plugins = array(
	array(
            'name'      => 'Responsive Coming Soon',
            'slug'      => 'responsive-coming-soon-page',
            'required'  => false,
        ),
	array(
            'name'      => 'Admin Custom Login',
            'slug'      => 'admin-custom-login',
            'required'  => false,
        ),

	array(
            'name'      => 'Weblizar Companion',
            'slug'      => 'weblizar-companion',
            'required'  => false,
        )

		
	);
    tgmpa( $plugins );
}

if ( is_admin() ) {
	require_once('core/admin/admin-themes.php');
}

add_action( 'wp_enqueue_scripts', 'guardian_custom_css' );
function guardian_custom_css() {
	$wl_theme_options = weblizar_get_options(); 
    $output = '';
	$output .= '.logo a{
			font-family: '. $wl_theme_options['main_heading_font'].';
		}';
	$output .= '.navbar .navbar-nav li a{
			font-family: '. $wl_theme_options['menu_font'].';
		}';
	$output .= '.carousel-caption p strong, .feature_section1 h2, h5.caps, .feature_section5 h2,  .one_third h4, .footer1 h4.lmb,
	    .title h1, .page_title2 .pagenation, .sidebar_widget h4, .blog_post h3 a{
			font-family:'. $wl_theme_options['theme_title'].';
	    }';
	$output .= '.feature_section1 h2 b, .carousel-caption p, .one_fourth p,.one_third p, a.lfour, .post_meta_links li,
		.blog_postcontent p, #wblizar_nav, .content_left h4, .comment_author, 
		.comment_text p, .comment_content .comment_text a,
		.comment_submit, #comment_submit, .sidebar_widget ul a, .qlinks li a, 
		.copyright_info a, .one_third,.content_left p, .content_left h3, .recentcomments, 
		.textwidget{
			font-family: '. $wl_theme_options['desc_font_all'] .';
		}';

	//custom css
	if ( isset ( $wl_theme_options['custom_css'] ) ) { 
		$output .= $wl_theme_options['custom_css'] . "\n";
	}

    wp_register_style( 'custom-header-style', false );
    wp_enqueue_style( 'custom-header-style', get_template_directory_uri() . '/css/custom-header-style.css' );
    wp_add_inline_style( 'custom-header-style', $output );

}