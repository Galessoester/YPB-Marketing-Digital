<?php get_header(''); 
	//Template Name: AEDP
?>
    
    <section class="portfolio__header align__section">
        <main class="container">
            <header>
                <h1 class="title"><?php the_title();?></h1>
                <div class="linha"></div>
            </header>
        </main>
    </section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Logo</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-aedp-1.jpg" alt="">
                    </div>
                </div>
				<div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/logo-aedp-2.jpg" alt="">
                    </div>
                </div>                
            </div>
        </section>
		<section class="container align__section">
            <h1 class="subhead">Flyer</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/flyer-aedp-1.jpg" alt="">
                    </div>
                </div>
				<div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/flyer-aedp-2.jpg" alt="">
                    </div>
                </div>
				<div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/flyer-aedp-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
		<section class="container align__section">
            <h1 class="subhead">Website</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/aedp-home-scaled.jpg" alt="">
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