<footer class="bg__contato  align__section">
    <a class="anchor" id="contato"></a>
    <header class="container" >
        <h1 class="title uppercase">FALE COM A YPB</h1>
        <div class="linha amarelo"></div>
        <h4 class="subhead">Vamos conversar?</h4>
    </header>
    <section class="container flex">
        <div class="container__metade">
            <form action="" name="formContato" method="post">
                <p class="size__16">Preencha o formulário abaixo e entraremos em contato em breve.</p>
                <div class="flex">
                    <div  class="form__container" >
                        <input class="campo" type="text" id="usuario" name="usuario" placeholder="Nome" required>
                    </div>
                    <div  class="form__container" >
                        <input class="campo" type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="flex">
                    <div  class="form__container">
                        <input class="campo" type="tel" id="fone" name="fone" placeholder="telefone com DDD" required>
                    </div>
                    <div  class="form__container">
                        <input class="campo" type="text" id="empresa" name="empresa" placeholder="Empresa" required>
                    </div>
                </div>
                
                <div id="text-area">
                    <textarea class="campo" name="" id="" placeholder="Mensagem" required></textarea>
                </div>
                
                <div class="flex">
                    
                    <button class="uppercase form__container color__fff" type="submit"> enviar </button>
                </div>
                
            </form>
        </div>
        <div class="container__metade">
            <div class="conteudo-info size__16">
                <p id="icone-endereco" class="dados__ypb"> Av. Jabaquara, 1771 – conj. 212 – 2º andar
                    CEP: 04045-003 | São Paulo | Brasil</p>
                <p id="icone-fone" class="dados__ypb"> +55 (11) 3209-3492</p>
                <p  id="icone-mail" class="dados__ypb"> falecom@ypb.com.br </p>
                
                <div >
                    <a href="https://www.facebook.com/YPBmarketing" target="_blank">
                        <img class="redes__sociais" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/logo_facebook.png" alt="facebook">
                    </a>
                    <a href="https://www.instagram.com/ypbmarketingdigital/" target="_blank">
                        <img class="redes__sociais" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/logo_instagram.png" alt="instagram">
                    </a>
                    <a href="https://web.whatsapp.com/send?phone=5511981054607" target="_blank">
                        <img class="redes__sociais" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/logo_whatsapp.png" alt="whatsapp">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="footer box">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.564267514034!2d-46.6414606844747!3d-23.619955069645034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5998813d91f7%3A0x85e250248236e7e4!2sYPB%20Marketing%20Digital!5e0!3m2!1spt-BR!2sbr!4v1633547943933!5m2!1spt-BR!2sbr" class="mapa"  height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
        <div id="footer-font" class="box container flex justify__between">
            <p class="color__fff">© 2021 YPB Marketing Digital - Todos os direitos reservados</p>
            <div >
                <a href="https://www.facebook.com/YPBmarketing" target="_blank">
                    <img class="redes__sociais"  src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/logo_facebook.png" alt="facebook">
                </a>
                <a href="https://www.instagram.com/ypbmarketingdigital/" target="_blank">
                    <img class="redes__sociais"  src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/logo_instagram.png" alt="instagram">
                </a>
                <a href="https://web.whatsapp.com/send?phone=5511981054607" target="_blank">
                    <img class="redes__sociais"  src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/11/logo_whatsapp.png" alt="whatsapp">
                </a>
            </div>
        </div>
    </section>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/plugins/counter-up/jquery.counterup.min.js"></script>
    <script>
        jQuery(document).ready(function( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time: 800
            });
        });
    </script>
	
	<script src="<?php echo get_template_directory_uri(); ?>/plugins/owl-carrossel/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    })
    </script>
    
</footer>