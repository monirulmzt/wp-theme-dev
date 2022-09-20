<?php

if(! function_exists('medinova_setup')){
    function medinova_setup(){
        load_theme_textdomain('medinova',get_template_directory().'/langueses');

        add_theme_support('post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video'));
        /**
	 * Enable support for post thumbnails and featured images.
	 */
	    add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', ) );
        add_theme_support( 'automatic-feed-links' );
        /**
	 * Add support for two custom navigation menus.
	 */
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'medinova' ),
            'secondary' => __('Secondary Menu', 'medinova' ),
            'footer' => __('Footer Menu', 'medinova' )
        ) );

        if(!function_exists('medinova_scripts')){
            function medinova_scripts(){

                //Style
                wp_enqueue_style( 'style', get_stylesheet_uri() );

                wp_enqueue_style( 'mainstyle', get_template_directory_uri() . '/css/style.css',false,'1.1','all');

                wp_enqueue_style( 'carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css',false,'1.1','all');

                wp_enqueue_style( 'tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',false,'1.1','all');

                wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'1.1','all');

                //Style cdn
                wp_register_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' );
                wp_enqueue_style('font-awesome');

                wp_register_style( 'jsdelivr', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' );
                
                wp_enqueue_style('jsdelivr');

                //Scripts
                wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', null, null, true);

                wp_enqueue_script( 'easing', get_template_directory_uri() . '/lib/easing/easing.min.js', null, null, true);

                wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', null, null, true);

                wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', null, null, true);

                wp_enqueue_script( 'tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/js/moment.min.js', null, null, true);

                wp_enqueue_script( 'tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/js/moment-timezone.min.js', null, null, true);

                wp_enqueue_script( 'tempusdominus', get_template_directory_uri() . '/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', null, null, true);

                //Script cdn
                wp_register_script( 'jQuery', 'https://code.jquery.com/jquery-3.4.1.min.js', null, null, true );
                wp_enqueue_script('jQuery');

                wp_register_script( 'jsdelivr-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', null, null, true );
                wp_enqueue_script('jsdelivr-script');
    

                if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                    wp_enqueue_script( 'comment-reply' );
                  }
                
            }
        }
        add_action( 'wp_enqueue_scripts', 'medinova_scripts' );

    }
}

add_action('after_setup_theme','medinova_setup');



?>