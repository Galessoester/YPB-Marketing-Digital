<?php get_header(''); 
	//Template Name: Portfólio Modelo
?>
    
    <section class="padding-portfolio align__section">
        <div class="container">
            <header>
                <h1  class="title"><?php the_title();?></h1>
                <div class="linha"></div>
            </header>
        </div>
    </section>

	<section class="container align__section">
		<div class="flex mt-25 wrap align-top " >
			<?php the_content(); ?>
		</div>
	</section>
	<section>
<!-- 		Logo -->
		<?php if( the_field('secao_portfolio')): ?>
		<section class="container align__section">
			<?php if( have_rows('secao') ): ?>
			<h1 class="subhead"><?php the_field('titulo_secao') ?></h1>
			<div class="flex mt-25 wrap align-top ">
				<?php
					while ( have_rows('imagens_secao') ) : the_row();
					if( get_row_layout() == 'imagens' ):
				?>	
					<div class="portfolio__image">
						<img src="<?php the_sub_field('imagem'); ?>">	
					</div>
				<?php endif;endwhile;?>
			</div>
			<?php endif;?>
		</section>
		<?php endif ?>
<!-- 		Banner -->
		<section class="container align__section">
			<?php if( have_rows('secao_banner') ): ?>
			<h1 class="subhead"><?php the_field('titulo_banner') ?></h1>
			<div class="flex mt-25 wrap align-top ">
				<?php
					while ( have_rows('secao_banner') ) : the_row();
					if( get_row_layout() == 'imagem_banner' ):
				?>	
					<div class="portfolio__image">
						<img src="<?php the_sub_field('imagens'); ?>">	
					</div>
				<?php endif;endwhile;?>
			</div>
			<?php endif;?>
		</section>
<!-- 		Flyer -->
		<section class="container align__section">
			<?php if( have_rows('secao_flyer') ): ?>
			<h1 class="subhead"><?php the_field('titulo_flyer') ?></h1>
			<div class="flex mt-25 wrap align-top ">
				<?php
					while ( have_rows('secao_flyers') ) : the_row();
					if( get_row_layout() == 'imagem_flyer' ):
				?>	
					<div class="portfolio__image">
						<img src="<?php the_sub_field('imagens'); ?>">	
					</div>
				<?php endif;endwhile;endif;?>
			</div>
		</section>
<!-- 		Website -->
		<section class="container align__section">
			<?php if( have_rows('secao_website') ): ?>
			<h1 class="subhead"><?php the_field('titulo_website') ?></h1>
			<div class="flex mt-25 wrap align-top ">
				<?php
					while ( have_rows('secao_website') ) : the_row();
					if( get_row_layout() == 'imagem_website' ):
				?>	
					<div class="portfolio__image">
						<img src="<?php the_sub_field('imagens'); ?>">	
					</div>
				<?php endif;endwhile;endif;?>
			</div>
		</section>		
	</section>

    <section> 
        <section class="container align__section">
            <h1 class="subhead">Website</h1>
            <div class="flex mt-25 wrap align-top ">
                <div class="portfolio__image"  > 
                    <div>
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/aedp-home.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </section>
    
<?php get_footer(''); ?>
    
</body>
</html>
