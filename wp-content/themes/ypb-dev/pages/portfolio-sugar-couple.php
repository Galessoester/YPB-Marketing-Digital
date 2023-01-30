<?php get_header(''); 
	//Template Name: Sugar Couple
?>
    
    <section class="portfolio__header align__section">
        <main class="container">
            <header>
                <h1 class="title">Sugar Couple</h1>
                <div class="linha"></div>
            </header>           
        </main>
    </section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Logo</h1>
            <div class="flex mt-25 wrap align-top"  >
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-sugar-couple-branco.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-sugar-couple-preto.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Redes Sociais</h1>
            <div class="flex mt-25 wrap align-top"  >
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sc-01.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01e/redes-sociais-sc-02.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sc-03.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sc-04.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>
	<!--chamar carrossel-->
    <?php get_template_part( 'carrossel', '' ); ?>
    
<?php get_footer(''); ?>
    
</body>
</html>