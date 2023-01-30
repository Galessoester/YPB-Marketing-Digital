<?php get_header(''); 
	//Template Name: Redes Sociais
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-redes-sociais">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>O encantador universo das redes sociais</p>
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

            <h1 class="title uppercase">A IMPORTÂNCIA DAS REDES SOCIAIS</h1>
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
                <h1 class="subhead">O que podemos fazer para sua empresa em cada Rede Social</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/facebook.png" alt="">
                        <h2 class="uppercase box__h2">facebook e google+</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Criação e design da página institucional de sua empresa.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Planejamento de conteúdos a serem publicados, alinhados com o público que queremos atingir.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Produção e/ou clipping destes conteúdos.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Publicação periódica, sendo no mínimo 3 vezes por semana e máximo 7 vezes (1 por dia).
                                </p>
                            </li>
                            <li>
                                <p>
                                    Monitoramento e respostas aos comentários e mensagens inbox.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Criação e gestão de campanhas e anúncios.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/twitter.png" alt="">
                        <h2 class="uppercase box__h2">twitter</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Criação e design da perfil institucional de sua empresa.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Planejamento de conteúdos a serem publicados, alinhados com o público que queremos atingir.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Produção e/ou clipping destes conteúdos.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Publicação periódica, sendo no mínimo 3 vezes por semana e máximo 7 vezes (1 por dia).
                                </p>
                            </li>
                            <li>
                                <p>
                                    Monitoramento e respostas aos “replies”.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Criação e gestão de campanhas e anúncios.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/linkedin.png" alt="">
                        <h2 class="uppercase box__h2">linkedin</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Criação e design da página institucional de sua empresa.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Assessoria para criação de perfis campeões para seus colaboradores.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Planejamento de conteúdos a serem publicados, alinhados com o público que queremos atingir
                                </p>
                            </li>
                            <li>
                                <p>
                                    Produção e/ou clipping destes conteúdos.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Publicação periódica, sendo no mínimo 2 vezes por semana e máximo 7 vezes (1 por dia).
                                </p>
                            </li>
                            <li>
                                <p>
                                    Monitoramento e respostas aos comentários e mensagens inbo
                                </p>
                            </li>
                            <li>
                                <p>
                                    Ghost writer – Podemos escrever conteúdos em nome dos nossos clientes (todos os conteúdos pré-aprovados, claro).
                                </p>
                            </li>
                            <li>
                                <p>
                                    Criação e gestão de campanhas e anúncios.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Criação de Vagas para seleção.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Prospecção ativa via Linkedin para sua empresa.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Treinamentos para as áreas: Comerciais, de Marketing e RH. Com a finalidade de dominarem todos os recursos do Linkedin e assim usarem como ferramenta poderosa para alcance de seus resultados diariamente.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/instagram.png" alt="">
                        <h2 class="uppercase box__h2">instagram</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Criação e design da página institucional de sua empresa.
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Planejamento de conteúdos a serem publicados, alinhados com o público que queremos atingir.
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Produção de imagens para publicação.
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Mobigrafia – Recurso inovador que permite contar histórias através de imagens clicadas via celular.
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Publicações periódicas.
                                </p>
                            </li>
                            <li>
                                <p class="size__16">
                                    Monitoramento e respostas a usuários.
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