<?php
    $walker = new Menu_With_Description;
    wp_nav_menu( array( 'container_class' => 'navmenu-wrapper', 'theme_location' => 'banner-menu', 'walker' => $walker ) );
?>