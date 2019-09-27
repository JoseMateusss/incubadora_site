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
            if(count($meus_posts)>=1):
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
<section class="page-section bg-primary map" id="localizacao">
 <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center:{lat: -5.749358, lng: -35.261059},
          zoom: 18,
          styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
          
        });
       
       
      var markerImage = "wp-content/themes/incubadora_site/assets/img/logoSite.png";
      var marker = new google.maps.Marker({
          position: {lat: -5.749358, lng: -35.261059},
          map: map,
          icon: markerImage
      });
      attachSecretMessage(marker);

      function attachSecretMessage(marker) {
        var infowindow = new google.maps.InfoWindow({
          content: '<h5>Incubadora Tecnológica do Campus Natal Zona Norte</h5>'
        });
        marker.addListener('click', function() {
          infowindow.open(marker.get('map'), marker);
        });
      }
    }
     
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV9rjWaT7OFIj1Zt0VcMxY29_AhhFXNm4&callback=initMap"
    async defer></script>
</section>
  <!-- Contact Section -->

  <!-- Contact Section -->
  <section class="page-section bg-primary" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Fale conosco</h2>
          <hr class="divider my-4">
        
        </div>
      </div>
     <div class="row mx-auto contact">

        
        <div class="col-lg-6 col-sm-12 ">
          <div class="title-form mt-lg-0 mt-sm-2 text-flow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy!</div>
          <div class="text-flow">
            <br>
            <p class="text-flow">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters:</p> 
            <br>
          </div>
        </div>

        <div class="col-lg-6 col-sm-12 form">
          <form>
            <div class="form-group text-flow">
              <label class="" for="formGroupExampleInput">Nome*</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="João da Silva">
            </div>
            <div class="form-group text-flow">
              <label class="" for="formGroupExampleInput2">E-mail*</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="João@gmail.com">
            </div>
            <div class="form-group text-flow">
              <label for="exampleFormControlTextarea1">Mensagem*</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Sua mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-light btn-xl js-scroll-trigger">Enviar</button>
          </form>

     </div>
  </section>

  <?php get_footer(); ?>

 
