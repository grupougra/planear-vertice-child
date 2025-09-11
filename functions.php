<?php
// Cargar estilos del tema padre y del hijo
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('vertice-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('vertice-child', get_stylesheet_directory_uri() . '/style.css', ['vertice-parent'], wp_get_theme()->get('Version'));
});
