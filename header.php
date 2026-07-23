<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="">
    <div class="py-6">
        <div class="flex justify-between items-center px-6">
            <div>
                <a href="">logo</a>
            </div>
            <div>
                <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => 'nav',
                        'container_class'=> 'flex',
                        'menu_class'     => 'flex items-center gap-6',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ]);
                ?>
            </div>
            <div>
                <a href="">Fale cosnoco</a>
            </div>
        </div>
    </div>
