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
    <?php $focus_ring = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#a6824f]'; ?>
    <header id="site-header" class="sticky top-0 z-50 w-full bg-[#f7f4ee]/95 backdrop-blur-sm">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5 md:px-20 md:py-6">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="shrink-0 rounded <?php echo $focus_ring; ?>">
                <img class="h-10 w-auto md:h-12" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/colatto-advogados.png" alt="<?php bloginfo('name'); ?>">
            </a>

            <nav class="hidden md:block" aria-label="Menu principal">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'nav-menu flex items-center gap-8 font-sans text-sm font-medium text-[#20341f]',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ]);
                ?>
            </nav>

            <button
                type="button"
                id="menu-toggle"
                class="menu-toggle relative flex h-11 w-11 shrink-0 items-center justify-center rounded-full text-[#20341f] transition-colors hover:bg-[#20341f]/5 md:hidden <?php echo $focus_ring; ?>"
                aria-expanded="false"
                aria-controls="mobile-menu"
                aria-label="Abrir menu"
            >
                <span class="hamburger" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>
        </div>

        <div id="mobile-menu" class="mobile-menu md:hidden" aria-hidden="true">
            <nav class="px-6 pb-6" aria-label="Menu mobile">
                <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'nav-menu flex flex-col gap-1 font-sans text-base font-medium text-[#20341f]',
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ]);
                ?>
            </nav>
        </div>
    </header>
