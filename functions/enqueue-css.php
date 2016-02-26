<?php 

function enqueue_page_styles()
{
    
    /**
     * Default Styles
     */
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome-4.5.0/css/font-awesome.min.css', false );
    //wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/vendor/bootstrap.css', false );
    wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/vendor/ie-bootstrap-theme.min.css', false );
    wp_enqueue_style( 'root', get_template_directory_uri() . '/css/root.css', false );

    /**
     * Default Scripts
     */
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), false, false );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/vendor/jquery-1.11.3.min.js', array(), false, true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), false, true );

    /**
     * Conditionals
     */
    if ( is_page( 'login' ) )
    {
    	wp_enqueue_style( 'engineering', get_template_directory_uri() . '/css/engineering.css', false );
    	wp_enqueue_script( 'engineering_js', get_template_directory_uri() . '/js/engineering.js', array(), false, true );
        wp_enqueue_script( 'login_js', get_template_directory_uri() . '/js/login.js', array(), false, true );
    }

    if ( is_page( 'engineering' ) )
    {
        wp_enqueue_style( 'engineering', get_template_directory_uri() . '/css/engineering.css', false );
        wp_enqueue_script( 'engineering_js', get_template_directory_uri() . '/js/engineering.js', array(), false, true );
    }

}
add_action( 'wp_enqueue_scripts', 'enqueue_page_styles' );
