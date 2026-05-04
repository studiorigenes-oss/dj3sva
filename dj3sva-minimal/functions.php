<?php
/**
 * dj3sva Minimalist functions and definitions
 */

if ( ! function_exists( 'dj3sva_minimal_setup' ) ) :
    function dj3sva_minimal_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'dj3sva-minimal' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'dj3sva_minimal_setup' );

function dj3sva_minimal_scripts() {
    // Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Inter:wght@300;400;600&display=swap', array(), null );
    
    // Animation library (AOS)
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true );

    // Main Styles
    wp_enqueue_style( 'dj3sva-minimal-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_style( 'dj3sva-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );

    // Main JS
    wp_enqueue_script( 'dj3sva-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'dj3sva_minimal_scripts' );

// Add local data for JS
function dj3sva_add_js_data() {
    wp_localize_script( 'dj3sva-main-js', 'dj3svaData', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' )
    ));
}
add_action( 'wp_enqueue_scripts', 'dj3sva_add_js_data' );
