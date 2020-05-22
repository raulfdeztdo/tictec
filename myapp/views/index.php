    <div class="container-fluid bg-3 text-center" style="width: 60%">
      <h3>Ultimos cursos añadidos</h3>
      <br>
      <div class="row" id="ultimos3" style="color: #77778C">
        <div class='col-md-4'>
                <div class='panel panel-primary'>
                  <div class='panel-heading' >
                    <img src='<?= asset_url($ultimos3[0]['imagen']) ?>'  alt='Logo0' style="margin: 10%; border-radius: 8px; max-width:140px; max-height:140px; min-width:140px; min-height:140px">
                    <h4 style="color: #FFF"><?php echo $ultimos3[0]['nombre']; ?></h4>
                  </div>
                  <div class='panel-body' style="overflow-y: auto; max-height: 150px; min-height: 150px">
                    <?php echo $ultimos3[0]['descripcion'] ?> <br>
                  </div>
                  <div class="panel-footer">
                     <center><p class="precio"><?php echo "   ".$ultimos3[0]['precio']."€" ?></p></center>
                  </div>
                </div>
        </div>
        <div class='col-md-4'>
                <div class='panel panel-primary'>
                  <div class='panel-heading'>
                    <img src='<?= asset_url($ultimos3[1]['imagen']) ?>'  alt='Logo1' style="margin: 10%; border-radius: 8px; max-width:140px; max-height:140px; min-width:140px; min-height:140px">
                    <h4 style="color: #FFF"><?php echo $ultimos3[1]['nombre'] ?></h4>
                  </div>
                  <div class='panel-body' style="overflow-y: auto; max-height: 150px; min-height: 150px">
                    <?php echo $ultimos3[1]['descripcion'] ?> <br>

                  </div>
                  <div class="panel-footer">
                    <center><p class="precio"><?php echo "   ".$ultimos3[1]['precio']."€" ?></p></center>
                  </div>
                </div>
        </div>
        <div class='col-md-4'>
                <div class='panel panel-primary'>
                  <div class='panel-heading'>
                    <img src='<?= asset_url($ultimos3[2]['imagen']) ?>'  alt='Logo2' style="margin: 10%; border-radius: 8px; max-width:140px; max-height:140px; min-width:140px; min-height:140px">
                    <h4 style="color: #FFF"><?php echo $ultimos3[2]['nombre'] ?></h4>
                  </div>
                  <div class='panel-body' style="overflow-y: auto; max-height: 150px; min-height: 150px">
                    <?php echo $ultimos3[2]['descripcion'] ?> <br>

                  </div>
                  <div class="panel-footer">
                     <center><p class="precio"><?php echo "   ".$ultimos3[2]['precio']."€" ?></p></center>
                  </div>
                </div>
        </div>
      </div>
      <a href="<?php echo base_url().'Cursos/categorias' ?>" class="btn btn-default pull-right">Ver más..</a>
    </div>

    </div>
    <div style="background: #F2F2F2 !important; margin-top:30px" class="jumbotron">
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="alert" style="text-align: center; width: 100%; height: 100%;; font-size: 20px">
              <img src="<?= asset_url('img/time.png') ?>"  alt="time" style="width: 50px; height: 50px">
              Haz los cursos a tu ritmo, tendrás acceso en cualquier momento para realizar tus cursos sin prisa.
            </div>
          </div>
          <div class="item">
            <div class="alert" style="text-align: center; width: 100%; height: 100%; font-size: 20px">
              <img src="<?= asset_url('img/check.png') ?>"  alt="check" style="width: 50px; height: 50px">
              Aprende con profesionales del sector de la programación, podrás elegir el cursos del profesor que quieras.
            </div>
          </div>
          <div class="item">
            <div class="alert" style="text-align: center; width: 100%; height: 100%; font-size: 20px">
              <img src="<?= asset_url('img/video.png') ?>"  alt="video" style="width: 50px; height: 50px">
              Los cursos se seguiran por video tutoriales de nuestros profesores, para que no te pierdas ningun detalle
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="container-fluid bg-3 text-center" style="width: 70%; margin-bottom: 30px">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><div class="panel panel-default" style="height: 100%">
          <div class="panel-heading">Principales Categorias</div>
          <div class="panel-body">
                <center><div class="well" style="width: 50%"><a href="<?php echo base_url().'Cursos/frontend' ?>" class="btn btn-default">Frontend</a></div></center>
                <center><div class="well" style="width: 50%"><a href="<?php echo base_url().'Cursos/backend' ?>" class="btn btn-default">Backend</a></div></center>
                <center><div class="well" style="width: 50%"><a href="<?php echo base_url().'Cursos/office' ?>" class="btn btn-default">Paquete Office</a></div></center>
          </div>
        </div></div>
        <div class="col-md-3"></div>
      </div>
    </div>
</body>
