<?php
/**
 * Created by PhpStorm.
 * User: NobleSoft
 * Date: 5/20/2021
 * Time: 1:17 PM

 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage punchng
 * @since Punch 1.0
 */
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'punch' ); ?></a>

<?php get_template_part( 'template-parts/header/topbar' ); ?>
<?php get_template_part( 'template-parts/header/brand' ); ?>
<?php get_template_part( 'template-parts/header/navbar' ); ?>

    <div id="content" class="site-content">
    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">



    <!---
<div class="container-fluid">


    <nav class="navbar navbar-default">

        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display --

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>


            </div>


            <!-- Collect the nav links, forms, and other content for toggling --

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <?php


                    // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)

                    // This code based on wp_nav_menu's code to get Menu ID from menu slug

                   // wp_nav_menu( array('menu' => 'primary', 'items_wrap' => '<ul><li id="item-id"></li>%3$s</ul>' ));



                    ?>

                </ul>



            </div><!-- /.navbar-collapse --

        </div><!-- /.container-fluid --

    </nav>
<?php //require "nav.php"; ?>