<!-- sidebar starts -->
<div class="col-md-3 right_sidebar">
    <?php 
	    if ( is_active_sidebar( 'sidebar-primary' ) ) { 
	    	dynamic_sidebar( 'sidebar-primary' );
	    }
	?>
</div><!-- end right sidebar -->