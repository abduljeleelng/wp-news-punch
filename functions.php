<?php
/**
 * Created by PhpStorm.
 * User: AbduljeleelNG
 * Date: 5/20/2021
 * Time: 3:33 PM
 */

function PunchngWP_enqueue() {
    /*
    if($_SERVER['SERVER_NAME'] != 'localhost'){
        wp_enqueue_style('style', get_template_directory_uri() . '/style.min.css');
    } else{
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
    */
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/assets/lib/slick/slick.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/lib/slick/slick-theme.css');

    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');

    wp_enqueue_style('Montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap");

    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');



    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );

    wp_enqueue_script( 'jquerycdn', 'https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/lib/easing/easing.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/lib/slick/slick.min.js', array('jquery'), '', true );

}

add_action('wp_enqueue_scripts', 'PunchngWP_enqueue');

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'header' => 'Custom Primary Menu',
) );

function PunchngWP_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer 1',
        'id'            => 'footer_1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 2',
        'id'            => 'footer_2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer 3',
        'id'            => 'footer_3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ttl">',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'PunchngWP_widgets_init' );


add_theme_support( 'custom-header', array(
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'uploads'                => true,
    'random-default'         => false,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    'default-image' => get_template_directory_uri() . '/assets/img/ads-1.jpg',
) );

add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
