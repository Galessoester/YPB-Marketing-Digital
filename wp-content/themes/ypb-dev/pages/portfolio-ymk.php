<?php get_header(''); 
	//Template Name: YMK
?>
    
    <section class="portfolio__header align__section">
        <main class="container">
        <header>
            <h1 class="title">Grupo YMK</h1>
            <div class="linha"></div>
        </header>
        <div>
            <h2>Logo</h2>
            <img class="portfolio__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-ymk-01.jpg" alt="">
            <img class="portfolio__image" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-ymk-02.jpg" alt="">
        </div>
        </main>
    </section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Email Marketing</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-ymk-04.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-ymk-03.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-ymk-02.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-ymk-01.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Redes Sociais</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-01.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-02.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-03.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-04.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-05.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-06.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-07.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-08.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-09.jpg" alt="">
                    </div>
                </div>
                <!--<div class="portfolio__image"  > -->
                <!--    <div>-->
                <!--        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-10.jpg" alt="">-->
                <!--    </div>-->
                <!--</div>-->
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-11.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-ymk-12.jpg" alt="">
                    </div>
                </div>
                
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Websites</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/site-ymk-01.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/site-ymk-02.jpg" alt="">
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