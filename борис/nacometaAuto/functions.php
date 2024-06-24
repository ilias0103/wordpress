<?php


add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );


	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});


add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100, // Высота логотипа
        'width'       => 400, // Ширина логотипа
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}

add_theme_support( 'customize-selective-refresh-widgets' );

add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'меню в шапке' );
}

?>