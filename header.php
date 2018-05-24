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

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

	<?php wp_head(); ?>
    </head>

    <body>
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

                <a class="navbar-brand pt-0 logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="img-fluid logo-light">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-dark.png" alt="" class="img-fluid logo-dark">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#client">Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->