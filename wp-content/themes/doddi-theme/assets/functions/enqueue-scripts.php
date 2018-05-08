<?php
function site_scripts() {

  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2', true );

    /* UNCOMMENT ANY OF THE FOLLOWING IF NEEDED */


    // MODERNIZR
    // wp_enqueue_script( 'modernizer-js', get_template_directory_uri() . '/assets/js/scripts/modernizr.js', array( 'jquery' ), '', false );


    // GREENSOCK (more plugins available in plugins folder)
    // wp_enqueue_script( 'greensock-js', get_template_directory_uri() . '/assets/js/scripts/greensock/src/minified/TweenMax.min.js', array( 'jquery' ), '', true );
    // wp_enqueue_script( 'greensock-tl-js', get_template_directory_uri() . '/assets/js/scripts/greensock/src/minified/TimelineMax.min.js', array( 'jquery' ), '', true );


    // SCROLLMAGIC
    wp_enqueue_script( 'scrollmagic-js', get_template_directory_uri() . '/assets/js/scripts/scrollmagic/ScrollMagic.min.js', array( 'jquery' ), '', false );
    wp_enqueue_script( 'scrollmagic-indicators-js', get_template_directory_uri() . '/assets/js/scripts/scrollmagic/addindicators.js', array( 'jquery' ), '', true );


    // OWL CAROUSEL
    // wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/scripts/owl-carousel/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '', true );
    // wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/assets/js/scripts/owl-carousel/owl-carousel/owl.carousel.css', array(), '', 'all' );
    // wp_enqueue_style( 'owl-css-theme', get_template_directory_uri() . '/assets/js/scripts/owl-carousel/owl-carousel/owl.theme.css', array(), '', 'all' );
    // wp_enqueue_style( 'owl-css-transitions', get_template_directory_uri() . '/assets/js/scripts/owl-carousel/owl-carousel/owl.transitions.css', array(), '', 'all' );

    // PICTUREFILL
    // wp_enqueue_script( 'picturefill-js', get_template_directory_uri() . '/assets/js/scripts/picturefill-master/src/picturefill.js', array( 'jquery' ), '', true );

    //Flickity
    wp_enqueue_script( 'flickity-js', get_template_directory_uri() . '/assets/js/flickity.js', array( 'jquery' ), '', true );

    // Font fontawesome
    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js', array( 'jquery' ), '', true );

    // Adding scripts file in the footer (change path to min when site goes live)
    wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
    // wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/assets/js/scripts.min.js', array( 'jquery' ), '', true );


    // Ajax enqueue example using main script.js as the place to do the jquery

/*
	wp_localize_script( 'general-js', 'MyAjax_funcname', array(

		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'security' => wp_create_nonce( 'string_funcname' )
	));
*/


    // Register main stylesheet (can be changed to minified path route when site goes live)
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
    //wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), '', 'all' );



    // Comment reply script for threaded comments
/*
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
*/
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
