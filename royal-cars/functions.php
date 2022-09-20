<?php
if(!function_exists('royal_setup')){
    function royal_setup(){
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        Add_theme_support('post-thumbnails');
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'html5', array('style','script', ) );
        add_theme_support( 'automatic-feed-links' );
        
        /**
	 * Add support for two custom navigation menus.
	 */
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
		'secondary' => __('Secondary Menu', 'myfirsttheme' )
	) );
    if(!function_exists('royal_scripts')){
        function royal_scripts(){
            wp_enqueue_style( 'style', get_stylesheet_uri() );

           //Template Stylesheet
            wp_enqueue_style( 'mainstyle', get_template_directory_uri().'/css/style.css' );

            //Customized Bootstrap Stylesheet
            wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );

            //Libraries Stylesheet
            wp_enqueue_style( 'tempusdominus', get_template_directory_uri().'/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css' );
            wp_enqueue_style( 'owlcarousel', get_template_directory_uri().'/lib/owlcarousel/assets/owl.carousel.min.css' );
            
            //Font Awesome
            wp_register_style( 'Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css' );
            wp_enqueue_style('Font_Awesome');
            
            //Template Javascript 
            wp_enqueue_script('mainjs', get_template_directory_uri().'/js/main.js');

            //JavaScript Libraries
            wp_enqueue_script('easing', get_template_directory_uri().'/lib/easing/easing.min.js');
            wp_enqueue_script('waypoints', get_template_directory_uri().'/lib/waypoints/waypoints.min.js');
            wp_enqueue_script('owlcarousel', get_template_directory_uri().'/lib/owlcarousel/owl.carousel.min.js');
            wp_enqueue_script('tempusdominus', get_template_directory_uri().'/lib/tempusdominus/js/moment.min.js');
            wp_enqueue_script('tempusdominus-min', get_template_directory_uri().'/lib/tempusdominus/js/moment-timezone.min.js');
            wp_enqueue_script('tempusdominus-bootstrap', get_template_directory_uri().'/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js');

            //JavaScript Libraries cdn
            wp_register_style( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js' );
            wp_enqueue_style('jquery');
            wp_register_style( 'bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js' );
            wp_enqueue_style('bootstrapcdn');
        }
    }
    
    add_action('wp_enqueue_scripts','royal_scripts');
    }
}


add_action('after_setup_theme','royal_setup');
?>