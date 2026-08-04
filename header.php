<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="">
    <div class="py-6">
        <div class="flex justify-between items-center px-6">
            <div>
                <a href="">
                    <img class="w-40 h-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                </a>
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
        </div>
    </div>
