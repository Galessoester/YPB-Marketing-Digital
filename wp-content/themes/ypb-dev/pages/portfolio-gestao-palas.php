<?php get_header(''); 
	//Template Name: Gestão Palas
?>
    
    <section class="portfolio__header align__section">
        <main class="container">
        <header>
            <h1 class="title">Gestão Palas</h1>
            <div class="linha"></div>
        </header>
        </main>
    </section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Website</h1>
            <div class="flex mt-25 wrap align-top ">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/gestao-palas-home.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Apresentações</h1>
            <div class="flex mt-25 wrap align-top ">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-gp-1.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-gp-2.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-gp-3.jpg" alt="">
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