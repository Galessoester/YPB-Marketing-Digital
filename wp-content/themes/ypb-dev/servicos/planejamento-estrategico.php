<?php get_header();
	//Template Name: Planejamento Estratégico
?>
    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-planejamento">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>Um trabalho de consultoria digital para sua empresa
                </p>
                <div class="flex">
                    <div class="container__metade">
                        <a href="#saiba-mais">
                            <div class="uppercase text__align__center botao__servicos botao botao__amarelo ">
                                <p class="box">Saiba mais</p>
                            </div>     
                        </a>               
                    </div>
                    <div class="container__metade">
                        <a href="#contato">
                            <div class="uppercase botao__servicos text__align__center botao botao__verde">
                                <p class="box">Solicite um orçamento</p>
                            </div>     
                        </a>               
                    </div>
                </div>
            </div>

        </main>
    </section>
    <!-- ------------------------ linhas -------------------- -->
    <section class="container flex">
        <div class="box__margin box-3 amarelo"></div>
        <div class="box__margin verde box-3"></div>
        <div class="box__margin box-3" id="azul"></div>
    </section>
    <a id="saiba-mais" class="anchor"></a>
    <section>
        <header class="container align__section" >

            <h1 class="title uppercase">A IMPORTÂNCIA DO PLANEJAMENTO</h1>
            <div class="linha amarelo"></div>
        </header>
        
        <section>
            <div class="container flex justify__between">
                <div class="container__metade text__align__justify size__16">
                    <div>                        
                    	<?php the_content(); ?>                        
                    </div>
                </div>
                <div id="margin-negativa">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                </div>
            </div>
        </section>
    </section>
    
    <!-- --------------------------------------------------------------- características ---------------------------------------------------------------- -->
    
    <section>
        <section class="container">
            <div class="align__section">
                <h1 class="subhead">O Planejamento estratégico digital responderá perguntas sobre:</h1>
                
                <div class="stretch flex">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/estudo-concorrentes.png" alt="">
                        <h2 class="uppercase box__h2">Estudo de concorrentes</h2>
                        <ul>
                            <li>
                                <p class="size__16">
                                    Quem são seus concorrentes? 
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    O que eles oferecem de diferenciais aos seus usuários?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Qual a posição e relevância que ocupam no digital em geral?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Qual o tamanho deles em relação a sua empresa?
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/estudo-referencia.png" alt="">
                        <h2 class="uppercase box__h2">Estudo de referência</h2>
                        <ul>
                            <li>
                                <p class="size__16">
                                    Quem é referência nacional no mesmo segmento de atuação que o seu?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Quem é referência internacional?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    O que fazem de tão interessante para serem referência?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Quais são seus números e crescimento no digital?
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/estudo-mercado.png" alt="">
                        <h2 class="uppercase box__h2">estudo de mercado</h2>
                        <ul>
                            <li>
                                <p class="size__16">
                                    Como se comporta o seu segmento de atuação nos meios digitais?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Qual é a maturidade do seu setor nos meios interativos?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Quão competitivo e desafiador é a sua área de atuação no mercado digital?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Quais as melhores oportunidades de ação para a sua empresa?
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="stretch flex">
                    <div class="box__margin box__padding borda__cinza ">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/publico-alvo.png" alt="">
                        <h2 class="uppercase box__h2">público-alvo</h2>
                        <ul>
                            <li>
                                <p class="size__16">
                                    Qual o tamanho, envolvimento e maturidade do seu público-alvo?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Quais as características e categorias de interesse?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Quais as expectativas de cada público de interesse com a sua empresa?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Como estabelecer relacionamento único e relevante com pessoas que podem ter interesse na sua marca?
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/estrategia-digital.png" alt="">
                        <h2 class="uppercase box__h2">estratégia digital</h2>
                        <ul>
                            <li>
                                <p class="size__16">
                                    Quais plataformas poderão ser utilizadas de forma mais eficaz para alcance dos objetivos da empresa?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Qual estratégia de comunicação de lançamento, apresentação e/ou convencimento nos meios interativos?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Como transformar as suas atividades em conteúdos relevantes para o seu público?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Como levar a empresa a liderança no seu segmento no ambiente digital?
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Qual o plano de implementação e prazos estimados?
                                </p>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        
          <?php get_footer('') ?>
</body>
</html>