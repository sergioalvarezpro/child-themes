<?php
//Carga de style child
add_action( 'wp_enqueue_scripts', 'enqueue_styles_child_theme' );
function enqueue_styles_child_theme() {

	$child_style  = 'twentytwentyone-child';
	$parenthandle = 'twenty-twenty-one-style';

    wp_enqueue_style( $child_style, get_stylesheet_uri(),
        array( $parenthandle ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}

//Adaptaciones de Gutenberg
// add_theme_support( 'editor-styles' );
// add_editor_style();

//Carga de tipografía
add_action('wp_enqueue_scripts', 'enqueue_fonts_child_theme');

function enqueue_fonts_child_theme() {

    wp_enqueue_style('metamorphous', get_stylesheet_directory_uri() . '/fonts/metamorphous-v18-latin/stylesheet.css');

	wp_enqueue_style('source-sans-3', get_stylesheet_directory_uri() . '/fonts/source-sans-3-v8-latin/stylesheet.css');
	
	};
