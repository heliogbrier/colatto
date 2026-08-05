<?php
/**
 * Template para exibição de post único.
 */

get_header();

$focus_ring = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#a6824f]';

$whatsapp_number  = '';
$whatsapp_message = rawurlencode('Olá! Gostaria de falar com um advogado da Colatto Advogados.');
$whatsapp_link    = $whatsapp_number ? 'https://wa.me/' . $whatsapp_number . '?text=' . $whatsapp_message : '#contato';

while (have_posts()) :
    the_post();

    $categorias        = get_the_category();
    $categoria_principal = $categorias[0] ?? null;
    $eyebrow_label     = $categoria_principal ? $categoria_principal->name : 'Notícias';

    $word_count   = str_word_count(wp_strip_all_tags(get_the_content()));
    $reading_time = max(1, (int) ceil($word_count / 200));

    $related_query = null;
    if ($categoria_principal) {
        $related_query = new WP_Query([
            'category__in'        => [$categoria_principal->term_id],
            'post__not_in'        => [get_the_ID()],
            'posts_per_page'      => 3,
            'orderby'             => 'date',
            'order'               => 'DESC',
            'ignore_sticky_posts' => true,
        ]);
    }
?>

<article <?php post_class(); ?>>

    <header class="relative overflow-hidden bg-[#f7f4ee] px-6 pb-12 pt-16 md:px-20 md:pb-16 md:pt-24">
        <div class="relative z-10 mx-auto flex max-w-3xl flex-col gap-8">
            <a href="<?php echo esc_url(home_url('/#noticias')); ?>" class="flex w-fit items-center gap-2 rounded font-sans text-sm font-medium text-[#3a4a37] transition hover:text-[#a6824f] <?php echo $focus_ring; ?> animate-fade-up">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M11 18l-6-6 6-6"/></svg>
                Notícias
            </a>

            <div class="flex items-center gap-3 animate-fade-up [animation-delay:80ms]">
                <span class="h-1.5 w-1.5 rotate-45 bg-[#a6824f]" aria-hidden="true"></span>
                <p class="font-sans text-xs font-semibold uppercase tracking-[0.28em] text-[#6b5636]"><?php echo esc_html($eyebrow_label); ?></p>
            </div>

            <h1 class="font-display text-4xl font-light leading-[1.15] tracking-tight text-[#20341f] sm:text-5xl md:text-6xl animate-fade-up [animation-delay:140ms]">
                <?php the_title(); ?>
            </h1>

            <div class="flex flex-wrap items-center gap-x-3 gap-y-1 font-sans text-sm text-[#3a4a37]/70 animate-fade-up [animation-delay:200ms]">
                <span><?php echo esc_html(get_the_date('j \d\e F \d\e Y')); ?></span>
                <span aria-hidden="true">&middot;</span>
                <span><?php echo esc_html($reading_time); ?> min de leitura</span>
            </div>
        </div>
    </header>

    <?php if (has_post_thumbnail()) : ?>
    <div class="mx-auto -mt-2 max-w-4xl px-6 md:px-20">
        <div class="aspect-[16/9] overflow-hidden rounded-3xl bg-[#20341f]/5">
            <?php the_post_thumbnail('large', ['class' => 'h-full w-full object-cover', 'loading' => 'eager']); ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="bg-white px-6 py-16 md:px-20 md:py-20">
        <div class="mx-auto max-w-3xl">
            <div class="article-content">
                <?php the_content(); ?>
            </div>

            <?php $tags = get_the_tags(); ?>
            <?php if ($tags) : ?>
            <div class="mt-12 flex flex-wrap gap-2 border-t border-[#20341f]/10 pt-8">
                <?php foreach ($tags as $tag) : ?>
                <a href="<?php echo esc_url(get_tag_link($tag)); ?>" class="rounded-full border border-[#20341f]/15 px-3 py-1 font-sans text-xs text-[#3a4a37] transition hover:border-[#a6824f] hover:text-[#a6824f] <?php echo $focus_ring; ?>">
                    #<?php echo esc_html($tag->name); ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php
                $prev_link = get_previous_post_link('%link', '&larr; %title');
                $next_link = get_next_post_link('%link', '%title &rarr;');
            ?>
            <?php if ($prev_link || $next_link) : ?>
            <nav class="mt-12 grid gap-4 border-t border-[#20341f]/10 pt-8 font-sans text-sm font-medium text-[#20341f] sm:grid-cols-2" aria-label="Navegação entre notícias">
                <div class="[&_a]:transition [&_a]:hover:text-[#a6824f] <?php echo $focus_ring; ?>"><?php echo $prev_link; ?></div>
                <div class="text-left sm:text-right [&_a]:transition [&_a]:hover:text-[#a6824f] <?php echo $focus_ring; ?>"><?php echo $next_link; ?></div>
            </nav>
            <?php endif; ?>
        </div>
    </div>

    <?php if ($related_query && $related_query->have_posts()) : ?>
    <section class="bg-[#f7f4ee] px-6 py-20 md:px-20 md:py-28">
        <div class="mx-auto max-w-6xl">
            <div class="flex flex-col items-center gap-4 text-center">
                <div class="flex items-center gap-3">
                    <span class="h-1.5 w-1.5 rotate-45 bg-[#a6824f]" aria-hidden="true"></span>
                    <p class="font-sans text-xs font-semibold uppercase tracking-[0.28em] text-[#6b5636]">Continue lendo</p>
                </div>
                <h2 class="font-display text-3xl font-light text-[#20341f] sm:text-5xl">Mais notícias</h2>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-x-8 gap-y-14 md:grid-cols-3">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                <article class="flex flex-col justify-between gap-4">
                    <p class="font-sans text-xs font-semibold uppercase tracking-[0.18em] text-[#a6824f]"><?php echo esc_html(get_the_date()); ?></p>
                    <h3 class="font-display text-2xl leading-snug text-[#20341f]">
                        <a href="<?php the_permalink(); ?>" class="transition hover:text-[#a6824f] <?php echo $focus_ring; ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="font-sans text-base leading-relaxed text-[#3a4a37]"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="mt-1 inline-flex w-fit items-center gap-2 font-sans text-sm font-semibold text-[#20341f] underline decoration-[#a6824f]/40 decoration-2 underline-offset-4 transition hover:decoration-[#a6824f] <?php echo $focus_ring; ?>">
                        Continuar lendo
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
                    </a>
                </article>
                <?php endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
    <?php endif; ?>

    <section id="contato" class="bg-[#4d5c4d] px-6 bg-repeat py-16 md:px-20 md:py-20">
        <div class="mx-auto flex max-w-6xl flex-col gap-8 md:flex-row md:items-center md:justify-between">
            <h2 class="max-w-lg font-display text-2xl font-light text-[#ded8cc] sm:text-3xl">Precisa de orientação jurídica sobre este assunto?</h2>
            <a href="<?php echo esc_url($whatsapp_link); ?>" class="flex h-14 w-full items-center justify-center gap-2 rounded-full bg-[#ded8cc] px-10 text-base font-medium text-[#20341f] transition hover:bg-white <?php echo $focus_ring; ?> md:w-auto">
                <i class="fa fa-whatsapp text-lg" aria-hidden="true"></i>
                <span>Fale conosco</span>
            </a>
        </div>
    </section>

</article>

<?php
endwhile;

get_footer();
