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
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">TRIBUNAIS E SUSTENTAÇÃO ORAL</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Atuação estratégica perante Tribunais de Justiça, Tribunais Regionais e Tribunais Superiores, com elaboração de recursos, memoriais, despachos com magistrados e sustentações orais em processos de alta complexidade e relevância.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO CIVIL</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Atuação consultiva e contenciosa em questões contratuais, responsabilidade civil, obrigações, direitos reais, indenizações, cobranças, conflitos patrimoniais e demandas judiciais e extrajudiciais em geral.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO ADMINISTRATIVO</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Assessoria e representação em processos administrativos, licitações, contratos públicos, concursos, responsabilização de agentes públicos, regularizações e demandas envolvendo a Administração Pública nas esferas municipal, estadual e federal.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO MILITAR</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Atuação na defesa dos interesses de militares estaduais e federais, em processos administrativos disciplinares, conselhos de disciplina, processos judiciais militares, promoções, transferências e questões funcionais.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO CONSTITUCIONAL</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Atuação em demandas relacionadas à proteção de direitos e garantias fundamentais, controle de legalidade e constitucionalidade, mandados de segurança, ações constitucionais e questões envolvendo a relação entre o cidadão e o Estado.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO DE FAMÍLIA</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Assessoria jurídica em divórcios, dissolução de união estável, guarda, convivência, alimentos, reconhecimento de parentalidade e demais questões familiares, sempre com atuação técnica e sensível às particularidades de cada caso.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO DAS SUCESSÕES</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Planejamento sucessório, inventários judiciais e extrajudiciais, partilhas, testamentos, doações e estruturação patrimonial voltada à preservação e organização do patrimônio familiar.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO PREVIDENCIÁRIO</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Atuação administrativa e judicial na obtenção, revisão e restabelecimento de benefícios previdenciários, aposentadorias, pensões, benefícios por incapacidade e demais direitos perante os regimes previdenciários.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO MÉDICO E DA SAÚDE</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Assessoria a médicos, clínicas, hospitais e demais profissionais da saúde, abrangendo consultoria preventiva, processos éticos, responsabilidade civil médica e demandas judiciais e administrativas do setor.
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">DIREITO INTERNACIONAL</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Assessoria em questões jurídicas transnacionais, contratos internacionais, homologação de decisões estrangeiras, reconhecimento de documentos, conflitos de leis e apoio jurídico a pessoas físicas e empresas com interesses no exterior. 
            </div>
        </div>
        <div class="accordion-item py-6 flex flex-col gap-4">
            <div class="accordion-trigger flex justify-between items-center">
                <h3 class="text-2xl font-bold">CIDADANIA ITALIANA</h3>
                <div class="rounded-full border border-[#1f361f] h-10 w-10 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right-icon lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                </div>
            </div>
            <div class="accordion-content">
            Assessoria em pedidos de reconhecimento da cidadania italiana pelas vias administrativa, consular e judicial, incluindo análise documental, retificação de registros, apostilamento, traduções, transcrições e atualização no AIRE.
            </div>
        </div>
    </div>
</section>
<section class="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/02.png" alt="">
</section>
<section class="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/03.png" alt="">
</section>
<?php
get_footer();