<?php get_header(''); 
	//Template Name: Aplicativos Móveis
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-aplicativos">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p>OS SMARTPHONES ESTÃO “BOMBANDO”</p>
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

            <h1 class="title uppercase">A IMPORTÂNCIA DOS APPS</h1>
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
                <h1 class="subhead">Características dos Aplicativos móveis</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/layout.png" alt="">
                        <h2 class="uppercase box__h2">web app ou app nativo</h2>
                        <div class="line__height size__16">
                            <ul>
                                <li>
                                    Web App: Trata-se de um aplicativo que tem exatamente as mesmas funcionalidades e look and fell tanto no Android como no iOS. São aplicativos habilitados para internet com funcionalidades específicas para dispositivos móveis. Podem ser publicados nas lojas Apple e Google para download. Ex: app do gmail.
                                </li>
                                <li>
                                    App Nativo: trata-se de um aplicativo desenvolvido especificamente para um determinado tipo de celular. Para iOS ou Android. Também podem ficar disponíveis nas lojas da Appl e Google Play.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/lupa.png" alt="">
                        <h2 class="uppercase box__h2">usabilidade e navegabilidade</h2>
                        <div class="line__height size__16">
                            <p>
                                Pelos menos 10 características: Diálogos simples e natural – Falar a linguagem do usuário – Minimizar a sobrecarga de memória do usuário – Consistência (determinada funcionalidade tem de se repetir exatamente igual e no mesmo local em todas as telas)- Feedback (orienta-lo sobre o que está acontecendo) – Saídas claramente marcadas – Atalhos – Boas mensagens de erro – Prevenir erros – Ajuda e documentação.
                            </p>
                        </div>
                    </div>                  
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/social_serv.png" alt="">
                        <h2 class="uppercase box__h2">publicação nas lojas de aplicativo</h2>
                        <div class="line__height size__16">
                            <p>
                                Depois do seu aplicativo desenvolvido podemos assessorar com a publicação nas lojas Apple Store e Google Play.
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
    <?php get_footer(''); ?>
        
   
</body>
</html>