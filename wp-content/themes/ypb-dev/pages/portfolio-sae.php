<?php get_header(''); 
	//Template Name: SAE
?>
    
    <section class="padding-portfolio align__section">
        <main class="container">
        <header>
            <h1  class="title">SAE Brasil</h1>
            <div class="linha"></div>
        </header>
        </main>
    </section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Email Marketing</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img  src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-sae-01.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div style="top: 0;">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-sae-02.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Redes Sociais</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sae-01.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sae-02.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sae-03.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sae-04.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sae-05.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-sae-06.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Landing Page</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/lp-sae-1.jpg" alt="">
                </div>
            </div>
        </section>
    </section>
	<!--chamar carrossel-->
    <?php get_template_part( 'carrossel', '' ); ?>

<?php get_footer(''); ?>
    
</body>
</html>