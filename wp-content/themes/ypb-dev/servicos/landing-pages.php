<?php get_header(''); 
	//Template Name: Landing Pages
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-website">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>PÁGINAS COM ALTA TAXA DE CONVERSÃO</p>
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

            <h1 class="title uppercase">A IMPORTÂNCIA DE UM SITE</h1>
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
                <h1 class="subhead">Características de nossas Landing Pages</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="https://homolog.ypb.com.br/ypb-marketing-digital/wp-content/uploads/2022/12/layout-moderno.png" alt="">
                        <h2 class="uppercase box__h2">layout moderno e visualmente bonito</h2>
                        <div class="line__height size__16">
                            <p>
                                Você sabia que nosso cérebro processa 60.000 vezes mais rápido imagens do que textos? Esta é uma das razões que nós somos empenhados em fazer Landing Pages lindíssimas. Com imagens maravilhosas, poucos textos, e as vezes até mesmo vídeos sensacionais!
                            </p>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="https://homolog.ypb.com.br/ypb-marketing-digital/wp-content/uploads/2022/12/lupa.png" alt="">
                        <h2 class="uppercase box__h2">responsivo</h2>
                        <div class="line__height size__16">
                            <p>
                                A Landing Page de sua empresa precisa se adequar a qualquer tela que for acessado. Seja em computador, laptop, celular ou tablet. Assim é uma página responsiva, adequada para qualquer tamanho de tela. Além de prover a melhor experiência para o visitante, a sua Landing Page estará mais encontrada nas buscas do Google.
                            </p>
                        </div>
                    </div>
                </div> 
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="https://homolog.ypb.com.br/ypb-marketing-digital/wp-content/uploads/2022/12/responsivo.png" alt="">
                        <h2 class="uppercase box__h2">integrado com redes sociais</h2>
                        <div class="line__height size__16">
                            <p>
                                Hoje em dia, todos os usuários de internet estão muito acostumados a navegar em Redes Sociais (Facebook, Twitter, Linkedin, Instagram, Google+ etc). Sendo assim, ao navegar na Lading Page de sua empresa eles adorarão poder compartilhar os conteúdos que interessar, além de poder visitar as redes sociais de sua empresa e começar a seguir sua empresa nas redes sociais. 
                            </p>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="https://homolog.ypb.com.br/ypb-marketing-digital/wp-content/uploads/2022/12/social_serv.png" alt="">
                        <h2 class="uppercase box__h2">arquitetura de informações</h2>
                        <div class="line__height size__16">
                            <p>
                                A estrutura da informação em sua Landing Page deverá ser pensada totalmente focado na taxa de conversão do objetivo de sua empresa. Para isso nossos profissionais estudarão onde ficará o botão de contato, formulário de contato, texto (pequeno) de persuasão, imagens convincentes etc.
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
    <?php get_footer('');  ?>
</body>
</html>