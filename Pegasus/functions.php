<?php

include 'acf/acf-settings.php';

add_theme_support('post-thumbnails');

function resources() {
	//Stylesheets
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap' );
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_style( 'slick' );
	wp_register_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'slick-theme' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );

	//Scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array('jquery'));
	wp_enqueue_script( 'zoom', get_template_directory_uri() . '/js/zoom.js', array('jquery'));
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'resources' );

//Custom Post Types

function RV_post_types() {
	register_post_type('Models', array(
		'labels' => array(
			'name' => __('Models'),
			'singular_name' => __('Model')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'models'),
		'menu_icon' => 'dashicons-carrot',
		'supports' => array('title','editor','thumbnail'),
		'taxonomies' => array('category')
		)
	);
}

add_action('init', 'RV_post_types');

function RV_tax() {
	register_taxonomy(
		'brands',
		'models',
		array(
			'label' => __( 'Brands' ),
			'rewrite' => array( 'slug' => 'brand' ),
			'hierarchical' => true,
			)
		);
}

add_action('init', 'RV_tax');


function get_brand($postID) {
	$brandlist =  wp_get_post_terms($postID, 'brands');
	return $brandlist[0];
}

?>