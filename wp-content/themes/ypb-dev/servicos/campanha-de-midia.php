<?php get_header(''); 
	//Template Name: Campanha de Mídia
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-campanhas-de-midia">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>SUA EMPRESA, PRODUTO OU SERVIÇO NA PRIMEIRA PÁGINA DO GOOGLE</p>
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

            <h1 class="title uppercase">CAMPANHAS DE MÍDIA E SUA IMPORTÂNCIA</h1>
            <div class="linha amarelo"></div>
        </header>
        
        <section>
            <div class="container flex justify__between">
                <div class="container__metade text__align__justify size__16 line__height">
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
                <h1 class="subhead">Gestão de campanhas no Google passo-a-passo</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/setup.png" alt="">
                        <h2 class="uppercase box__h2">set up</h2>
                        <div class="line__height size__16">
                            <ul>
                                <li>
                                    Estudo e entendimento do briefing de mídia: público-alvo, lugar de atuação da sua empresa, objetivos de campanha
                                </li>
                                <li>
                                    Planejamento de metas e métricas
                                </li>
                                <li>
                                    Criação de anúncios
                                </li>
                                <li>
                                    Estudo e criação de listas de palavras-chave
                                </li>
                                <li>
                                    Upload de campanha
                                </li>
                                <li>
                                    Início de campanha no Google
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/monitoramento.png" alt="">
                        <h2 class="uppercase box__h2">monitoramento de performance</h2>
                        <ul class="line__height size__16">
                            <li>
                                 Acompanhamento diário da campanha  
                            </li>
                            <li>
                                Inclusão de novos anúncios
                            </li>
                            <li>
                                Inclusão de novas palavras-chave
                            </li>
                            <li>
                                Negativação de anúncios e/ou palavras-chave
                            </li>
                            <li>
                                Acompanhamento das métricas e metas
                            </li>
                            
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/relatorios.png" alt="">
                        <h2 class="uppercase box__h2">relatorios</h2>
                        <ul class="line__height size__16">
                            <li>
                                Entrega e análise dos resultados com base nas metas definidas no set up 
                            </li>
                            <li>
                                Emissão periódica de relatórios detalhados
                            </li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
            <?php get_footer('') ?>
</body>
</html>