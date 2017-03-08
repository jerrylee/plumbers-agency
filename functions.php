<?php

function load_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css');
	wp_enqueue_style('bootstrap_styles', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('fancy-box', get_template_directory_uri() . '/css/jquery.fancybox.css');
	wp_enqueue_style('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style( 'queries', get_template_directory_uri() . '/css/queries.css');
	wp_enqueue_style('etline', get_template_directory_uri() . '/css/etline-font.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/bower_components/animate.css/animate.min.css');
	wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
	wp_enqueue_style('wordpress_styles', get_template_directory_uri() . '/css/wordpress.css');	
}
add_action('wp_enqueue_scripts', 'load_styles');


function load_scripts() {
	/*wp_enqueue_script('retina_scripts', get_template_directory_uri() . '/bower_components/retina.js/dist/retina.js', array('jquery'), '1.0', true);*/
	wp_enqueue_script('fancybox_scripts', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '1.0', true);
	wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('flexslider-scripts', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('classie', get_template_directory_uri() . '/bower_components/classie/classie.js', array('jquery'), '1.0', true);
	wp_enqueue_script('waypoints', get_template_directory_uri() . '/bower_components/jquery-waypoints/lib/jquery.waypoints.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('custom_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

/* Thumbnails */
add_theme_support( 'post-thumbnails' );

/* Gravity Forms Button Styling */
add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='btn btn-success' id='gform_submit_button_{$form['id']}'><span>Submit</span></button>";
}