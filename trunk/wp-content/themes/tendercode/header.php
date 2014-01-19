<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Code_Tender
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    
    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon"/>
    <link rel="stylesheet" id="responsive-style-css"  href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" id="responsive-media-queries-css"  href="<?php echo get_template_directory_uri(); ?>/css/responsive-core.css" type="text/css" />    
    <link rel="stylesheet" id="responsive-styles-css"  href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css" />
    <link rel="stylesheet" id="responsive-styles-css"  href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" />
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsive-modernizr.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="container">
        <div id="header" class="clearfix">
            <div class="top-head">
                <div id="logo">
                    <a href="index.html"><img alt="Croquelune" src="<?php echo get_template_directory_uri();?>/images/logo.png" /></a>
                </div><!-- end of #logo -->
            </div>
            <div class="main-nav">
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'menu' ) ); ?>
            </div>
        </div>
        <div id="wrapper" class="clearfix">
