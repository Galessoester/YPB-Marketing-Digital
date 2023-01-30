<?php get_header(''); 
	//Template Name: E-Marketing
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-emkt">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>BOM E “VELHO” EMAIL MARKETING AINDA FUNCIONA</p>
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
        <div class="box__margin box-3 amarelo" ></div>
        <div class="box__margin verde box-3"></div>
        <div class="box__margin box-3" id="azul"></div>
    </section>
    <a id="saiba-mais" class="anchor"></a>
    <section>
        <header class="container align__section" >

            <h1 class="title uppercase">A IMPORTÂNCIA DO E-MARKETING</h1>
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
                <h1 class="subhead">Características dos Trabalhos de Email Marketing</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/design-digital.png" alt="">
                        <h2 class="uppercase box__h2">Criação e design de peças</h2>
                        <p class="size__16">
                            Este é o primeiro passo de uma campanha profissional de email marketing. Criamos as peças de email a partir do briefing conversado com os clientes. Criamos a arte, os conteúdos e finalizamos com a produção do html. Nossa criação segue rigorosamente as boas práticas de email marketing, sempre focados em “dar o recado” de forma clara, objetiva e criativa.
                        </p>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/segmentacao.png" alt="">
                        <h2 class="uppercase box__h2">segmentação</h2>
                        <p class="size__16">
                            Nesta etapa iremos escolher para qual base de emails serão disparados nossos emails . As vezes bases do próprio cliente, outras vezes com bases próprias e até mesmo de parceiros. Tudo sempre muito bem segmentado por geolocalização, categorias, atuações, pessoa física e/ou jurídica.
                        </p>
                    </div>
                </div> 
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/envio.png" alt="">
                        <h2 class="uppercase box__h2">envio</h2>
                        <p class="size__16">
                            Tudo pronto para dispararmos! Agora vamos utilizar uma das plataformas mais recomendadas do mercado , nossas parceiras, com altíssimos índices de performance e entrega. Programaremos o envio para o dia e hora que desejarmos.
                        </p>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/relatorio.png" alt="">
                        <h2 class="uppercase box__h2">relatorios</h2>
                        <p class="size__16">
                           Uma das grandes vantagens do marketing digital é poder mensurar absolutamente   todos os resultados de nossas ações. Nesta etapa emitiremos os relatórios de nossas campanhas: quantas pessoas receberam o email, quantos abriram, quantos clicaram e foram para os links que direcionamos.
                        </p>
                            <br>
                        <p class="size__16">
                            Estes relatórios são individuais por disparo e consolidados periodicamente.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
    <?php get_footer('') ?>
</body>
</html>