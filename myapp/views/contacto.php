  <div id="contact" class="container-fluid" style="padding: 7%; background-color: #E7E7E7; color: #77778C">
        <div class="row">
          <div class="col-sm-5">
            <h2>Contacto</h2>
            <br>
            <br>
            <p>Puedes contactar con nosotros a través del <br> siguiente formulario, de nuestras redes sociales <br> o con los datos de contacto de más abajo</p>
            <br><?= validation_errors('<div class="errors">','</div><br>'); ?>
            <?= form_open(base_url().'Otros/contacto'); ?>
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje" rows="5" style="resize: vertical" required></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right" type="submit">Enviar</button>
              </div>
            </div>
            <br>
            <?= form_close(); ?>
            <p>Contacta con nosotros, y te responderemos en 24h</p>
            <p><span class="glyphicon glyphicon-map-marker"></span>Linares, Jaén</p>
            <p><span class="glyphicon glyphicon-phone"></span> +34 953 09 06 54</p>
            <p><span class="glyphicon glyphicon-envelope"></span> rft00005@red.ujaen.es</p>
          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-5">
            <img src="<?= asset_url('img/imagen-contacto.png') ?>"  alt="imagen-contacto" width="100%">
          </div>
        </div>
    </div>
</body>
