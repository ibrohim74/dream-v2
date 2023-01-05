<?php
function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css' , '', 1 , 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri(). '/assets/main.css' , '', 1 , 'all');
    wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_js(){
    wp_register_script('custom',get_template_directory_uri().'/assets/js/script.js', 'jquery' , 1 , true);
    wp_enqueue_script('custom');

    wp_register_script('bootstrap_js',get_template_directory_uri().'/assets/bootstrap/js/bootstrap.js', 'jquery' , 1 , true);
    wp_enqueue_script('bootstrap_js');
}
add_action('wp_enqueue_scripts' , 'load_js');


add_theme_support('menus');
add_theme_support('post_thumbnails');


register_nav_menus(
    array(
        'top-menu' => 'Top menu'
    )
);

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );