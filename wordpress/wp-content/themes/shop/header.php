<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
	        <div class="container">
	            <div class="row">
	                <div class="logo col-md-2 col-sm-4 col-xs-5">
	                    <a href="<?php echo home_url( '/' ); ?>" title="logo"><img src="<?php echo get_val_option_tree( 'logo' ); ?>" alt="logo">
	                    </a>
	                </div>
	            </div>
	        </div>
	    </header>
	    <!-- /header -->

	    <nav class="navbar navbar-default main-navbar" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
	            </div>
	            <div id="navbar" class="navbar-collapse collapse">
	            	<?php wp_nav_menu( array( 'container_class' => 'navmenu-wrapper', 'theme_location' => 'top', 'items_wrap' => '<ul id="top-menu" class="nav navbar-nav">%3$s</ul>' ) ); ?>	            	
	            </div>
	            <!--/.nav-collapse -->
	        </div>
	    </nav>
	    <!-- End menu section -->


	<?php if(!is_product()){?>									
		<?php get_template_part( 'template-parts/banner/banner'); ?>
	<?php } ?>