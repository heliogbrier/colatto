<?php
/**
 * Template da página inicial.
 */

get_header();
?>
<section id="inicio" class="py-4 px-4 md:py-18 md:px-20 bg-[#ded8cc]">
    <div class="flex gap-9.5 flex-col items-center md:min-h-100">
        <h1 class="text-xl md:text-[106px] leading-[1.038em] font-normal">
        We are a fine architecture firm in New York
        </h1>
       <div class="flex justify-between w-full">
            <div class="w-full md:w-2/3 flex flex-col gap-8.25">
                <p class="text-[24px] leading-[1.583em] md:w-197.25">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit netus praesent eu orci, volutpat vel proin mattis id suspendisse vel egestas.
                </p>
                <div class="flex flex-col md:flex-row items-center gap-4">
                    <a href="" class="flex gap-2 px-14 items-center h-14 w-full md:w-auto bg-[#20341f] rounded-full text-white text-[20px] pt-5.5 pb-6 font-medium">
                        <i class="fa fa-whatsapp text-xl"></i>
                        <span>Fale conosco</span>  
                    </a>
                    <a href="" class="flex gap-2 items-center h-14 w-full md:w-auto bg-[#ded8cc] border-2 border-[#20341f] rounded-full px-14 pt-5.5 pb-6 text-[20px] font-medium">
                        <span>Áreas de Atuação</span>  
                    </a>
                </div>
            </div>
            <div class="md:flex justify-end hidden">
                <div class="flex items-center justify-center rounded-full border w-24 h-24">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-down-icon lucide-move-down"><path d="M8 18L12 22L16 18"/><path d="M12 2V22"/></svg>
                </div>
            </div>
       </div>
    </div>
</section>
<section id="escritorio" class="py-4 md:py-18 px-4 md:px-18 bg-[#20341f]">
    <div class="flex flex-col gap-8">
        <div class="flex flex-col gap-9">
            <h1 class="text-[#ded8cc] text-[48px] font-medium">O Escritório </h1>
            <div class="flex flex-col gap-4">
            <p class="text-[#ded8cc] md:text-[18px] md:leading-[1.667em] text-justify">
            Inaugurado em 1990, o escritório Colatto Advogados tem o propósito de oferecer assessoria jurídica estratégica, pautada pela excelência técnica, ética profissional e atendimento personalizado. Nossa atuação é voltada à construção de soluções jurídicas seguras e eficazes, tanto na esfera judicial quanto na extrajudicial. 
            </p>
            <p class="text-[#ded8cc] md:text-[18px] md:leading-[1.667em] text-justify"">
            Nossa equipe é formada por profissionais comprometidos com o constante aperfeiçoamento acadêmico e profissional, buscando atualização permanente por meio de cursos de especialização, capacitações e estudos aprofundados nas diversas áreas do Direito. Esta combinação entre conhecimento técnico e experiência prática permite a elaboração de estratégias sólidas, sem abrir mão da agilidade e da eficiência exigidas pelo ambiente jurídico contemporâneo. 
            </p>
            </div>
        </div>
        <div id="advogados" class="grid md:grid-cols-4 py-12 md:divide-x md:divide-white/10">
            <div>
               <div class="max-h-101 overflow-x-hidden md:px-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8 px-12 flex flex-col gap-4">
                    <h2 class="text-[#ded8cc] text-4xl">Ana Cláudia Colatto</h2>
                    <p class="text-[#ded8cc]">OAB/SC 7.137 </p>
               </div>
            </div>
            <div>
               <div class="max-h-101 overflow-x-hidden md:px-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8 px-12 flex flex-col gap-4">
                    <h2 class="text-[#ded8cc] text-4xl">Ruthe Calado Schmitt</h2>
                    <p class="text-[#ded8cc]">OAB/SC 61848</p>
               </div>
            </div>
            <div>
               <div class="max-h-101 overflow-x-hidden md:px-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8 px-12 flex flex-col gap-4">
                    <h2 class="text-[#ded8cc] text-4xl">Renato José Thiesen</h2>
                    <p class="text-[#ded8cc]">OAB/SC 44212</p>
               </div>
            </div>
            <div>
               <div class="max-h-101 overflow-x-hidden md:px-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06.png" alt="">
               </div> 
               <div class="py-8 px-12 flex flex-col gap-4">
                    <h2 class="text-[#ded8cc] text-4xl">Maria Cláudia Colatto </h2>
                    <p class="text-[#ded8cc]">OAB/SC 79.013 </p>
               </div>
            </div>
        </div>
    </div>
</section>
<section id="atuacao" class="bg-white px-4 md:px-20">
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
<section id="noticias" class="px-4 md:px-20 py-4 md:py-18 flex flex-col gap-6">
    <div class="">
        <h2 class="text-5xl text-center">Notícias</h2>
        <p class="text-center">Conteúdo atualizado sobre legislação, jurisprudência e os principais acontecimentos do universo jurídico.</p>
    </div>

    <div class="grid  grid-cols-1 md:grid-cols-3 gap-4 gap-y-12">
        <?php
        $noticias = new WP_Query([
            'category_name'  => 'noticias',
            'posts_per_page' => 6,
            'orderby'        => 'ID',
            'order'          => 'DESC',
        ]);

        while ($noticias->have_posts()) :
            $noticias->the_post();
        ?>
        <div class="flex flex-col justify-between gap-4">
            <div class="flex-1 flex flex-col gap-4">
                <h3 class="text-2xl font-bold"><?php the_title(); ?></h3>
                <div>
                <?php the_excerpt(); ?>
                </div>
            </div>
            <div>
                <a href="<?php the_permalink(); ?>">Continuar lendo…</a>
            </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>
<section id="contato" class="px-4 md:px-20 py-18 flex items-center justify-between flex-col md:flex-row gap-6 bg-black">
<div>
    <p class="text-white">Endereço: Rua dos Ilhéus, n. 38, sala 1.204, Centro, <br /> Florianópolis/SC, CEP 88010-560</p>
</div>
<div class="flex gap-6 md:gap-0 flex-col md:flex-row w-full md:w-1/2 items-center md:justify-between md:border-b md:border-white pb-6">
   <div class="text-white text-xl">
    heliogbrier@gmail.com
   </div>
   <div>
    <a href="" class="flex gap-2 items-center w-full md:w-auto h-14 bg-white rounded-full px-14">
        <i class="fa fa-whatsapp text-xl"></i>
        <span>Fale conosco</span>  
    </a>
   </div>
</div>
</section>
<?php
get_footer();