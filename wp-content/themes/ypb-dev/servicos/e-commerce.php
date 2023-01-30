<?php get_header(''); 
	//Template Name: E-commerce
?>

    <section class="bg__image">
        <main class="container flex container__servicos bg__modelo" id="bg-e-commerce">
            <div class="container__metade">
                <h1 class="uppercase title"><?php the_title();?></h1>
                <p></p>
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

            <h1 class="title uppercase">A IMPORTÂNCIA Do e-commerce</h1>
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
                <h1 class="subhead">Características dos Trabalhos de E-commerce</h1>
                
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/logistica.png" alt="">
                        <h2 class="uppercase box__h2">Logística</h2>
                        <p class="size__16">
                            A logística é uma questão fundamental quando se fala em e-commerce. Não à toa, grandes marcas estão investindo em fretes mais baratos e com prazos mais curtos. A ideia é otimizar a experiência do consumidor e garantir que a jornada de compra digital seja cada vez mais próxima do que é proporcionado em lojas físicas: agilidade e praticidade.
                        </p>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/seguranca.png" alt="">
                        <h2 class="uppercase box__h2">Segurança</h2>
                        <p class="size__16">
                           	É importante ressaltar que a segurança da sua loja virtual é um dos fatores principais para a fidelização de clientes. Por isso, tenha em mente que o seu e-commerce deve ser atualizado de forma constante.
                        </p>
                    </div>
                    <div class="box__margin box__padding borda__cinza box-3">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/cadastro-de-produtos.png" alt="">
                        <h2 class="uppercase box__h2">Cadastro detalhado de produtos </h2>
                        <p class="size__16">
                            Não adianta ter peças maravilhosas se elas não têm uma ótima apresentação em sua loja virtual. Para uma apresentação chamar a atenção do seu cliente e o leve a efetivar a compra, deve conter imagens, deve ter uma foto, as descrições e os demais detalhes do produto. 
                        </p>
                    </div>
                </div> 
                <div class="stretch flex justify__around">
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/controle-de-estoque.png" alt="">
                        <h2 class="uppercase box__h2">Controle de Estoque</h2>
                        <p class="size__16">
                            Um bom gerenciamento de estoque se inicia conhecendo a demanda e a disponibilidade de mercadorias do seu e-commerce. Com a análise desses dados é possível determinar a frequência mais adequada que você ou o profissional responsável pela logística de seu negócio precisa realizar essa verificação 
                        </p>
                    </div>
                    <div class="box__margin box__padding borda__cinza container__metade">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/12/formas-de-pagamento.png" alt="">
                        <h2 class="uppercase box__h2">Diferentes formas de pagamento</h2>
                        <p class="size__16">
                            O indicado é ter sempre de duas a três opções. Pense em oferecer, pelo menos, duas bandeiras de crédito, boleto e débito.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <?php get_footer(''); ?>
</body>
</html>