<?php
/*
Template Name: incubados
*/


?>
<?php get_header(); ?>

<header class="masthead2">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Saiba mais sobre quem já está conosco</h1>
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
          <h2 class="text-white mt-0">Empresas incubadas</h2>
          <hr class="divider my-4">
        </div>
          <hr class="divider light my-4">
          
          <div class="card col-sm-3">
              <img class="logos" src="<?php bloginfo('template_url');?>/assets/img/logodaaus.jpeg" alt="" width="100%">
              <h2>DAAUS</h2>
              <p class="title">Startup em pré-incubação</p>
              <p class="card_titulo"> é um Dispositivo Auxiliar para Atendimento das Unidades de Saúde, trata-se de um aplicativo para 
                  gerenciar filas de clínicas e hospitais. O projeto DAAUS, ainda está em fase de pré-incubação e validação do mercado.</p>
          </div>
          <div class="card col-sm-3">
                <img class="logos" src="<?php bloginfo('template_url');?>/assets/img/logoOlga.jpeg" alt="" width="100%">
                <h2>OLGA</h2>
                <p class="title">Startup em pré-incubação</p>
                <p class="card_titulo"> É um projeto pré-incubado que está desenvolvendo uma horta inteligente que utiliza além da el
                    etrônica, a sustentabilidade, desenvolvendo uma solução nutritiva para o plantio de hortaliças orgânicas em pequenos esp
                    aços.</p>
            </div>
            <div class="card col-sm-3">
                    <img class="logos" src="<?php bloginfo('template_url');?>/assets/img/logowase.png" alt="" width="100%">
                    <h2>WASE informática</h2>
                    <p class="title">Empresa incubada</p>
                    <p class="card_texto"> WASE INFORMÁTICA, empresa que desenvolve serviços de manutenção de informática e está desenvolvendo 
                        a plataforma INFOGREEN, um sistema de gestão de resíduos eletrônicos e que também auxilia empreendedores que prestam ser
                        viços de manutenção em equipamentos eletrônicos e de informática.</p>
            </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>