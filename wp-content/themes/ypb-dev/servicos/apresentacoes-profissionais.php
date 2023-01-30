<?php get_header(''); 
	//Template Name: Apresentações Profissionais
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-apresentacoes-profissionais">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>O MATERIAL QUE VOCÊ PRECISA EM MOMENTOS DECISIVOS</p>
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

            <h1 class="title uppercase">A IMPORTÂNCIA DAS APRESENTAÇÕES</h1>
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
                <h1 class="subhead">Nosso trabalho de desenvolvimento de apresentações “sedutoras” inclui:</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/conteudo.png" alt="">
                        <h2 class="uppercase box__h2">Conteúdo</h2>
                        <div class="line__height size__16">
                            <p>
                            No quesito conteúdos podemos adotar dois caminhos:
                            </p>
                            <ul>
                                <li>
                                Ou o cliente nos envia os conteúdos prontos e nós daremos um “banho de loja”, tornando o layout da apresentação encantador
                                </li>
                                <li>
                                Ou podemos inclusive auxiliar com alguns conteúdos, como: pesquisas, dados, redação de textos etc.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/storytelling.png" alt="">
                        <h2 class="uppercase box__h2">storytelling</h2>						
                        <p class="size__16">
                           Como contar a história perfeita?
                        </p>
						<p class="size_16">
							Bons palestrantes, vendedores ou professores tem o “poder” de seduzir sua audiência. Pensaremos na melhor forma de contar a sua história. Faremos a organização das suas ideias, trazendo objetividade e condução do interlocutor até o objetivo que deseja.			
						</p>
                    </div>
                </div> 
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/ritmo-e-animacao.png" alt="">
                        <h2 class="uppercase box__h2">ritmo e animação</h2>
                        <p class="size__16">
							Daremos ritmo para sua apresentação. 
						</p>
						<p class="size__16">
							Não queremos perder nossa audiência em nenhum momento. Para isso, nossa equipe pensará no melhor ritmo para sua apresentação, podendo ser utilizado recursos incríveis de animação.
						</p>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/layout.png" alt="">
                        <h2 class="uppercase box__h2">layout</h2>
                        <p class="size__16">
							 DAREMOS O SHOW! Temos certeza que layout é tudo!  
						</p>
						<p class="size__16">
							Imagem conversam 60.000 vezes mais rápido com os cérebros humanos, do que os textos. Para alcançar nossos objetivos, surpreenderemos no layout de sua apresentação tornando ela realmente linda e atraente. 
						</p>
                    </div>
                </div>
            </div>
        </section>
        
        <? php get_footer(''); ?> 
</body>
</html>