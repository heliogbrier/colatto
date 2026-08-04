<?php
/**
 * Template da página inicial.
 */

get_header();
?>
<section class="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/07.png" alt="">
</section>
<section class="py-6 px-6">
    <div class="flex flex-col items-center md:min-h-100">
        <h1 class="text-[106px] ">
        We are a fine architecture firm in New York
        </h1>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit netus praesent eu orci, volutpat vel proin mattis id suspendisse vel egestas.
        </p>
    </div>
</section>
<section class="py-18 px-18 bg-[#20341f]">
    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-4">
            <h1 class="text-[#ded8cc]">O Escritório </h1>
            <p class="text-[#ded8cc]">
            Inaugurado em 1990, o escritório Colatto Advogados tem o propósito de oferecer assessoria jurídica estratégica, pautada pela excelência técnica, ética profissional e atendimento personalizado. Nossa atuação é voltada à construção de soluções jurídicas seguras e eficazes, tanto na esfera judicial quanto na extrajudicial. 
            </p>
            <p class="text-[#ded8cc]">
            Nossa equipe é formada por profissionais comprometidos com o constante aperfeiçoamento acadêmico e profissional, buscando atualização permanente por meio de cursos de especialização, capacitações e estudos aprofundados nas diversas áreas do Direito. Esta combinação entre conhecimento técnico e experiência prática permite a elaboração de estratégias sólidas, sem abrir mão da agilidade e da eficiência exigidas pelo ambiente jurídico contemporâneo. 
            </p>
        </div>
        <div class="grid md:grid-cols-4 gap-8">
            <div>
               <div class="max-h-101 rounded-4xl overflow-x-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8">
                    <h2 class="text-[#ded8cc]">Ana Cláudia Colatto</h2>
                    <p class="text-[#ded8cc]">OAB/SC 7.137 </p>
               </div>
            </div>
            <div>
               <div class="max-h-101 rounded-4xl overflow-x-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8">
                    <h2 class="text-[#ded8cc]">Ana Cláudia Colatto</h2>
                    <p class="text-[#ded8cc]">OAB/SC 7.137 </p>
               </div>
            </div>
            <div>
               <div class="max-h-101 rounded-4xl overflow-x-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8">
                    <h2 class="text-[#ded8cc]">Ana Cláudia Colatto</h2>
                    <p class="text-[#ded8cc]">OAB/SC 7.137 </p>
               </div>
            </div>
            <div>
               <div class="max-h-101 rounded-4xl overflow-x-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8">
                    <h2 class="text-[#ded8cc]">Ana Cláudia Colatto</h2>
                    <p class="text-[#ded8cc]">OAB/SC 7.137 </p>
               </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white px-20">
    <div>
        <h2>Áreas de Atuação</h2>
    </div>
    <div class="accordion divide-y">
        <?php
        $areas_atuacao = new WP_Query([
            'category_name'  => 'areas-de-atuacao',
            'posts_per_page' => -1,
            'orderby'        => 'ID',
            'order'          => 'ASC',
        ]);

        while ($areas_atuacao->have_posts()) :
            $areas_atuacao->the_post();
        ?>
        <div class="accordion-item py-6 flex flex-col">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold"><?php the_title(); ?></h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
                <p class="pt-4">
                <?php the_content(); ?>
                </p>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>
<section class="px-20 py-18 flex flex-col gap-6">
    <div class="">
        <h2 class="text-5xl text-center">Notícias</h2>
        <p class="text-center">Conteúdo atualizado sobre legislação, jurisprudência e os principais acontecimentos do universo jurídico.</p>
    </div>

    <div class="grid  grid-cols-1 md:grid-cols-3 gap-4 gap-y-12">
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="text-2xl font-bold"> Lorem Ipsum is simply dummy text</h3>
                <div>
                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text
                </div>
            </div>
            <div>
                <a href="">Continuar lendo…</a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="text-2xl font-bold"> Lorem Ipsum is simply dummy text</h3>
                <div>
                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text
                </div>
            </div>
            <div>
                <a href="">Continuar lendo…</a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="text-2xl font-bold"> Lorem Ipsum is simply dummy text</h3>
                <div>
                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text
                </div>
            </div>
            <div>
                <a href="">Continuar lendo…</a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="text-2xl font-bold"> Lorem Ipsum is simply dummy text</h3>
                <div>
                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text
                </div>
            </div>
            <div>
                <a href="">Continuar lendo…</a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="text-2xl font-bold"> Lorem Ipsum is simply dummy text</h3>
                <div>
                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text
                </div>
            </div>
            <div>
                <a href="">Continuar lendo…</a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <div>
                <h3 class="text-2xl font-bold"> Lorem Ipsum is simply dummy text</h3>
                <div>
                Lorem Ipsum is simply dummy text, Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text
                </div>
            </div>
            <div>
                <a href="">Continuar lendo…</a>
            </div>
        </div>
    </div>
</section>
<section class="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/03.png" alt="">
</section>
<?php
get_footer();