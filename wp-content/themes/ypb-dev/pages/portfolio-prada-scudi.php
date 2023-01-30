<?php get_header(''); 
	//Template Name: Prada Scudi
?>
    
    <section class="portfolio__header align__section">
        <main class="container">
            <header>
                <h1 class="title">Prada Scudi</h1>
                <div class="linha"></div>
            </header>
        </main>
    </section>
    <section> 
        <section class="container align__section">
            <h1 class="subhead">Logo</h1>
            <div class="flex mt-25 wrap align-top "  >
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-prada-scudi-01.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-prada-scudi-03.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-prada-scudi-02.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-prada-scudi-04.jpg" alt="">
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