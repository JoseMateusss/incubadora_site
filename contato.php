<?php
/** 
    * Template name: contato
*/
?>

<?php get_header(); ?>


    <!-- About Section -->
  <section class="page-section bg-primary" id="about-cont">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h2 class="text-white mt-0">Fale Conosco!</h2>
              <hr class="divider light my-4">
              <p class="text-white-50 mb-4">A incubadora funciona de segunda a sexta, em horário comercial!<br>
            08:00 ás 12:00 e 14:00 ás 18:00 <br> Ou <br> nos mande uma mensagem!</p>
              <a class="btn btn-light btn-xl js-scroll-trigger" href="#contact">Mandar mensagem!</a>
            </div>
          </div>
        </div>
      </section>
         
       <!-- map Section -->
      <section class="map-section" id="map-cont">
        <div class="container">
          <div class="row justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3969.748747146384!2d-35.26020646931152!3d-5.7492653786396595!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3abb5048b2fcb%3A0xef4f6c5edaa6d542!2sIFRN%20Campus%20Natal-Zona%20Norte!5e0!3m2!1spt-BR!2sbr!4v1568946031949!5m2!1spt-BR!2sbr" width="1500" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </section>
    
      <!-- Contact Section -->
      <section class="form-section" id="contact">
        <form>
            <div class="form-group">
                <label for="campoDeNome">Nome:</label>
                <input id="campoDeNome"type="text" name="nome" class="form-control">
            </div>
            <div class="form-group">
                <label for="campoDeEmail">Email:</label>
                <input type="text" name="email" id="campoDeEmail" class="form-control">
            </div>
            <div class="form-group">
                <label for="campoDeMensagem">Mensagem:</label>
                <textarea name="mensagem" id="campoDeMensagem" cols="80" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="enviar" class="form-control" id="botao-enviar">
            </div>
        </form>
      </section>







<?php get_footer();?>