<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Praxis
 */

?>
	<!DOCTYPE doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Pressionate" name="author"/>
        <meta content="" name="description"/>
        <meta content="" name="keywords"/>
        <link href="<?php echo get_template_directory_uri();?>/assests/img/favicon.png" rel="icon"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Source+Sans+Pro:300,400,600,700" rel="stylesheet"/>
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    	<!-- Start Preloader -->
    	<div id="preloader">
		 	<div id="status">
		    	<div class="spinner">
			     	<div class="rect1"></div>
			     	<div class="rect2"></div>
			     	<div class="rect3"></div>
			     	<div class="rect4"></div>
			     	<div class="rect5"></div>
		    	</div>
		 	</div>
		</div>
		<!-- End Preloader -->

        <!-- Start Site Header -->
        <header class="site-header">
            <div class="container header-wrap">
                <div class="site-branding">
                <!-- For Image Logo -->
                    <a href="<?php echo get_home_url(); ?>" class="custom-logo-link">
                    <?php
                       if(function_exists('cs_get_option')){
                           $text_logo = cs_get_option('text-logo');
                           $logo = cs_get_option('img-logo');
                           $img = wp_get_attachment_image_src($logo, 'full');
                           $text_logo_swch_logo = cs_get_option('text_logo_swch');
                           $img_logo_swch_logo = cs_get_option('img_logo_swch');

                       }
                    ?>
                    <?php if($text_logo_swch_logo == true){?>
                    <h2 style="text-transform:uppercase"><?php echo esc_html($text_logo);?></h2>
                    <?php }?>
                    <?php if($img_logo_swch_logo == true){?>
                    <img src="<?php echo $img[0];?>" alt="" class="custom-logo">
                    <?php }?>
                </a>
                <!-- For Site Title -->
                <!-- <span class="site-title">
                    <a href="index.html">Buildm</a>
                </span> -->
                </div>
                <nav class="primary-nav">
                <ul class="primary-nav-list">
                <?php
                    wp_nav_menu(array('main_menu' => 'Main Menu'));
                ?>
                    </ul>

                </nav>
            </div><!-- .header-wrap -->
        </header>
        <!-- End Site Header --
