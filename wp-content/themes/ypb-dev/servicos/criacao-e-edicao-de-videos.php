<?php get_header(''); 
	//Template Name: Criação e Edição de Vídeos
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-criacao-de-videos">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>USUÁRIOS PREFEREM VÍDEOS</p>
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

            <h1 class="title uppercase">A IMPORTÂNCIA DOS VÍDEOS</h1>
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
                <h1 class="subhead">TIPOS DE VÍDEOS QUE PRODUZIMOS</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/motion.png" alt="">
                        <h2 class="uppercase box__h2">video motion</h2>
                        <div class="line__height size__16">
                            <ul>
                                <li>
                                    <p>
                                        Estes são vídeos mais curtos, no formato de “animação” para dar um recado sobre um produto, serviço ou startup;
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Fazemos o roteiro, storyboard, telas, animação, escolha e gravação de trilha branca ou narração
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Finalização;
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Aplica-se muito para startups digitais, ações de endomarketing, divulgação de serviços em geral.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/video-institucional.png" alt="">
                        <h2 class="uppercase box__h2">video institucional (RECOMENTADO PARA EMPRESAS EM GERAL)</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Roteiro
                                </p>
                            </li>
							<li>
                                <p>
                                    Captação de imagens que forem necessárias in loco
                                </p>
                            </li>
                            <li>
                                <p>
                                    Trilha e narração
                                </p>
                            </li>
                            <li>
                                <p>
                                    Estruturação do vídeo
                                </p>
                            </li>
                            <li>
                                <p>
                                    Produção e pós-produção
                                </p>
                            </li>
                        </ul>
                    </div>
                </div> 
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/video-entrevista.png" alt="">
                        <h2 class="uppercase box__h2">video entrevista</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Vídeos nos formato de entrevistas
                                </p>
                            </li>
                            <li>
                                <p>
                                    Trilha e narração
                                </p>
                            </li>
                            <li>
                                <p>
                                    Estruturação do vídeo
                                </p>
                            </li>
                            <li>
                                <p>
                                    Produção e pós-produção
                                </p>
                            </li>
                            <li>
                                <p>
                                    finalização
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/video-comercial.png" alt="">
                        <h2 class="uppercase box__h2">video comercial</h2>
                        <ul class="line__height size__16">
                            <li>
                                <p>
                                    Vídeos recomendados para venda de produtos e/ou serviços
                                </p>
                            </li>
                            <li>
                                <p>
                                    Temos apresentadores profissionais, caso a empresa não possua
                                </p>
                            </li>
                            <li>
                                <p>
                                    Captação de imagens in loco ou estúdio profissional
                                </p>
                            </li>
                            <li>
                                <p>
                                    Trilha
                                </p>
                            </li>
                            <li>
                                <p>
                                    Produção e pós-produção
                                </p>
                            </li>
                            <li>
                                <p>
                                    finalização
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        
       <?php get_footer(''); ?>
</body>
</html>