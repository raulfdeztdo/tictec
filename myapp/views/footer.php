  <!-- Site footer -->
      <footer class="site-footer">
        <div class="container" style="color: #F2F2F2">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>Informacion</h6>
              <p class="text-justify" id="inf-text">Si tienes alguna duda acerca de nuestros cursos, quieres proponer nuevos para que los subamos, o quieres hacerte profesor para subir tus propios cursos a nuestra plataforma, no dudes en contactar con nosotros a través del apartado de Contacto, estaremos encantandos de escuchar tus propuestas.</p>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Categorias</h6>
              <ul class="footer-links">
                <li><a href="<?php echo base_url().'Cursos/frontend' ?>">FrontEnd</a></li>
                <li><a href="<?php echo base_url().'Cursos/backend' ?>">BackEnd</a></li>
                <li><a href="<?php echo base_url().'Cursos/office' ?>">Paquete Office</a></li>
              </ul>
            </div>

            <div class="col-xs-6 col-md-3">
              <h6>Indice</h6>
              <ul class="footer-links">
                <li><a href="<?php echo base_url().'Inicio/index' ?>">Inicio</a></li>
                <li><a href="<?php echo base_url().'Cursos/categorias' ?>">Categorias</a></li>
                <li><a href="<?php echo base_url().'Otros/nosotros' ?>">Nosotros</a></li>
                <li><a href="<?php echo base_url().'Otros/contacto' ?>">Contacto</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container" style="color: #F2F2F2">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2020 Todos los derechos reservados. Tic Tec &nbsp <img src="<?= asset_url('img/logo1-pequeño.jpg') ?>"  alt="video" style="border-radius: 12px" height="50px">
              </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a href="#"><img src="<?= asset_url('img/rrss/facebook.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?= asset_url('img/rrss/twitter.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?= asset_url('img/rrss/instagram.png') ?>" alt=""></a></li>
                <li><a href="#"><img src="<?= asset_url('img/rrss/linkdin.png') ?>" alt=""></i></a></li>
              </ul>
            </div>
          </div>
        </div>
  </footer>
</html>
