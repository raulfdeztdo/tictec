<body>

        <div style="background: #8B8B8B !important; margin-top:30px" class="jumbotron">
          <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%">
            <div class="row">
              <div class="col-md-5" style="margin-top: 5%">
                <div style="color: white">
                  <h2>Front End</h2>
                  <p style="color: #DEDEDE">El Front end es la parte de una web que conecta e interactúa con los usuarios que la visitan. Es la parte visible, la que muestra el diseño, los contenidos y la que permite a los visitantes navegar por las diferentes páginas mientras lo deseen. Es una de las dos mitades en las que se divide la estructura de cualquier página web.</p>
                  <p style="color: #DEDEDE">Aqui tendrás los cursos relacionados con la parte de Frontend</p>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <img src="<?= asset_url('img/frontend-logo.png') ?>"  alt="FrontEnd Logo" width="300px" height="300px" style="border-radius: 12px;">
              </div>
            </div>
          </div>
        </div>

        <div class="container text-center" style="margin: 0 25% 0 25%">
          <div class="row">
            <?php if (count($frontend) == 0) {
              print "No hay ningun artículo en esta categoria";
            } ?>
           <?php for ($i=0; $i < count($frontend); $i++) { ?>
             <?= validation_errors(); ?>
             <?= form_open(base_url().'Cursos/cursodetalles'); ?>
             <input type="hidden" name="id_curso" value="<?php print $frontend[$i]['id_curso']; ?>">
            <div class="col-sm-5">
               <div class="panel panel-primary">
                 <div class="panel-heading" style="min-height: 65px"><?php print $frontend[$i]['nombre']; ?></div>
                 <div class="panel-body fixed-panel"><?php print $frontend[$i]['descripcion']; ?><br><strong>Fecha de inicio: </strong><?php print $frontend[$i]['fecha_ini']; ?><br><strong>Creado por: </strong><?php print $frontend[$i]['creadopor']; ?><br></div>
                 <div class="panel-footer"><center><p class="precio"><?php print $frontend[$i]['precio']; ?>€ <button type="submit" class="btn btn-info">+Info</button></p></center></div>
               </div>
             </div>
             <?= form_close(); ?>
           <?php } ?>
        </div>
       </div>


  </body>
</html>
