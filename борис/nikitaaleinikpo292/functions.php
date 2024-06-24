<?php
function exam_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}

add_action('after_setup_theme', 'exam_theme_setup');

function exam_theme_scripts() {
    wp_enqueue_script('exam-script', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'exam_theme_scripts');

function theme_prefix_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100, // Высота логотипа
        'width'       => 400, // Ширина логотипа
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );
?>