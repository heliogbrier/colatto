<?php

function colatto_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => 'Menu Principal',
    ]);
}

add_action('after_setup_theme', 'colatto_setup');

function colatto_enqueue_assets() {
    wp_enqueue_style(
        'colatto',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'colatto_enqueue_assets');