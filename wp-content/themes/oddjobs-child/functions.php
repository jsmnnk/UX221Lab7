<?php
function oddjobs_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'oddjobs_enqueue_styles');
?>

function oddjobs_add_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap', false);
}
add_action('wp_enqueue_scripts', 'oddjobs_add_google_fonts');
