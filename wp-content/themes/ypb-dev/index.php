<?php get_header(); 
	//Template Name: Home
?>

    <!-- header imagem -->
    <section id="bg-hero" class="bg__image bg__cover">
        <main class="container flex">
            <div class="container__metade">
                <div class="conteudo">
                    <h1 class="uppercase title">marketing digital</h1>
                    <h3>com inteligência competitiva
                    </h3>
                    <a href="./#contato">
                        <div class="uppercase botao botao__amarelo text__align__center">
                            <p class="size__16">entre em contato</p>
                        </div>     
                    </a>               
                </div>
            </div>
            <div class="container__metade">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/foto_home.png" alt="moça de cabelos cacheados e oculos preto sentada, um celular, e um rapaz em pé">
            </div>
        </main>
    </section>
    <!-- ---------------------------------------------------- BOXES ------------------------------------------------- -->
    <section class="container stretch flex" id="container-boxes">
        <div class="box box__margin box__padding box-3 amarelo">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/plan.png" alt="icone de uma lista de planos">
            <h1 class="uppercase color__fff">planejamento</h1>
            <p class="color__fff">Acreditamos em Marketing Digital com planejamento. Analisamos suas necessidades e aplicamos as melhores soluções.</p>
        </div>
        <div class="box box__margin box__padding verde box-3">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/target.png" alt="icone de um alvo">
            <h1 class="uppercase color__fff">objetivos</h1>
            <p class="color__fff">Nossa especialidade é te ajudar a alcançar entender seus objetivos e aplicar as estratégias de marketing mais adequadas para atingir os resultados desejados.</p>
        </div>
        <div  class="box box__margin box__padding box-3" id="azul">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/lamp.png" alt="icone lampada acesa, ideia">
            <h1 class="uppercase color__fff">soluções</h1>
            <p class="color__fff">Estamos há mais de 11 anos no mercado atendendo empresas dos mais variados segmentos e tamanhos, na indústria, comércio e serviços.</p>
        </div>
    </section>

    <!-- --------------------------------------------------- AGENCIA FULL SERVICE ----------------------------------------------- -->
    <section>
        <a id="servicos" class="anchor"></a>
        <header class="container" >
            <h1  class="title">AGÊNCIA FULL SERVICE</h1>
            <div class="linha amarelo"></div>
            <h4 class="subhead">Conheça nossos serviços</h4>
        </header>

        <!-- ---------------------------------------------- PRIMEIRA SEÇÃO - MARKETING DIGITAL -------------------------------------- -->
        <section class="container ">
            <div class="align__section">
                <h1 class="subhead">Marketing Digital</h1>
                <div class=" uppercase stretch flex">
                    <a class="box__cinza box__margin box-3 box__padding borda__verde box__link" href="<?php echo get_site_url(); ?>/planejamento-estrategico">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-planejamento_estrategico.png" alt="">
                        <h2 class="box__h2">Planejamento Estratégico</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 box__padding borda__verde box__link" href="<?php echo get_site_url(); ?>/e-mail-marketing">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-email_marketing.png" alt="">
                        <h2 class="box__h2">EMAIL MARKETING</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 box__padding borda__verde box__link" href="<?php echo get_site_url(); ?>/redes-sociais">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-redes_sociais.png" alt="">
                        <h2 class="box__h2">REDES SOCIAIS</h2>
                    </a>
                </div>
                <div class="uppercase stretch flex">
                    <a class="box__cinza box__margin box-3 box__padding borda__verde box__link" href="<?php echo get_site_url(); ?>/campanhas-de-midia">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-campanhas_de_midia.png" alt="">
                        <h2 class="box__h2">Campanhas de mídia</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 box__padding borda__verde box__link" href="<?php echo get_site_url(); ?>/apresentacoes-profissionais">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-apresentacoes_profissionais.png" alt="">
                        <h2 class="box__h2">APRESENTAÇÕES PROFISSIONAIS</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 box__padding borda__verde box__link" href="<?php echo get_site_url(); ?>/criacao-e-edicao-de-videos">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-criacao_de_videos.png" alt="">
                        <h2 class="box__h2">CRIAÇÃO E EDIÇÃO DE VÍDEOS</h2>
                    </a>
                </div>
            </div>
        </section>

        <!-- -------------------------------------------- SEGUNDA SEÇÃO - DESENVOLVIMENTO ------------------------ -->
        <section class="container">
            <div class="align__section">
            <h1 class="subhead"> Desenvolvimento</h1>
                <div class=" uppercase stretch flex">
                    <a class="box__cinza box__margin box-3 box__padding borda__azul box__link" href="<?php echo get_site_url(); ?>/website">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-websites_profissionais.png" alt="">
                        <h2 class="box__h2">WEBSITE PROFISSIONAL</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 borda__azul box__padding box__link" href="<?php echo get_site_url(); ?>/e-commerce">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-e_commerce.png" alt="">
                        <h2 class="box__h2">E-Commerce</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 borda__azul box__padding box__link" href="<?php echo get_site_url(); ?>/portais-de-conteudo">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-portais_de_conteudo.png" alt="">
                        <h2 class="box__h2">PORTAIS DE CONTEÚDO</h2>
                    </a>
                </div>

                <div class="uppercase stretch flex">
                    <a class="box__cinza box__margin box-3 borda__azul box__padding box__link" href="<?php echo get_site_url(); ?>/aplicativos-moveis">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-aplicativos_moveis.png" alt="">
                        <h2 class="box__h2">APLICATIVOS MÓVEIS</h2>
                    </a>
                    <a class="box__cinza box__margin box-3 borda__azul box__padding box__link" href="<?php echo get_site_url(); ?>/landing-pages">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/home-landing_pages.png" alt="">
                        <h2 class="box__h2">LANDING PAGES</h2>
                    </a>
                    <div class=" box__margin box-3">
                        &nbsp;
                    </div>
                </div>
            </div>
        </section>

    </section>

    <!-- ------------------------------------------------------ RESULTADOS ------------------------------------------ -->
    <section id="bg-lampadas" class="align__section bg__image bg__cover">
        <header class="container align__section" >
        <a class="anchor" id="a-ypb"></a>

            <h1 class="title uppercase">somos a ypb</h1>
            <div class="linha amarelo"></div>
            <h4 class="subhead">Atendimento personalizado e excelência em todos aspectos</h4>
            
            <p>Estamos há mais de 10 anos no mercado atendendo empresas dos mais variados segmentos e tamanhos.
            </p>
            <br>
            <p>Somos especialistas em entender os objetivos das empresas e aplicar as estratégias de comunicação mais adequadas para atingir 
            os resultados esperados e assim desenvolver um trabalho de longo prazo.
            </p>
        </header>

        <!-- --------------------------------------------------- CARD RESULTADOS ----------------------------------------- -->
        <section class="container">
            <h2 class="subhead">Veja nossos resultados</h2>
            <section class="container stretch flex" >
                <div class="box__margin box__branco borda__amarela box__padding text__align__center box-3" >
                    <img class="icone__resultados" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/coroa.png" alt="">
                    <h1 class="title">+ <span class="counter">10</span></h1>
                    <p>Anos no mercado</p>
                </div>
                <div class="box__margin box__branco borda__amarela box__padding text__align__center box-3">
                    <img class="icone__resultados" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/pessoas.png" alt="">
                    <h1 class="title">+ <span class="counter">132</span> </h1>
                    <p>Clientes atendidos</p>
                </div>
                <div class="box__margin box__branco borda__amarela box__padding text__align__center box-3">
                    <img class="icone__resultados" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/pinceis.png" alt="">
                    <h1 class="title">+ <span class="counter">5415</span></h1>
                    <p>Jobs realizados </p>
                </div>
            </section>
        </section>
    </section>

    <!-- -------------------------------------------------- CARROSSEL ------------------------------------- -->
    <!--chamar carrossel-->
    <?php include("carrossel.php"); ?>

    <!-- -----------------------------------------------FALE COM A YPB ------------------------------------- -->
<?php get_footer(''); ?>

</body>
</html>