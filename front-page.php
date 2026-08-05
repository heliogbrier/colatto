<?php
/**
 * Template da página inicial.
 */

get_header();

// Advogados listados automaticamente a partir dos posts da categoria
// "Advogados" (slug: advogados). O nome vem do título do post, o registro
// na OAB do resumo (campo "Resumo" do editor) e a foto da imagem destacada,
// gerada no tamanho colatto-advogado (ver functions.php).
$advogados_query = new WP_Query([
    'category_name'  => 'advogados',
    'posts_per_page' => -1,
    'orderby'        => 'ID',
    'order'          => 'ASC',
]);
$advogado_foto_padrao = get_template_directory_uri() . '/assets/images/placeholder.jpg';

// Número obtido das configurações institucionais (Configurações > Informações
// Institucionais). Enquanto não houver telefone cadastrado, os botões levam à
// seção de contato.
$whatsapp_number = preg_replace('/\D/', '', theme_get_phone());
if ($whatsapp_number && strpos($whatsapp_number, '55') !== 0) {
    $whatsapp_number = '55' . $whatsapp_number;
}
$whatsapp_message = rawurlencode('Olá! Gostaria de falar com um advogado da Colatto Advogados.');
$whatsapp_link    = $whatsapp_number ? 'https://wa.me/' . $whatsapp_number . '?text=' . $whatsapp_message : '#contato';

$areas_atuacao = new WP_Query([
    'category_name'  => 'areas-de-atuacao',
    'posts_per_page' => -1,
    'orderby'        => 'ID',
    'order'          => 'ASC',
]);
$areas_count = $areas_atuacao->found_posts;

$focus_ring = 'focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-[#a6824f]';
?>
<section id="inicio" class="relative overflow-hidden bg-[#f7f4ee] px-6 py-20 md:px-20 md:py-32">
    <svg class="pointer-events-none absolute inset-0 h-full w-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560" aria-hidden="true">
        <g mask="url(&quot;#SvgjsMask1006&quot;)" fill="none">
            <rect width="1440" height="560" x="0" y="0" fill="rgba(247, 244, 238, 1)"></rect>
            <path d="M396.61 569.83C542.68 567.93 655.24 406.66 955.38 398.84 1255.52 391.02 1359.29 136.91 1514.15 130.04" stroke="rgba(235, 228, 211, 1)" stroke-width="2"></path>
            <path d="M681.4 625.67C785.19 600 726.12 333.83 979.41 318.94 1232.7 304.05 1420.24 147.09 1575.43 145.34" stroke="rgba(235, 228, 211, 1)" stroke-width="2"></path>
            <path d="M239.85 619.39C366.05 616.07 472.9 434.03 709.48 433.81 946.07 433.59 944.3 503.81 1179.12 503.81 1413.93 503.81 1530.04 434 1648.75 433.81" stroke="rgba(235, 228, 211, 1)" stroke-width="2"></path>
            <path d="M240.19 587.6C423.49 575.44 558.66 226.77 880.21 226.62 1201.76 226.47 1349.8 458.14 1520.23 461.82" stroke="rgba(235, 228, 211, 1)" stroke-width="2"></path>
            <path d="M286.18 622C461.07 618.69 596.9 397.26 946.54 390.7 1296.19 384.14 1432.15 164.34 1606.91 161.1" stroke="rgba(235, 228, 211, 1)" stroke-width="2"></path>
        </g>
        <defs>
            <mask id="SvgjsMask1006">
                <rect width="1440" height="560" fill="#ffffff"></rect>
            </mask>
        </defs>
    </svg>
    <div class="relative z-10 mx-auto flex max-w-6xl flex-col gap-10">
        <div class="flex items-center gap-3 animate-fade-up">
            <span class="h-1.5 w-1.5 rotate-45 bg-[#a6824f]" aria-hidden="true"></span>
            <p class="font-sans text-xs font-semibold uppercase tracking-[0.28em] text-[#6b5636]">Colatto Advogados &middot; Desde 1990</p>
        </div>

        <h1 class="max-w-4xl font-display text-4xl font-light leading-[1.1] tracking-tight text-[#20341f] sm:text-6xl md:text-7xl animate-fade-up [animation-delay:100ms]">
            Orientação jurídica sólida para decisões que <em class="italic text-[#a6824f]">não podem esperar</em>.
        </h1>

        <div class="flex flex-col gap-10 md:flex-row md:items-end md:justify-between">
            <p class="max-w-xl font-sans text-lg leading-relaxed text-[#3a4a37] md:text-xl animate-fade-up [animation-delay:200ms]">
                Há mais de três décadas unimos rigor técnico, ética profissional e atendimento próximo para conduzir sua causa com segurança e da orientação preventiva ao litígio.
            </p>

            <div class="flex w-full flex-col gap-4 sm:flex-row md:w-auto animate-fade-up [animation-delay:300ms]">
                <a href="<?php echo esc_url($whatsapp_link); ?>" class="flex h-14 items-center justify-center gap-2 rounded-full bg-[#20341f] px-10 text-base font-medium text-white transition hover:bg-[#182a17] <?php echo $focus_ring; ?>">
                    <i class="fa fa-whatsapp text-lg" aria-hidden="true"></i>
                    <span>Falar com um advogado</span>
                </a>
                <a href="#atuacao" class="flex h-14 items-center justify-center gap-2 rounded-full border-2 border-[#20341f]/25 px-10 text-base font-medium text-[#20341f] transition hover:border-[#20341f] <?php echo $focus_ring; ?>">
                    <span>Áreas de atuação</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="escritorio" class="relative overflow-hidden bg-[#20341f] px-6 py-20 md:px-20 md:py-28">
    <svg class="pointer-events-none absolute inset-x-0 bottom-0 h-auto w-full" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="250" preserveAspectRatio="none" viewBox="0 0 1440 250" aria-hidden="true">
        <g mask="url(&quot;#SvgjsMask1009&quot;)" fill="none">
            <rect width="1440" height="250" x="0" y="0" fill="rgba(32, 52, 31, 1)"></rect>
            <path d="M18 250L268 0L364 0L114 250z" fill="url(&quot;#SvgjsLinearGradient1010&quot;)"></path>
            <path d="M243.60000000000002 250L493.6 0L739.6 0L489.6 250z" fill="url(&quot;#SvgjsLinearGradient1010&quot;)"></path>
            <path d="M491.20000000000005 250L741.2 0L802.7 0L552.7 250z" fill="url(&quot;#SvgjsLinearGradient1010&quot;)"></path>
            <path d="M720.8000000000001 250L970.8000000000001 0L1219.8000000000002 0L969.8000000000001 250z" fill="url(&quot;#SvgjsLinearGradient1010&quot;)"></path>
            <path d="M1423 250L1173 0L948 0L1198 250z" fill="url(&quot;#SvgjsLinearGradient1011&quot;)"></path>
            <path d="M1192.4 250L942.4000000000001 0L639.4000000000001 0L889.4000000000001 250z" fill="url(&quot;#SvgjsLinearGradient1011&quot;)"></path>
            <path d="M917.8 250L667.8 0L346.79999999999995 0L596.8 250z" fill="url(&quot;#SvgjsLinearGradient1011&quot;)"></path>
            <path d="M719.1999999999999 250L469.19999999999993 0L338.69999999999993 0L588.6999999999999 250z" fill="url(&quot;#SvgjsLinearGradient1011&quot;)"></path>
            <path d="M1247.7190021029987 250L1440 57.719002102998815L1440 250z" fill="url(&quot;#SvgjsLinearGradient1010&quot;)"></path>
            <path d="M0 250L192.28099789700119 250L 0 57.719002102998815z" fill="url(&quot;#SvgjsLinearGradient1011&quot;)"></path>
        </g>
        <defs>
            <mask id="SvgjsMask1009">
                <rect width="1440" height="250" fill="#ffffff"></rect>
            </mask>
            <linearGradient x1="0%" y1="100%" x2="100%" y2="0%" id="SvgjsLinearGradient1010">
                <stop stop-color="rgba(26, 45, 25, 1)" offset="0"></stop>
                <stop stop-opacity="0" stop-color="rgba(26, 45, 25, 1)" offset="0.66"></stop>
            </linearGradient>
            <linearGradient x1="100%" y1="100%" x2="0%" y2="0%" id="SvgjsLinearGradient1011">
                <stop stop-color="rgba(26, 45, 25, 1)" offset="0"></stop>
                <stop stop-opacity="0" stop-color="rgba(26, 45, 25, 1)" offset="0.66"></stop>
            </linearGradient>
        </defs>
    </svg>
    <div class="relative z-10 mx-auto max-w-6xl">
        <div class="grid gap-16 md:grid-cols-[1fr_auto] md:items-start">
            <div class="flex flex-col gap-8">
                <div class="flex items-center gap-3">
                    <span class="h-1.5 w-1.5 rotate-45 bg-[#a6824f]" aria-hidden="true"></span>
                    <p class="font-sans text-xs font-semibold uppercase tracking-[0.28em] text-[#ded8cc]/70">Sobre nós</p>
                </div>
                <h2 class="font-display text-3xl font-light text-[#ded8cc] sm:text-5xl">O Escritório</h2>
                <div class="flex max-w-2xl flex-col gap-5 font-sans text-base leading-relaxed text-[#ded8cc]/85 md:text-lg">
                    <p class="text-justify">
                    Inaugurado em 1990, o escritório Colatto Advogados tem o propósito de oferecer assessoria jurídica estratégica, pautada pela excelência técnica, ética profissional e atendimento personalizado. Nossa atuação é voltada à construção de soluções jurídicas seguras e eficazes, tanto na esfera judicial quanto na extrajudicial. 
                    </p>
                    <p>
                    Nossa equipe é formada por profissionais comprometidos com o constante aperfeiçoamento acadêmico e profissional, buscando atualização permanente por meio de cursos de especialização, capacitações e estudos aprofundados nas diversas áreas do Direito. Esta combinação entre conhecimento técnico e experiência prática permite a elaboração de estratégias sólidas, sem abrir mão da agilidade e da eficiência exigidas pelo ambiente jurídico contemporâneo. 
                    </p>
                </div>
            </div>
            <div class="p-12 hidden select-none font-display text-[9rem] font-light leading-none text-[#ded8cc]/10 md:block" aria-hidden="true">
                <img class="h-46 w-auto" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
            </div>
        </div>

        <?php if ($advogados_query->have_posts()) : ?>
        <div id="advogados" class="mt-16 grid gap-px overflow-hidden rounded-2xl bg-[#ded8cc]/10 sm:grid-cols-2 md:mt-20 md:grid-cols-4">
            <?php while ($advogados_query->have_posts()) : $advogados_query->the_post(); ?>
            <div class="flex flex-col bg-[#20341f]">
                <div class="aspect-square overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('colatto-advogado', [
                            'class'   => 'h-full w-full object-cover',
                            'loading' => 'lazy',
                            'alt'     => get_the_title(),
                        ]); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url($advogado_foto_padrao); ?>" alt="<?php the_title_attribute(); ?>" class="h-full w-full object-cover" loading="lazy" width="808" height="808">
                    <?php endif; ?>
                </div>
                <div class="flex flex-1 flex-col justify-center gap-1 px-6 py-6">
                    <h3 class="font-display text-xl text-[#ded8cc]"><?php the_title(); ?></h3>
                    <p class="font-sans text-sm text-[#ded8cc]/60"><?php echo esc_html(get_the_excerpt()); ?></p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<section id="atuacao" class="bg-[#f7f4ee] px-6 py-20 md:px-20 md:py-28" >
    <div class="mx-auto max-w-6xl">
        <div class="flex flex-col gap-6 border-b border-[#20341f]/10 pb-10 md:flex-row md:items-end md:justify-between">
            <div class="flex max-w-xl flex-col gap-4">
                <div class="flex items-center gap-3">
                    <span class="h-1.5 w-1.5 rotate-45 bg-[#a6824f]" aria-hidden="true"></span>
                    <p class="font-sans text-xs font-semibold uppercase tracking-[0.28em] text-[#6b5636]">Especialidades</p>
                </div>
                <h2 class="font-display text-3xl font-light text-[#20341f] sm:text-5xl">Áreas de Atuação</h2>
            </div>
            <p class="max-w-sm font-sans text-base leading-relaxed text-[#3a4a37]">Soluções jurídicas completas, com atuação consultiva e contenciosa para pessoas físicas e empresas.</p>
        </div>

        <div class="accordion divide-y divide-[#20341f]/10">
            <?php
            $i = 1;
            while ($areas_atuacao->have_posts()) :
                $areas_atuacao->the_post();
            ?>
            <div class="accordion-item flex flex-col py-7">
                <button type="button" class="accordion-trigger group flex w-full cursor-pointer items-center justify-between gap-6 border-0 bg-transparent p-0 text-left <?php echo $focus_ring; ?>">
                    <span class="flex items-center gap-5">
                        <span class="w-9 shrink-0 font-display text-lg font-light text-[#a6824f]"><?php echo esc_html(str_pad((string) $i, 2, '0', STR_PAD_LEFT)); ?></span>
                        <span class="font-display text-xl text-[#20341f] sm:text-2xl"><?php the_title(); ?></span>
                    </span>
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-[#20341f]/20 transition group-hover:border-[#20341f]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </span>
                </button>
                <div class="accordion-content">
                    <div class="flex gap-5 pt-5">
                        <span class="w-9 shrink-0" aria-hidden="true"></span>
                        <div class="max-w-2xl font-sans text-base leading-relaxed text-[#3a4a37]">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $i++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<section id="noticias" class="bg-white px-6 pt-20 pb-10 md:px-20 md:pt-28 md:pb-12">
    <div class="mx-auto max-w-6xl">
        <div class="flex flex-col items-center gap-4 text-center">
            <div class="flex items-center gap-3">
                <span class="h-1.5 w-1.5 rotate-45 bg-[#a6824f]" aria-hidden="true"></span>
                <p class="font-sans text-xs font-semibold uppercase tracking-[0.28em] text-[#6b5636]">Conteúdo jurídico</p>
            </div>
            <h2 class="font-display text-3xl font-light text-[#20341f] sm:text-5xl">Notícias</h2>
            <p class="max-w-xl font-sans text-base leading-relaxed text-[#3a4a37]">Conteúdo atualizado sobre legislação, jurisprudência e os principais acontecimentos do universo jurídico.</p>
        </div>

        <?php
        $noticias = new WP_Query([
            'category_name'  => 'noticias',
            'posts_per_page' => 6,
            'orderby'        => 'ID',
            'order'          => 'DESC',
        ]);
        ?>

        <?php if ($noticias->have_posts()) : ?>
        <div class="mt-14 grid grid-cols-1 gap-x-8 gap-y-14 md:grid-cols-3">
            <?php while ($noticias->have_posts()) : $noticias->the_post(); ?>
            <article class="flex flex-col gap-4 justify-between">
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
        <?php else : ?>
        <p class="mt-14 text-center font-sans text-[#3a4a37]">Em breve, novidades por aqui.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="flex justify-center py-20">
        <a class="flex items-center justify-center border rounded-full py-4 px-12" href="">Todas notícias...</a>
    </div>
</section>

<section id="contato" class="bg-[#4d5c4d] px-6 bg-repeat py-20 md:px-20 md:py-24 ">
    <div class="mx-auto flex max-w-6xl flex-col gap-12 md:flex-row md:items-end md:justify-between">
        <div class="flex flex-col gap-6">
            <h2 class="font-display text-3xl font-light text-[#ded8cc] sm:text-4xl">Vamos conversar sobre o seu caso?</h2>
            <div class="flex flex-col gap-3 font-sans text-base text-[#ded8cc]/80">
                <p><?php echo wp_kses_post(theme_get_address()); ?></p>
                <div class="flex items-center gap-2">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <a href="mailto:<?php echo esc_attr(theme_get_email()); ?>" class="w-fit transition hover:text-white <?php echo $focus_ring; ?>"><?php echo antispambot(theme_get_email()); ?></a>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span><?php echo esc_html(theme_get_phone()); ?></span>
                </div>
            </div>
        </div>
        <a href="<?php echo esc_url($whatsapp_link); ?>" class="flex h-14 w-full items-center justify-center gap-2 rounded-full bg-[#ded8cc] px-10 text-base font-medium text-[#20341f] transition hover:bg-white <?php echo $focus_ring; ?> md:w-auto">
            <i class="fa fa-whatsapp text-lg" aria-hidden="true"></i>
            <span>Fale conosco</span>
        </a>
    </div>
</section>
<?php
get_footer();
