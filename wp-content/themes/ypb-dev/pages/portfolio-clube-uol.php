<?php get_header(''); 
	//Template Name: Clube UOL
?>
    
    <section class="portfolio__header align__section">
        <main class="container">
			<header>
				<h1  class="title"><?php the_title();?></h1>
				<div class="linha"></div>
			</header>
        </main>
    </section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Banners</h1>
            <div class="flex mt-25 wrap">
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/banner-cuol-1.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/banner-cuol-3.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/banner-cuol-5.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/banner-cuol-6.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/banner-cuol-4.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/banner-cuol-2.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Redes Sociais</h1>
            <div class="flex mt-25 wrap">
                <div class="portfolio__image align-top">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-1.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-2.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-3.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-4.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-5.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/redes-sociais-6.jpg" alt="">
                </div>
            </div>
        </section>
        <section class="container align__section">
            <h1 class="subhead">Email Marketing</h1>
            <div class="flex mt-25 wrap">
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-08.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-06.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-03.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-01.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-04.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-05.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-07.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-09.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-010.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-011.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-cuol-012.jpg" alt="">
                </div>
            </div>
            <div class="flex mt-25 wrap">
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-muol-04.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-muol-03.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-muol-02.jpg" alt="">
                </div>
                <div class="portfolio__image align-top">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/emkt-muol-01.jpg" alt="">
                </div>
            </div>
		</section>            
    </section>
	<!--chamar carrossel-->
    <?php get_template_part( 'carrossel', '' ); ?>
    
<?php get_footer(''); ?>
    
</body>
</html>