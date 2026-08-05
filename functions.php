<?php
require_once get_template_directory() . '/inc/theme-settings.php';

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

/**
 * Tamanhos de imagem personalizados do tema.
 *
 * - colatto-advogado: foto quadrada usada na grade "Nossa equipe" (front-page,
 *   seção #advogados). Corte rígido (hard crop) para manter o enquadramento
 *   do retrato independentemente da proporção da imagem original.
 * - colatto-noticia-destaque: imagem de destaque exibida no topo dos posts
 *   de notícia (single.php), na proporção 16:9 usada pelo layout.
 *
 * Registrar os tamanhos com add_image_size() garante que o WordPress gere
 * automaticamente cada versão sempre que uma nova imagem for enviada à
 * biblioteca de mídia, sem depender de plugins ou regeneração manual.
 * Ao adicionar um novo tamanho ao tema, registre-o aqui em vez de espalhar
 * dimensões fixas pelos templates.
 */
function colatto_image_sizes() {
    add_image_size('colatto-advogado', 808, 808, true);
    add_image_size('colatto-noticia-destaque', 960, 540, true);
}
add_action('after_setup_theme', 'colatto_image_sizes');

/**
 * Disponibiliza os tamanhos personalizados no seletor de imagens do editor.
 */
function colatto_image_size_names($sizes) {
    return array_merge($sizes, [
        'colatto-advogado'         => 'Advogado (quadrado)',
        'colatto-noticia-destaque' => 'Notícia (destaque 16:9)',
    ]);
}
add_filter('image_size_names_choose', 'colatto_image_size_names');

function colatto_enqueue_assets() {
    wp_enqueue_style(
        'colatto',
        get_template_directory_uri() . '/assets/css/output.css',
        [],
        wp_get_theme()->get('Version'),
    );

    wp_enqueue_script(
        'colatto',
        get_template_directory_uri() . '/assets/js/app.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'colatto_enqueue_assets');

add_filter('show_admin_bar', '__return_false'); 
