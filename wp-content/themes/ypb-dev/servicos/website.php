<?php get_header(''); 
	//Template Name: Website Profissionais
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-website">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>Somos especialistas em produção de sites, desde o design até a programação.
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

            <h1 class="title uppercase">Por que preciso de um site?</h1>
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
                <h1 class="subhead">Características de um website profissional</h1>
                
                <div class="stretch flex">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/layout-1.png" alt="">
                        <h2 class="uppercase box__h2">Layout moderno e bonito</h2>
                        <p class="size__16">
                          	Você sabia que nosso cérebro processa 60.000 vezes mais rápido imagens do que textos? 
							Esta é uma das razões que nós somos empenhados em fazer sites lindíssimos. Com imagens maravilhosas, poucos textos, e até mesmo vídeos sensacionais!
                        </p>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/lupa.png" alt="">
                        <h2 class="uppercase box__h2">Otimizado para o google</h2>
                        <p class="size__16">
							Quem não está no Google não está no mundo. Por isso é fundamental que o seu website seja indexado pelo Google, para que as pessoas que não conhecem sua empresa te encontrem pela procura de palavras-chave na internet, entregando a sua página como um dos resultados mais relevantes. Para que tudo isso aconteça, o seu site precisa estar otimizado e ser construído com uma inteligência tecnologia de otimização (SEO friendly).
						</p>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/responsivo.png" alt="">
                        <h2 class="uppercase box__h2">Responsivo</h2>
                        <p class="size__16">
							O site de sua empresa precisa se adequar automaticamente a qualquer tamanho de tela onde ele seja acessado (computador, laptop, celular ou tablet). É assim que funciona um site responsivo, adequado para qualquer tamanho de tela. Além de prover a melhor experiência para o visitante, o seu site será mais facilmente encontrado  nas buscas do Google.
						</p>
                    </div>
                </div>
                <div class="stretch flex">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/social_serv.png" alt="">
                        <h2 class="uppercase box__h2">Integrado com as redes sociais</h2>
                        <p class="size__16">
                            Hoje em dia, todos os usuários de internet estão muito acostumados a navegar em Redes Sociais (Facebook, Twitter, Linkedin, Instagram, Google+, etc). Sendo assim, ao navegar no site de sua empresa eles poderão compartilhar os conteúdos que interessar, além de poder visitar as redes sociais de sua empresa e começar a segui-las. Um site profissional precisa ter recursos sociais.
						</p>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/gerenciamento.png" alt="">
                        <h2 class="uppercase box__h2">Auto-gerenciável</h2>
                        <p class="size__16">
                            Um site profissional possui um ambiente administrativo onde sua empresa poderá inserir novos conteúdos, alterar conteúdos existentes, e isso sem depender de ninguém. Tendo assim total autonomia na administração de seu website. Claro que se sua empresa desejar, nossa agência estará sempre pronta para ajudar com esta administração. 
						</p>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/usabilidade.png" alt="">
                        <h2 class="uppercase box__h2">usabilidade e navegabilidade</h2>
                        <p class="size__16">
							Um site profissional tem os conteúdos e objetos muito bem distribuídos para oferecer ao usuário a melhor experiência de navegação. E o mais importante, tudo pensado e alinhado com os objetivos da empresa. Quais são as metas  que queremos que os nossos visitantes cumpram em nosso site? Contato? Inscrição? Compra de produto/serviço? Solicitação de orçamento? Conseguimos alcançar os seus objetivos, qualquer que seja ele.
						</p>
                    </div>
                </div>
            </div>
        </section>
        
        <?php get_footer(''); ?>
</body>
</html>