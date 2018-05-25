<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shabbir
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="SRBThemes" />

		
		<?php $favicon_uploader = get_field('favicon_uploader','option'); 
			if($favicon_uploader): ?>
        <link rel="shortcut icon" href="<?php echo $favicon_uploader['url']; ?>">
		<?php endif; ?>
		
		
	<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">Loading...</div>
            </div>
        </div>

        <!-- Start Navbar -->
    	
		<?php if(is_front_page()): ?>
    	<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
		
		<?php else: ?>
		<nav class="navbar navbar-expand-lg fixed-top custom-nav page-nav sticky">
		<?php endif; ?>
            <div class="container">

                <a class="navbar-brand pt-0 logo" href="<?php echo home_url(); ?>">
					<?php $logo_upload_light = get_field('logo_upload_light','option'); 
					if($logo_upload_light): ?>
						<img src="<?php echo $logo_upload_light['url']; ?>" alt="<?php echo $logo_upload_light['title']; ?>" class="img-fluid logo-light">
					<?php endif; ?>
					
					<?php $logo_upload_dark = get_field('logo_upload_dark','option'); 
					if($logo_upload_dark): ?>
                    <img src="<?php echo $logo_upload_dark['url']; ?>" alt="<?php echo $logo_upload_dark['title']; ?>" class="img-fluid logo-dark">
					<?php endif; ?>
					
					
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#shabbirMenu" aria-controls="shabbirMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="shabbirMenu">
					<?php wp_nav_menu(array(
						'theme_location'		=> 'main-menu',
						'menu_class'			=> 'navbar-nav ml-auto',
						'menu_id'				=> ' ',
						'fallback_cb'			=> 'default_menu',
						'container'				=> ' ',
					)); ?>
                 
                </div>
            </div>
        </nav>
        <!-- End Navbar -->