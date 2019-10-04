<?php
/*
Template Name: eventos
*/

get_header();

?>

<header class="masthead3">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Saiba mais das iniciativas e eventos desenvolvidas durante o ano!</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about2">Continuar</a>
        </div>
      </div>
    </div>
  </header>  

  <!-- About Section -->
  <section class="page-section bg-primary" id="about2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12 text-center">
          <h2 class="text-white mt-0">Eventos e iniciativas que desenvolvemos</h2>
          <hr class="divider my-4">
        </div>
          <hr class="divider light my-4">
          <div class="row">
                <div class="column">
                  <div class="card">
                    <img class="logos"src="<?php bloginfo('template_url');?>/assets/img/festmove.png" alt="Jane" style="width:100%">
                    <div class="container">
                      <h2 class="titulo_evento">Festmove ITZN</h2>
                      <p> é um evento anual, comemorativo do aniversário da Incubadora com palestras, oficinas e outras ações que promovem o empreendedorismo inovador no campus Natal Zona Norte</p>
                      </div>
                  </div>
                </div>
              
                <div class="column">
                  <div class="card">
                    <img class="logos"src="<?php bloginfo('template_url');?>/assets/img/hotel_de_projetos.png" alt="Mike" style="width:100%">
                    <div class="container">
                      <h2 class="titulo_evento">Hotel de projetos</h2>
                      <p>Hotel de Projetos é uma ação da incubadora para apoiar empreendimentos inovadores que estão na fase de ideação.</p>
                      </div>
                  </div>
                </div>
              
          </div>
    </div>
  </section>

<?php get_footer(); ?>