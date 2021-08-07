<?php
    $service_home = absint(get_theme_mod( 'service_home','1' )) ;
    if ( $service_home == "1" ) {
        do_action( 'wl_companion_service_guardian');
    }
?>