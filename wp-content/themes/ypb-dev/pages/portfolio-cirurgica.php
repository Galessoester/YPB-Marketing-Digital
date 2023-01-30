<?php get_header(''); 
	//Template Name: Cirurgica
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
            <h1 class="subhead">Apresentações</h1>
            <div class="flex mt-25 wrap align-top">
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-cirurgica-01.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-cirurgica-02.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-cirurgica-03.jpg" alt="">
                    </div>
                </div>
                <div class="portfolio__image align-top">
					<div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/apresentacao-cirurgica-04.jpg" alt="">
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