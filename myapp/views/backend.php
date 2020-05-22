<body>
        <div style="background: #8B8B8B !important; margin-top:30px" class="jumbotron">
          <div class="container text-center" style="color: #5C5D5D; margin: 0 10% 0 10%; width:90%">
            <div class="row">
              <div class="col-md-5" style="margin-top: 5%">
                <div style="color: white">
                  <h2>Back End</h2>
                  <p style="color: #DEDEDE">El Back end es la parte trasera de cualquier página web. Se trata de todo el conjunto del desarrollo que se encarga de que una página funcione y de que lo haga como lo hace, pero que al mismo tiempo es totalmente invisible para el usuario, que solo ve lo visual y gráfico.</p>
                  <p style="color: #DEDEDE">Aqui tendrás los cursos relacionados con la parte de Backend</p>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <img src="<?= asset_url('img/backend-logo.png') ?>"  alt="BackEnd Logo" width="300px" height="300px" style="border-radius: 12px;">
              </div>
            </div>
          </div>
        </div>

        <?php
        // echo '<pre>';
        // print_r($backend[0]);
        // echo '</pre>';
         ?>

        <div class="container text-center" style="margin: 0 25% 0 25%">
          <div class="row">
            <?php if (count($backend) == 0) {
              print "No hay ningun artículo en esta categoria";
            } ?>

           <?php for ($i=0; $i < count($backend); $i++) { ?>
             <?= validation_errors(); ?>
             <?= form_open(base_url().'Cursos/cursodetalles'); ?>
             <input type="hidden" name="id_curso" value="<?php print $backend[$i]['id_curso']; ?>">
            <div class="col-sm-5">
               <div class="panel panel-primary">
                 <div class="panel-heading" style="min-height: 65px"><?php print $backend[$i]['nombre']; ?></div>
                 <div class="panel-body fixed-panel"><?php print $backend[$i]['descripcion']; ?><br><strong>Fecha de inicio: </strong><?php print $backend[$i]['fecha_ini']; ?><br><strong>Creado por: </strong><?php print $backend[$i]['creadopor']; ?><br></div>
                 <div class="panel-footer"><center><p class="precio"><?php print $backend[$i]['precio']; ?>€ <button type="submit" class="btn btn-info">+Info</button></p></center></div>
               </div>
             </div>
          <?= form_close(); ?>
           <?php } ?>
        </div>
       </div>


</body>
</html>
