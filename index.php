<?php get_header(); ?>
  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Incubadora Técnologica ITZN</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75">A Incubadora Tecnológica do Campus Natal Zona Norte é um habitat de inovação situado no campus Natal Zona Norte do Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Saiba Mais</a>
        </div>
      </div>
    </div>
  </header>  

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Sobre a incubadora</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Trata-se de uma instituição destinada à prover os meios necessários para alimentar o ecossistema empreendedor e promover a educação empreendedora da Região Metropolitana da Área Norte de Natal/RN, estimulando a geração de produtos e serviços inovadores de base tecnológica e o desenvolvimento territorial. </p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Continue Lendo</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <?php
            $args = array('post_type'=>'post', 'showposts'=>'3');
            $meus_posts = get_posts($args);
            if(count($meus_posts)>1):
        ?>
        <?php
                foreach($meus_posts as $post):
                setup_postdata($post);
                
        ?>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box  post" href="<?php the_permalink(); ?>">
              <img src="<?php the_post_thumbnail('medium', array('class' => 'img-fluid'));?>
              <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                  <?php the_title(); ?>
                </div>
                <div class="project-name">
                  <?php echo the_excerpt(); ?>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; endif; ?>
      

        </div>
      </div>
    </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Fale conosco</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Pronto para começar a investir na sua empresa/projeto? </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div class="cont-num"> (84) 4006-9538</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contatoitzn@gmail.com">contatoitzn@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>

 
