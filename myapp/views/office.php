<body>
        <div style="background: #8B8B8B !important; margin-top:30px" class="jumbotron">
          <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%" >
            <div class="row">
              <div class="col-md-5" style="margin-top: 5%">
                <div style="color: white">
                  <h2>Paquete Office</h2>
                  <p style="color: #DEDEDE">Microsoft Office es una suite ofimática que abarca el mercado completo en Internet e interrelaciona aplicaciones de escritorio, servidores y servicios para los sistemas operativos Microsoft Windows, Mac OS X, iOS y Android. La última versión de la suite ofimática es el Microsoft Office 2019.</p>
                  <p style="color: #DEDEDE">Aqui tendrás los cursos relacionados con el Paquete Ofiice</p>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <img src="<?= asset_url('img/office-logo.jpg') ?>"  alt="Office Logo" width="300px" height="300px" style="border-radius: 12px;">
              </div>
            </div>
          </div>
        </div>
        <div class="container text-center" style="margin: 0 25% 0 25%">
          <div class="row">
            <?php if (count($office) == 0) {
              print "No hay ningun artículo en esta categoria";
            } ?>
           <?php for ($i=0; $i < count($office); $i++) { ?>
             <?= validation_errors(); ?>
             <?= form_open(base_url().'Cursos/cursodetalles'); ?>
             <input type="hidden" name="id_curso" value="<?php print $office[$i]['id_curso']; ?>">
            <div class="col-sm-5">
               <div class="panel panel-primary">
                 <div class="panel-heading" style="min-height: 65px"><?php print $office[$i]['nombre']; ?></div>
                 <div class="panel-body fixed-panel"><?php print $office[$i]['descripcion']; ?><br><strong>Fecha de inicio: </strong><?php print $office[$i]['fecha_ini']; ?><br><strong>Creado por: </strong><?php print $office[$i]['creadopor']; ?><br></div>
                 <div class="panel-footer"><center><p class="precio"><?php print $office[$i]['precio']; ?>€ <button type="submit" class="btn btn-info">+Info</button></p></center></div>
               </div>
             </div>
             <?= form_close(); ?>
           <?php } ?>
        </div>
       </div>
  </body>
</html>
