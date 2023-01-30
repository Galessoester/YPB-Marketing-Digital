<?php get_header(''); 
	//Template Name: Portais de Conteúdo
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-website">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>PODEROSAS PLATAFORMAS NA ERA DA INFORMAÇÃO</p>
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
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/icone_email_marketing.png">
                </div>
            </div>
        </section>
    </section>
    
    <!-- --------------------------------------------------------------- características ---------------------------------------------------------------- -->
    
    <section>
        <section class="container">
            <div class="align__section">
                <h1 class="subhead">Características de portais de conteúdo</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/modelos-de-negocios.png" alt="">
                        <h2 class="uppercase box__h2">modelos de negócios</h2>
                        <div class="line__height size__16">
                            <p>
                               Podemos ajudar a sua empresa a pensar nos modelos de negócios para o seu Portal. Se você lançar um portal atrativo, com conteúdos interessantes, certamente terá acessos de visitantes. Tais visitantes são target para sua empresa e potenciais parceiros do seu portal. Nesta linha, podemos ajudar a pensar em modelos de monetização do seu portal: serviços, publicidade, indicações, captação de leads e etc.
                            </p>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/otimizado-para-o-google.png" alt="">
                        <h2 class="uppercase box__h2">otimizado para o google</h2>
                        <div class="line__height size__16">
                            <p>
                                Quem não está no Google não está no mundo. Por isso é fundamental que o seu website seja indexado pelo Google, para que as pessoas que não conhecem sua empresa te encontrem pela procura de palavras-chave na internet, entregando a sua página como um dos resultados mais relevantes . Para que tudo isso aconteça, o seu site precisa estar otimizado e ser construído com uma inteligência tecnologia de otimização (SEO friendly).
                            </p>
                        </div>
                    </div>
					<div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/integrado-redes-sociais.png" alt="">
                        <h2 class="uppercase box__h2">integrado com redes sociais</h2>
                        <div class="line__height size__16">
                            <p>
                                Hoje em dia, todos os usuários de internet estão muito acostumados a navegar em Redes Sociais (Facebook, Twitter, Linkedin, Instagram, Google+, etc). Sendo assim, ao navegar no site de sua empresa eles poderão compartilhar os conteúdos que interessar , além de poder visitar as redes sociais de sua empresa e começar a segui-las.  Um site profissional precisa ter recursos sociais.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="stretch flex justify__around">
					<div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/auto-gerenciavel.png" alt="">
                        <h2 class="uppercase box__h2">auto-gerenciável</h2>
                        <div class="line__height size__16">
                            <p>
                               Um site profissional possui um ambiente administrativo onde sua empresa poderá inserir novos conteúdos, alterar conteúdos existentes, e isso sem depender de ninguém. Tendo assim total autonomia na administração de seu website.  Claro que se sua empresa desejar, nossa agência estará sempre pronta para ajudar com esta administração. 
                            </p>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/publicidade.png" alt="">
                        <h2 class="uppercase box__h2">publicidade</h2>
                        <div class="line__height size__16">
                            <p>
                                O Portal de conteúdos profissional poderá prever ambientes e formatos de publicidade, para divulgação de produtos e/ou serviços de clientes do portal ou da própria empresa.
                            </p>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/arquitetura-de-informacao.png" alt="">
                        <h2 class="uppercase box__h2">Arquitetura de informação profissional</h2>
                        <div class="line__height size__16">
                            <p>
                                O desenvolvimento do portal é pensado a partir dos conteúdos que serão publicados. Categorias, sub-categorias, interação do usuário, funcionalidades e etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <?php get_footer(''); ?>
</body>
</html>