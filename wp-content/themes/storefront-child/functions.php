<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

function styles() {
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('owl-css-full', get_stylesheet_directory_uri() . '/assets/OwlCarousel/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css');
    // wp_enqueue_style('owl-css', get_stylesheet_directory_uri() . '/assets/OwlCarousel/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-second-css', get_stylesheet_directory_uri() . '/assets/OwlCarousel/OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.min.css');
}
add_action( 'wp_enqueue_scripts', 'styles' );

function scripts() {
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() .'/assets/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), true);
    wp_enqueue_script('owl-js', get_stylesheet_directory_uri() .'/assets/OwlCarousel/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.min.js', array('jquery'), true);
    wp_enqueue_script('inputmask', 'https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.js', array('jquery'), '5.0.6', true);
}
add_action( 'wp_enqueue_scripts', 'scripts' );



// END ENQUEUE PARENT ACTION
